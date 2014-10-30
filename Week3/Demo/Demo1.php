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
        
        
        <form action ="$" method="post">
            
        <input type="text" name ="fullname" value="" />
        <input type ="submit" value="submit" />
        
       
            
            
           
        <form>
        
        
        <?php
        if (!empty($_POST))
        {
            echo $_POST ['fullname'];
        }
        
        $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        var_dump($pdo);
        
        $statement = $pdo->query('select * from users');
        $users = $statement->fetch();
        
        var_dump($users);
        
        $arr = array();
        $arr[hello] = 'hi';
        $arr['hi'] = "how are you";
        $arr[0] = 'zero';
        
        var_dump($arr);
        
        foreach($arr as $key -> $value)
        {
            echo '<p>', $key, '-',$value, '</p>';
        }
        
        
        ?>
    </body>
</html>
