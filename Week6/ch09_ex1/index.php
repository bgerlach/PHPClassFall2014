<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        if ( !empty($_POST) )
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $name = ucwords($name);
        $name1 = explode(' ',$name);
        $name1 = $name1[0];
        
        
        

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized

        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character

        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890

        /*************************************************
         * Display the validation message
         ************************************************/
        
                if (filter_var($email, FILTER_VALIDATE_EMAIL) !=false)
                {
                    
                
                
                $message = "Hello $name1,\n \n" .
                   "Thank you for entering this data: \n \n" .
                    "Name: $name \n".
                    "Email: $email \n".
                    "Phone: $phone";
                }
                
                else
                {
                    $message = "Please enter valid email address";
                    
                }
                
                if (strlen($phone) < 7)
                {
                    $message = "Please enter a valid phone number";
                }
                

        break;
}
include 'string_tester.php';
?>