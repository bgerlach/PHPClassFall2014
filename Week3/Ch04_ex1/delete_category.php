<?php
// Get IDs
$category__ID = $_POST['CategoryID'];


// Delete the categories from the database
require_once('database.php');
$query = "DELETE FROM categories
          WHERE categoryID = '$category__ID'";
$db->exec($query);

// display the Category List page
include('index.php');
?>