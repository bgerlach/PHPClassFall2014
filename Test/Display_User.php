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
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
            $dbs = $db->prepare('select * from users');
        
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
                
                
                echo '<table border="1">'; 
                echo '<tr><th>Index</th><th>ID</th><th>Email</th>';
                echo '<th>fullname</th><th>phone</th><th>ZIP</th><th></th><th></th></tr>';
                foreach ($results as $key => $value) {
                    echo '<tr>';
                     echo '<td>', $key ,'</td>';
                     echo '<td>', $value['email'] ,'</td>';
                     echo '<td>', $value['fullname'] ,'</td>';
                     echo '<td>', $value['phone'] ,'</td>';
                     echo '<td>', $value['zip'] ,'</td>';          
                     echo '<td><a href="add_user">Update</a></td>';          
                     echo '<td><a href="delete_user.php?id=',$value['id'],'">Delete</a></td>';          
                    echo '</tr>';
                }
                echo '</table>';
            }
            
        ?>
    </body>
</html>
