<?php
function check_exist($email)
{
    
    $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
    $dbs = $db->prepare('SELECT * FROM account WHERE email = :email');
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

function valid_phone($phone)
{
   if (isset($phone) && (strlen($phone) < 7))
   {
       return false;
   }
   else
   {
       return true;
   }
}
?>
