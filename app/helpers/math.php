<?php 

#percentage users to admins
function percentUsers($users, $admins, $return){
    $totalUsers = $users + $admins ;
    if($return === 'admin'){
        $usersper = $admins / $totalUsers;
        $usersper *= 100;
        return $usersper;
    }else{
        $usersper = $users / $totalUsers;
        $usersper *= 100;
        return $usersper;
    }
}

function sigFig($value, $digits){
    if ($value == 0) {
        $decimalPlaces = $digits - 1;
    } elseif ($value < 0) {
        $decimalPlaces = $digits - floor(log10($value * -1)) - 1;
    } else {
        $decimalPlaces = $digits - floor(log10($value)) - 1;
    }

    $answer = round($value, $decimalPlaces);
    return $answer;
}







?>