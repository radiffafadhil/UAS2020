<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$nim = $_GET['nim'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE nim=$nim");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:view.php");
?>
