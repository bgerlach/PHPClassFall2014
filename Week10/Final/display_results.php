<?php
//Brendan Gerlach:  PHP Final 12/17/2014
    
    
// set variables
    $email = $_POST['email'];
    $email = htmlspecialchars($email, ENT_COMPAT, 'ISO-8859-1', false);
    $phone = $_POST['phone'];
    $phone = htmlspecialchars($phone, ENT_COMPAT, 'ISO-8859-1', false);
    $heard_from = filter_input(INPUT_POST, 'heard_from');
    $contact_via = $_POST['contact_via'];
    $comments = $_POST['comments'];
    $comments = htmlspecialchars($comments, ENT_COMPAT, 'ISO-8859-1', false);
    $errors = array();
    
    include 'functions.php';

 if (empty($_POST['email'])){
        
    $errors[] = "Email required.  Please enter an email.";   
 }
 
 if (empty($_POST['phone'])){
        
    $errors[] = "Phone required.  Please enter a phone number."; 
 }
 
  if (empty($_POST['heard_from'])){
        
    $errors[] = "Please indicate how you heard about us."; 
 }

 
 
if (valid_email($email)== false){
    
    $errors[] = "Invalid email.  Please enter a valid email";
} 

if (check_exist($email)== true){
    
    $errors[] = "A user already exists with this email.";
}

if (valid_phone($phone)== false){
    
    $errors[] = "Phone number must be at least 7 digits.";
} 



if (empty($errors)){
    
    $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
    $dbs = $db->prepare('INSERT into account set email = :email, phone = :phone, heard = :heard, contact = :contact, comments = :comments');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
    $dbs->bindParam(':heard', $heard_from, PDO::PARAM_STR);
    $dbs->bindParam(':contact', $contact_via, PDO::PARAM_STR);
    $dbs->bindParam(':comments', $comments, PDO::PARAM_STR);
           


    if ( $dbs->execute() && $dbs->rowCount() > 0 )
    {
            include ('processing.php');
    }        
}
            if (isset($errors)&& count($errors)> 0){
    
            include('index.php');}
                      
      
?>







