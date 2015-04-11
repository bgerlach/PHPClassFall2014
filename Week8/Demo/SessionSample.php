<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
                <div id="main">
            <h1>Session Sample Form</h1>
            <form action="#" method="post"
                  >

                </select>
                <br />


                <label>Passcode</label>
                <input type="text" name="passcode" />
                <br />
                

                <label>&nbsp;</label>
                <input type="submit" value="Add Passcode" />
                <br />
            </form>
            
            
            
        </div><!-- end main -->
        
        
        
        <?php

        $passcode = filter_input(INPUT_POST, 'passcode');
        
        if (isset($passcode)) {
    
        
        session_start();
        
        
        if ($passcode == 'test')
        {
        $_SESSION['loggedin'] = true;
        }
        
        else
        {
        $_SESSION['loggedin'] = false;
        }
        
         
        
        if ($_SESSION['loggedin'] == true)
            {
            header('Location: AdminPage.php');  
            }
        
        }
        ?>
    </body>
</html>
