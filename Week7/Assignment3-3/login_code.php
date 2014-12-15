<?php


$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$errors = array();

//include('Functions.php');
include './ValidatorClass.php';

session_start();

$functions = new ValidatorClass();

if ($functions->check_email($email)== false)
{
   $errors[] = "Invalid Email.  Email not found.";
}

if ($functions->check_login($email, $password)== true)
{
    $_SESSION['loggedin']=true;

}
else
{
    $_SESSION['loggedin']=false;
    $errors[] = "Invalid Login.  Please reenter email and password.";
}
    
    if ($_SESSION['loggedin'] == true)
    {
      header('Location: Admin.php');
    }

//var_dump($_SESSION);
    include('login.php');

?>
