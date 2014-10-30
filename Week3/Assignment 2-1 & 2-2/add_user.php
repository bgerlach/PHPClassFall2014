<?php



// Get the user data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zip = $_POST['zip'];

// Validate inputs
if (empty($fullname) || is_numeric($fullname) || empty($email) || empty($phone) || empty($zip)) {
    $error = "Invalid user data. All fields required. Fullname can't include numeric values.";
    echo $error;
    include ('add_user_form.php');
} 




else {
    // If valid, add the user to the database
    $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
    $query = "INSERT INTO users
                 (fullname, email, phone, zip)
              VALUES
                 ('$fullname', '$email', '$phone', '$zip')";
    $db->exec($query);

    // Display the user index page
    include('viewpage.php');
}
?>

