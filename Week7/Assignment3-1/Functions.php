<?php
function check_login($email, $password)
{
    $check_login = ('SELECT * FROM signup WHERE email = :email, password = :password');
    //if (!$check_login)
    //{
    //}
    if (mysql_num_rows($check_login) >0){
        $check_login_test = true;
    }
    return;
}
?>
