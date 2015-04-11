<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Page</title>
    </head>
    <body>
        
        <h1> Admin Page </h1>
        
        <a href="loggout=true">Logout</a>  
            
        <?php

        session_start();
        
        if ($_SESSION['loggedin'] != true)
        {
           header('Location: SessionSample.php');
        }
        
       
            
            
        ?>
    </body>
</html>
