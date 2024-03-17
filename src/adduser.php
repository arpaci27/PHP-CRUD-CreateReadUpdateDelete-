<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add User</title>
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
  <h2>Add User</h2>
  <form autocomplete="off" action="" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" value="">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" value="">
    </div>
    <div class="form-group">
      <label for="gender">Gender</label>
      <select class="form-control" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    <button type="button" class="btn btn-primary" onclick="submitData('insert');">Insert</button>
  </form>
  <br>
  <a href="index.php" class="btn btn-link">Go To Index</a>
  <?php require 'script.php'; ?>
</body>
</html>
