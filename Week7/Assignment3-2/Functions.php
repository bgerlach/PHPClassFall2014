<?php
function check_login($email, $password)
{
    $password = sha1($password);
    
    $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
    $dbs = $db->prepare('SELECT * FROM signup WHERE email = :email AND password = :password');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    $dbs->bindParam(':password', $password, PDO::PARAM_STR);




    if ( $dbs->execute() && $dbs->rowCount() > 0 )
    {
        return true;
    }
    else
    {
        return false;
    }
}

function check_email($email)
{
    
    $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
    $dbs = $db->prepare('SELECT * FROM signup WHERE email = :email');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);

    if ( $dbs->execute() && $dbs->rowCount() > 0 )
    {
        return true;
    }
    else
    {
        return false;
    }
}

function valid_email($email)
{
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   return false;
   }
   else{
   return true;
   }
} 

function valid_password($password)
{
   if (isset($password) && (strlen($password) < 4))
   {
       return false;
   }
   else
   {
       return true;
   }
} 



//var_dump(check_login('test2@test.com','test32'));
//var_dump(check_email('test2@tsdfest.com'));
//var_dump(valid_email('test@test.com'));
//var_dump(valid_password('te'))
?>
