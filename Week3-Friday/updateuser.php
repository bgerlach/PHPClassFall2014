<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
$id = filter_input(INPUT_GET, 'id');
$db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");


$dbs = $db->prepare('SELECT * FROM users WHERE id = :id');
$dbs->bindParam(':id', $id, PDO::PARAM_INT);

if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
$results = $dbs->fetch(PDO::FETCH_ASSOC);
?>
    
    <form action="updateuser_process.php" method="post">
                  

                
                <br />

                
                <input type="hidden" name="id" value="<?php echo $results['id']; ?>"/>
                <br />

                <label>fullname:</label>
                <input type="text" name="fullname" value="<?php echo $results['fullname']; ?>" />
                <br />

                <label>email:</label>
                <input type="text" name="email" value="<?php echo $results['email']; ?>" />
                <br />
                
                <label>phone</label>
                <input type="text" name="phone" value="<?php echo $results['phone']; ?>" />
                <br />
                
                 <label>zip</label>
                <input type="text" name="zip" value="<?php echo $results['zip']; ?>" />
                <br />

                <label>&nbsp;</label>
                <input type="submit" value="updateuser" />
                <br />
            </form>
<?php
} else {
echo '<h1> user ', $id,' was <strong>NOT</strong> updated</h1>';
}

var_dump($dbs);

/*foreach ($results as $key => $value) {
echo '<tr>';
echo '<td>', $key ,'</td>';
echo '<td>', $value['id'] ,'</td>';
echo '<td>', $value['email'] ,'</td>';
echo '<td>', $value['fullname'] ,'</td>';
echo '<td>', $value['phone'] ,'</td>';
echo '<td>', $value['zip'] ,'</td>';
echo '<td><a href="">Update</a></td>';
echo '<td><a href="">deleteuser.php</a></td>';
echo '</tr>';
}
echo '</table>';

*/


?>
<a href="viewpage.php">View Users</a>
</body>
</html>
