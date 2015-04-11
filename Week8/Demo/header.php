
<a href="page.php">Home</a>
<?php
session_start();
if ( !empty($_SEESION['loggedin']) ) {
echo '<a href="?logout=true">logout</a>';
} else {
echo '<a href="login">Log-in</a>';
}
?>

