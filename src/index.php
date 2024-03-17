<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Index</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Background Color Style -->
  <style>
    body {
      background-color: #f0f2f5; /* Light grey background */
    }
  </style>
</head>
<body>
    <div>
        <table class="table table-bordered  table-hover">
            <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Action</td></tr>
            <?php
      require 'config.php';
      $rows = mysqli_query($conn, "SELECT * FROM users");
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
      <tr id = <?php echo $row["ID"]; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["Name"]; ?></td>
        <td><?php echo $row["Email"]; ?></td>
        <td><?php echo $row["Gender"]; ?></td>
        <td>
          <a class="btn btn-primary" href="edituser.php?id=<?php echo $row['ID']; ?>">Edit</a>
          <button class="btn btn-danger" type="button" onclick = "submitData(<?php echo $row['ID']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
        </table>
        <br>
        <a href="adduser.php" class="btn btn-primary">Add User</a>   <?php require 'script.php'; ?>
    </div>
</body>
</html>
