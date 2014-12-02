

<?php
// Get the product data
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$errors = array();

//function check_login($email, $password)
//{
   // $check_login = ('SELECT * FROM signup WHERE email = :email, password = :password');
    //if (!$check_login)
    //{
    //}
    //if (mysql_num_rows($check_login) >0){
       // $check_login_test = true;
    
       // return true;
   // }

//}


//if (check_login($email, $password))
//{
   // $error[] = "The email and password already exist in database.";

//}
        
// Validate inputs
if (isset($email) && empty($email)) {
    
    $errors[] = "Invalid email.  Please enter a valid email";
} 

if (isset($password) && (strlen($password) < 4))
    
{
    $errors[] = "Invalid password.  Please enter a valid password over 4 characters in length";
}   

if (isset($email)&& count($errors)== 0){
        // If valid, add the email and password to the database

    $password = sha1($password);
    
    $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
    $dbs = $db->prepare('INSERT into signup set email = :email, password = :password');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    $dbs->bindParam(':password', $password, PDO::PARAM_STR);




    if ( $dbs->execute() && $dbs->rowCount() > 0 )
    {
        echo "Sign Up Complete";
    }
    else
    {
        echo "Sign Up Incomplete";
        var_dump($db->errorInfo());
    }
    

}
    include('add_user.php');
    ?>