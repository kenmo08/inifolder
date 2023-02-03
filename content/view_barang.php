

<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>

<body>
  
<a href="index.php?page=input" class="btn btn-success" role="button">tambah data device</a>
<h2>Employee Details</h2>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<table border="2">
  <tr>
                <th>No</th>
                <th>id</th>
                <th>device_code</th>
                <th>date</th>
                <th>lokasi</th>
                <th>device_name</th>
                <th>maintenance_description</th>
                <th>time_maintenance</th>
                <th>status</th>
                <th>button</th>
  </tr>

<?php

include "koneksi.php"; // Using database connection file here

$records = mysqli_query($kon,"select * from main"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
  
?>
  <tr>
                        <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data["device_code"]; ?></td>
                    <td><?php echo $data["date"]; ?></td>
                    <td><?php echo $data["lokasi"]; ?></td>
                    <td><?php echo $data["device_name"]; ?></td>
                    <td><?php echo $data["maintenance_description"]; ?></td>
                    <td><?php echo $data["time_maintenance"]; ?></td>
                    <td><?php echo $data["status"]; ?></td>   
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>