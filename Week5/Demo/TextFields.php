
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
$textfield = $_POST['textfield']; 
$password = $_POST['passwordfield'];
$hidden = $_POST['hiddenfield'];


?> 

<form action="#" method="post">
<label>Text</label>
<input type="text" name="textfield" value="<?php echo $textfield ?>" /><br />
<label>Text</label>
<input type="password" name="passwordfield" value="<?php echo $password ?>" /><br />
<input type="hidden" name="hiddenfield" value="<?php echo $hidden ?>" /><br />
<input type="submit" value="submit" />
</form>
    
   
    
</body>
</html>