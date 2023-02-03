<?php
$host="localhost";
$user="root";
$password="";
$db="magang";

// Create connection
$kon = new mysqli($host, $user, $password, $db);
// Check connection
if ($kon->connect_error) {
  die("Connection failed: " . $kon->connect_error);
}

$sql = "UPDATE main SET  WHERE id=";

if ($kon->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $kon->error;
}

$kon->close();
?>