<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$device_code=$_POST["device_code"];
$date=$_POST["date"];
$lokasi=$_POST["lokasi"];
$device_name=$_POST["device_name"];
$maintenance_description=$_POST["maintenance_description"];
$time_maintenance=$_POST["time_maintenance"];
$status=$_POST["status"];
 
mysql_query("UPDATE user SET device_code='$device_code', date='$date', lokasi='$lokasi', device_name='$device_name',
 maintenance_description='$maintenance_description', time_maintenance='$time_maintenance', status'$status' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>  