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
        
        <?php

        include './Header.php';
        
        if ($_SESSION['loggedin'] != true)
        {
           header('Location: login.php');
        }    
        ?>
        
        
        
        <h1> Admin Page </h1>
        

            
    </body>
</html>