<?php 

#users only
function usersOnly($redirect = '/signin'){
    if(empty($_SESSION['id'])){
        $_SESSION['message'] = 'Please Sign in';
        $_SESSION['type'] = 'danger';
        header('location:' . BASE_URL . $redirect);
        exit();
    }
    if(!empty($_SESSION['id'] && $_SESSION['admin'] > 0)){
        $_SESSION['message'] = 'You are not Authorized';
        $_SESSION['type'] = 'danger';
        header('location:' . BASE_URL . '/dashboard/admin/');
        exit();
    }
}

#admins Only
function adminOnly(){
    if (empty($_SESSION['id'])){
        $_SESSION['message'] = 'Please Sign in';
        $_SESSION['type'] = 'danger';
        header('location:' . BASE_URL . '/signin');
        exit();
    }
    if(!empty($_SESSION['id'] && $_SESSION['admin'] != 1)){
        $_SESSION['message'] = 'You are not Authorized';
        $_SESSION['type'] = 'danger';
        header('location:' . BASE_URL . '/dashboard/admin/');
        exit();
    }
}

?>