<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
// put your code here
$id = filter_input(INPUT_GET, 'id');
// $id = $_GET['id'];
$fullname = filter_input(INPUT_GET, 'fullname');
// $email = $_GET['fullname'];
$email = filter_input(INPUT_GET, 'email');
// $email = $_GET['email'];
$phone = filter_input(INPUT_GET, 'phone');
$zip = filter_input(INPUT_GET, 'zip');
?>
    
<body>
    <div id="page">
        <div id="header">
            
        </div>

        <div id="main">
            <h1>Update User</h1>

            
        </div><!-- end main -->
        


<?php
/*$db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
$dbs = $db->prepare('select * from users where id = :id or email = :email limit 1');
$dbs->bindParam(':id', $id, PDO::PARAM_INT);
$dbs->bindParam(':email', $email, PDO::PARAM_STR);
if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
$results = $dbs->fetch(PDO::FETCH_ASSOC);
echo '<ul>';
echo '<li>', $results['id'] , '</li>';
echo '<li>', $results['fullname'] , '</li>';
echo '<li>', $results['email'] , '</li>';
echo '<li>', $results['phone'] , '</li>';
echo '<li>', $results['zip'] , '</li>';
echo '</ul>';
} else {
echo 'no data';
}
*/



?>
</body>
<a href="viewpage.php">View Users</a>
</html>