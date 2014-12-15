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
        
    <?php 

    include_once 'Header.php';
    
    if (isset($errors)&& count($errors)> 0) : ?>
        <h2>Errors:</h2>
        <ul>
        <?php foreach($errors as $error) : ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>

<body>
    <div id="page">
        <div id="header">
            
        </div>
        


        <div id="main">
            <h1>Login</h1>
            <form action="login_code.php" method="post"
                  >

                </select>
                <br />


                <label>email:</label>
                <input type="text" name="email" />
                <br />

                <label>password</label>
                <input type="text" name="password" />
                <br />
                

                <label>&nbsp;</label>
                <input type="submit" value="Login" />
                <br />
            </form>
            
        </div><!-- end main -->



</body>
</html>

