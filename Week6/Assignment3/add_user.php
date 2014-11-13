<?php
// Get the product data
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


// Validate inputs
if (empty($email)) {
    $error = "Invalid email.  Please enter a valid email";
    echo $error;

} 

else if ((strlen($password) < 4))
    
{
    $error = "Invalid password.  Please enter a valid password over 4 characters in length";
    echo $error;
}   
else{
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
