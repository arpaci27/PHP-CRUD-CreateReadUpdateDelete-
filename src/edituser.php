<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Edit User</title>
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
  <h2>Edit User</h2>
  <form autocomplete="off" action="" method="post">
    <?php
    require 'config.php';
    $id = $_GET["id"];
    $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
    ?>
    <input type="hidden" class="form-control" id="id" value="<?php echo $rows['ID']; ?>">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" value="<?php echo $rows['Name']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" value="<?php echo $rows['Email']; ?>">
    </div>
    <div class="form-group">
      <label for="gender">Gender</label>
      <select class="form-control" id="gender">
        <option value="Male" <?php if($rows["Gender"] == "Male") echo "selected"; ?>>Male</option>
        <option value="Female" <?php if($rows["Gender"] == "Female") echo "selected"; ?>>Female</option>
      </select>
    </div>
    <button type="button" class="btn btn-primary" onclick="submitData('edit');">Edit</button>
  </form>
  <br>
  <a href="index.php" class="btn btn-link">Go To Index</a>
  <?php require 'script.php'; ?>
</body>
</html>
