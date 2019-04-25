<?php
//including the database connection file
include("db.php");

//getting id of the data from url
$user_id = $_GET['user_id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM user_id WHERE id=$user_id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

