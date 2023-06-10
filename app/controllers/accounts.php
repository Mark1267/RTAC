<?php 
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/funds.php');
include(ROOT_PATH . '/app/helpers/mailer.php');
include(ROOT_PATH . '/app/helpers/middleware.php');
include(ROOT_PATH . '/app/helpers/paging.php');
include(ROOT_PATH . '/app/helpers/validate.php');
include(ROOT_PATH . '/app/helpers/transactioner.php');
$errors = array();
$error = array();

#create account var
$errors['name'] = $errors['exn'] = $errors['address'] = $errors['currency'] = '';
$errors['currencyMatch'] = $name = $address = $currency = $network = '';

#deposit
$errors['account'] = $errors['amount'] = $errors['plan_id'] = $errors['enough'] = ''; 
$plan_id = $account_id = $amount = $user_address = $trans_hash = '';

#account
$errors['amount'] = $errors['currency'] = $errors['account'] = '';
$currency = $amount = $account = '';

#confirm
$errors['user_address'] = $errors['trans_hash'] = '';

#tables
$table = 'accounts';
$table2 = 'transactions';

#select
$accounts  = selectAll($table);

#functionalities
if(isset($_GET['acc_id'])){
    $id = $_GET['acc_id'];
    $account = selectOne($table, ['id' => $_GET['acc_id']]);
    $name = $account['name'];
    $address = $account['address'];
    $currency = $account['currency'];
    $network = $account['network'];
}

if(isset($_GET['trans_id'])){
    $id = $_GET['trans_id'];
    $transaction = selectOne($table2, ['trans_id' => $id]);
    $account = selectOne($table, ['id' => $transaction['account_id']]);
    $amount = $transaction['amount'];
    $currency = $account['currency'];
    $id = $transaction['id'];
}

if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $transaction = selectOne($table2, ['id' => $id]);
    $fund = selectOne('funds', ['trans_id' => $transaction['trans_id']]);
    delete($table2, $transaction['id']);
    delete('funds', $fund['id']);
    $_SESSION['message'] = 'Transaction of Trans ID:' . $transaction['trans_id'] . ' Deleted Successfully.';
    $_SESSION['type'] = 'success';
    if ($_SESSION['admin'] == 1) {
        header('location: ' . BASE_URL . '/dashboard/admin/deposit/');
    }else{
        header('location: ' . BASE_URL . '/dashboard/user/');
    }
    exit();
}

#accept & reverse deposit
if(isset($_GET['id']) && isset($_GET['action'])){
    adminOnly();
    if ($_GET['action'] === 'accept') {
        $deposit = update($table2, $_GET['id'], ['status' => 1]);
        $transaction = selectOne($table2, ['id' => $_GET['id'], 'nature' => 1, 'status' => 1]);
        $user = selectOne('users', ['id' => $transaction['user_id']]);
        if($user['ref'] > 0){
            $ref_bouns = 0.1 * $transaction['amount'];
            $ref_user = selectOne('users', ['id' => $user['ref']]);
            $balance = $ref_bouns + $ref_user['balance'];
            $newBalance = update('users', $user['ref'], ['balance' => $balance]);
        }
        $account = selectOne('accounts', ['id' => $transaction['account_id']]);
        $plan = selectOne('plans', ['id' => $transaction['plan_id']]);
        $startt = date('Y-m-d'); $end = date('Y-m-d', strtotime($startt . ' + '. $plan['ROI'] . ' days'));
        $funds = create('funds', ['currentInvestment' => $transaction['amount'], 'trans_id' => $transaction['trans_id'], 'user_id' => $transaction['user_id'], 'plan_id' => $transaction['plan_id'], 'start' => date('Y-m-d'), 'end' => $end]);
        $message = 'Admin ' . $_SESSION['firstname'] . ' accepted a deposit';
        $feeds = create('feeds', ['user_id' => $_SESSION['id'], 'type' => 'success', 'message' => $message, 'status' => 1]);
        $user = selectOne('users', ['id' => $transaction['user_id']]);
        $template_file = '../mail/investS.php';
        $logo = BASE_URL . '/assets/open/images/logo-home5.png';
        $swap_var = array(
            "#name#" => $user['firstname'],
            "#name2#" => $user['lastname'],
            "#fullname#" => $user['firstname'] . ' ' . $user['lastname'],
            "{EMAIL_TITLE}" => 'Deposit Request', 
            "{TO_EMAIL}" => $user['email'], 
            "#wallet#" => $transaction['receiver_address'],
            "#amount#" => $transaction['amount'], 
            "#currency#" => $account['name'],
            "#remarks#" => $account['name'] . ' Deposit Method',
            "#logo#" => $logo, 
            "#trans_id#" => $transaction['trans_id'],
            '#datetime#' => date('Y-m-d : h:i:s a')
        );
        mailing($template_file, $swap_var);
        $_SESSION['message'] = 'Deposit Accepted Successfully';
        $_SESSION['type'] = 'success';
    }else{
        $fund = update($table2, $_GET['id'], ['status' => 0]); #change deposit status to false
        $transaction = selectOne($table2, ['id' => $_GET['id']]); #select the new updated deposit
        $funds = selectOne('funds', ['user_id' => $transaction['user_id'], 'trans_id' => $transaction['trans_id']]); //select fund so i can get old currentInvestment value
        $current = delete('funds', $funds['id']);
        $message = 'Admin ' . $_SESSION['firstname'] . ' reversed a deposit';
        $feeds = create('feeds', ['user_id' => $_SESSION['id'], 'type' => 'primary', 'message' => $message, 'status' => 1]);
        $_SESSION['message'] = 'Deposit Reversed Successfully';
        $_SESSION['type'] = 'primary';
    }
}

#accept & reverse withdrawals.
if(isset($_GET['with_id']) && isset($_GET['action'])){
    adminOnly();
    if($_GET['action'] === 'accept'){
        $transaction = update($table2, $_GET['with_id'], ['status' => 1]);
        $transactions = selectOne($table2, ['id' => $_GET['with_id']]);
        $account = selectOne('accounts', ['id' => $transactions['account_id']]);
        $user = selectOne('users', ['id' => $transactions['user_id']]);
        $balance = $user['balance'] - $transactions['amount'];
        $newUser = update('users', $user['id'], ['balance' => $balance]);
        $template_file = '../mail/withdrawalS.php';
        $logo = BASE_URL . '/assets/open/images/logo-home5.png';
        $swap_var = array(
            "#name#" => $user['firstname'],
            "#name2#" => $user['lastname'],
            "#fullname#" => $user['firstname'] . ' ' . $user['lastname'],
            "{EMAIL_TITLE}" => 'Withdrawal Request', 
            "{TO_EMAIL}" => $user['email'], 
            "#wallet#" => $transactions['receiver_address'],
            "#amount#" => $transactions['amount'], 
            "#currency#" => $account['name'],
            "#remarks#" => $account['name'] . ' Withdrawal Method',
            "#logo#" => $logo, 
            "#trans_id#" => $transactions['trans_id'],
            '#datetime#' => date('Y-m-d : h:i:s a')
        );
        mailing($template_file, $swap_var);
        $_SESSION['message'] = 'Withdrawal Accepted';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . '/dashboard/admin/transactions/withdrawals.php');
    }else{
        $fund = update($table2, $_GET['with_id'], ['status' => 0]); #change deposit status to false
        $transactions = selectOne($table2, ['id' => $_GET['with_id']]); #select the new updated deposit
        $user = selectOne('users', ['id' => $transactions['user_id']]);
        $balance = $user['balance'] + $transactions['amount'];
        $newUser = update('users', $user['id'], ['balance' => $balance]);
        $message = 'Admin ' . $_SESSION['firstname'] . ' reversed a withdrawal';
        $feeds = create('feeds', ['user_id' => $_SESSION['id'], 'type' => 'primary', 'message' => $message, 'status' => 1]);
        $_SESSION['message'] = 'Withdrawal Reversed Successfully';
        $_SESSION['type'] = 'primary';
    }
}

#addAccount
if(isset($_POST['addAccount'])){
    adminOnly();
    $genErrors = accoutVal($_POST);
    $errors = $genErrors[0];
    $subMainError = $genErrors[1];
    if(count($subMainError) === 0){
        unset($_POST['addAccount']);
        $_POST['user_id'] = $_SESSION['id'];
        $account_id = create($table, $_POST);
        $message = 'Admin User ' . $_SESSION['firstname'] . '  created an account';
        $feeds = create('feeds', ['user_id' => $_SESSION['id'], 'message' => $message, 'type' => 'primary', 'status' => 1]);
        $_SESSION['message'] = $_POST['name'] . ' account created';
        $_SESSION['type'] = 'success';
        header('location:' .  BASE_URL . '/dashboard/admin/');
        exit();
    }else{
        $name = $_POST['name'];
        $network = $_POST['network'];
        $address = $_POST['address'];
        $currency = $_POST['currency'];
    }
}

#updateAccount
if(isset($_POST['updateAccount'])){
    adminOnly();
    $genErrors = accoutVal($_POST);
    $errors = $genErrors[0];
    $subMainError = $genErrors[1];
    if(count($subMainError) === 0){
        $id = $_POST['id'];
        unset($_POST['updateAccount'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $account_id = update($table, $id, $_POST);
        $message = 'Admin User ' . $_SESSION['firstname'] . '  updated ' . $_POST['name'] . ' account';
        $feeds = create('feeds', ['user_id' => $_SESSION['id'], 'message' => $message, 'type' => 'primary', 'status' => 1]);
        $_SESSION['message'] = $_POST['name'] . ' updated successfully';
        $_SESSION['type'] = 'success';
        header('location:' .  BASE_URL . '/dashboard/admin/');
        exit();
    }else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $network = $_POST['network'];
        $address = $_POST['address'];
        $currency = $_POST['currency'];
    }
}

#deposit-btn
if(isset($_POST['deposit-btn'])){
    usersOnly();
    $genErrors = depositVal($_POST);
    $errors = $genErrors[0];
    $subMainError = $genErrors[1];
    if(count($subMainError) === 0){
        unset($_POST['deposit-btn']);
        $_POST['trans_id'] = generateRandomString($p_code, 5);
        #deposit has a nature of 1 while withdrawal has a nature of 0
        $account = selectOne('accounts', ['id' => $_POST['account_id']]);
        $_POST['nature'] = 1;
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['receiver_address'] = $account['address'];
        $_POST['status'] = 0;
        $deposit_id = create($table2, $_POST);
        $message = $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . ' made a deposit request';
        $feeds = create('feeds', ['user_id' => $_SESSION['id'], 'message' => $message, 'type' => 'success', 'status' => 1]);
        $message = 'You made a deposit request';
        $feeds = create('feeds', ['user_id' => $_SESSION['id'], 'message' => $message, 'type' => 'success', 'status' => 0]);
        
        $template_file = 'investMail.php';
        $logo = BASE_URL . '/assets/open/images/logo-home5.png';
        $swap_var = array(
            '#name#' => $_SESSION['firstname'],
            "#name2#" => $_SESSION['lastname'],
            '#trans_id#' => $_POST['trans_id'],
            "#fullname#" => $_SESSION['firstname'] . ' ' . $_SESSION['lastname'],
            "#currency#" => $account['name'],
            "{EMAIL_TITLE}" => 'Deposit Request',
            "{TO_EMAIL}" => $_SESSION['email'],
            "#wallet#" => $_POST['receiver_address'],
            "#remarks#" => $account['name'] . ' Deposit Method',
            "#amount#" => $_POST['amount'],
            "#logo#" => $logo,
            '#datetime#' => date('Y-m-d : h:i:s a')
        );
        mailing($template_file, $swap_var);
        $swap_var["{TO_EMAIL}"] = 'support@rocktera-assets.com';
        mailing($template_file, $swap_var);
        
        header('location:' . BASE_URL . '/dashboard/user/promt.php?trans_id=' . $_POST['trans_id']);
        exit();
    }else{
        $plan_id = $_POST['plan_id'];
        $account_id = $_POST['account_id'];
        $amount = $_POST['amount'];
    }
}

#withdraw
if (isset($_POST['withdraw'])) {
    usersOnly();
    $genErrors = withdrawVal($_POST);
    $errors = $genErrors[0];
    $subMainError = $genErrors[1];
    if(count($subMainError) === 0){
        $bal = $_SESSION['balance'] - $_POST['amount'];
        if ($bal >= 0) {
            $_POST['receiver_address'] = $_POST['account'];
            $account = selectOne('accounts', ['id' => $_POST['currency']]);
            unset($_POST['withdraw'], $_POST['account'], $_POST['currency']);
            $_POST['nature'] = 0;
            $_POST['status'] = 0;
            $_POST['trans_id'] = generateRandomString($p_code, 5);
            $_POST['user_id'] = $_SESSION['id'];
            $_POST['account_id'] = $account['id'];
            $transaction = create($table2, $_POST);
            $message = $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . ' made a withdrawal request';
            $feeds = create('feeds', ['user_id' => $_SESSION['id'], 'message' => $message, 'type' => 'warning', 'status' => 1]);
            $message = 'You made a withdrawal request';
            $feeds = create('feeds', ['user_id' => $_SESSION['id'], 'message' => $message, 'type' => 'success', 'status' => 0]);
            $template_file = 'withdrawMail.php';
            $logo = BASE_URL . '/assets/open/images/logo-home5.png';
            $swap_var = array(
                '#name#' => $_SESSION['firstname'],
                "#name2#" => $user['lastname'],
                '#trans_id#' => $_POST['trans_id'],
                "#fullname#" => $_SESSION['firstname'] . ' ' . $_SESSION['lastname'],
                "#currency#" => $account['name'],
                "{EMAIL_TITLE}" => 'Withdrawal Request',
                "{TO_EMAIL}" => $_SESSION['email'],
                "#wallet#" => $_POST['receiver_address'],
                "#remarks#" => $account['name'] . ' Withdrawal Method',
                "#amount#" => $_POST['amount'],
                "#logo#" => $logo,
                '#datetime#' => date('Y-m-d : h:i:s a')
            );
            mailing($template_file, $swap_var);
            $swap_var["{TO_EMAIL}"] = 'support@rocktera-assets.com';
            mailing($template_file, $swap_var);
            $_SESSION['message'] = '<b>Withdrawal Request</b> made successfully';
            $_SESSION['type'] = 'success';
            header('location:' . BASE_URL . '/dashboard/user/');
            exit();
        }else{
            $_SESSION['message'] = '<b>Insufficent Balance</b>';
            $_SESSION['type'] = 'danger';
            header('location:' . BASE_URL . '/dashboard/user/withdraw.php');
            exit();
        }
    }else{
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $account = $_POST['account'];
    }
}

#confirmDeposit
if(isset($_POST['confirmDeposit']) || isset($_POST['confirmWithdrawal'])){
    $genErrors = confirmVal($_POST);
    $errors = $genErrors[0];
    $subMainError = $genErrors[1];
    if(count($subMainError) === 0){
        $id = $_POST['id'];
        unset($_POST['amount'], $_POST['currency'], $_POST['id']);
        if(isset($_POST['confirmDeposit'])){
            usersOnly();
            unset($_POST['confirmDeposit']);
            update($table2, $id, $_POST);
            $transaction = selectOne($table2, ['id' => $id]);
            $account = selectOne('accounts', ['id' => $transaction['account_id']]);
            #send mail to user
            $logo = BASE_URL . '/assets/dashboard/images/logo-full.png';        
                $template_file = 'dconfirm.php';
                $swap_var = array(
                    "#name#" => $_SESSION['firstname'],
                    "#name2#" => $_SESSION['lastname'],
                "#fullname#" => $_SESSION['firstname'] . ' ' . $_SESSION['lastname'],
                "#currency#" => $account['name'],
                "{EMAIL_TITLE}" => 'Deposit Notification Confirmation Service',
                "{TO_EMAIL}" => $_SESSION['email'],
                "#wallet#" => $transaction['receiver_address'],
                "#cwallet#" => $transaction['user_address'],
                "#has#" => $transaction['trans_hash'],
                '#type#' => 'Deposit Confirmation',
                "#remarks#" => $account['name'] . ' Deposit Method',
                "#amount#" => $transaction['amount'],
                "#logo#" => $logo,
                '#datetime#' => date('Y-m-d : h:i:s a')
            );
            mailing($template_file, $swap_var);
            $transaction = selectOne($table2, ['id' => $id]);
            $message = 'You confirmed your deposit of Trans ID:' . $transaction['trans_id'] . ' Zenex Assets Team will confirm the transaction soon';
            $feed_id = create('feeds', ['user_id' => $_SESSION['id'], 'message' => $message, 'type' => 'success']);
            $_SESSION['message'] = $message;
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/dashboard/user/');
            exit();
        }else{
            adminOnly();
            unset($_POST['confirmWithdrawal']);
            update($table2, $id, $_POST);
            $transaction = update($table2, $id, ['status' => 1]);
            $transaction = selectOne($table2, ['id' => $id]);
            $account = selectOne('accounts', ['id' => $transaction['account_id']]);
            $user = selectOne('users', ['id' => $transaction['user_id']]);
            $balance = $user['balance'] - $transaction['amount'];
            $newUser = update('users', $user['id'], ['balance' => $balance]);
            #send mail to user
            $logo = BASE_URL . '/assets/dashboard/images/logo-full.png';        
                $template_file = 'wsuccess.php';
                $swap_var = array(
                    "#name#" => $_SESSION['firstname'],
                    "#name2#" => $_SESSION['lastname'],
                "#fullname#" => $_SESSION['firstname'] . ' ' . $_SESSION['lastname'],
                "#currency#" => $account['name'],
                "{EMAIL_TITLE}" => 'Withdrawal Notification Successful Service',
                "{TO_EMAIL}" => $_SESSION['email'],
                "#cwallet#" => $transaction['receiver_address'],
                "#wallet#" => $transaction['user_address'],
                "#has#" => $transaction['trans_hash'],
                '#type#' => 'Withdrawal Successful',
                "#remarks#" => $account['name'] . ' Withdrawal Method',
                "#amount#" => $transaction['amount'],
                "#logo#" => $logo,
                '#datetime#' => date('Y-m-d : h:i:s a')
            );
            mailing($template_file, $swap_var);
            #send mail to user
            $transaction = selectOne($table2, ['id' => $id]);
            $message = 'You confirmed and Accepted the withdrawal of Trans ID:' . $transaction['trans_id'];
            $feed_id = create('feeds', ['user_id' => $_SESSION['id'], 'message' => $message, 'type' => 'success']);
            $_SESSION['message'] = $message;
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/dashboard/admin/withdrawal/');
            exit();

        }
    }else{
        $id = $_POST['id'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $user_address = $_POST['user_address'];
        $trans_hash = $_POST['trans_hash'];
    }

}

?>
