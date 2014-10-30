<?php
// Get the user data

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zip = $_POST['zip'];


$db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
$dbs = $db->prepare('UPDATE users SET fullname = :fullname, email = :email, phone = :phone, zip = :zip WHERE id = :id');

$dbs->bindParam(':id', $id, PDO::PARAM_INT);
$dbs->bindParam(':email', $email, PDO::PARAM_STR);
$dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
$dbs->bindParam(':zip', $zip, PDO::PARAM_STR);
$dbs->bindParam(':fullname', $fullname, PDO::PARAM_STR);

if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
echo '<h1> user ', $id,' was updated</h1>';
} else {
echo '<h1> user ', $id,' was <strong>NOT</strong> updated</h1>';
    print_r($db->errorInfo());
}
    
include('viewpage.php');

?>
<a href="viewpage.php">View Users</a>

