<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY nim DESC");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
    shrink-to-fit=no"">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <title>Document</title>
  </head>
  <body>
    <a href="add.php">
      <button type="button" class="btn btn-primary">Tambah Baru</button>
    </a>
    <table class="table" border="1">
    <thead align="center" class="thead-dark">
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th align="center">Action</th>
      </tr></thead>

      <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>"; echo "
      <td>".$user_data['nim']."</td>
      "; echo "
      <td>".$user_data['nama']."</td>
      "; echo "
      <td>".$user_data['alamat']."</td>
      "; echo "
      <td>".$user_data['jenis_kelamin']."</td>
      "; echo '
      <td>
        <a href="edit.php?nim=$user_data[nim]">Edit</a> |
        <a href="delete.php?nim=$user_data[nim]">Delete</a>
      </td>
      '; } ?>

    </table>
    
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
