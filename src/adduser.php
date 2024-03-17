<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add User</title>
<style>
    .custom-background {
      background-color: #ced4da; /* Example color */
    }
  </style>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="custom-background">

<div class="container mt-5">
  <h2>Add User</h2><br>
  <form autocomplete="off" action="" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control shadow" id="name" value="">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control shadow" id="email" value="">
    </div>
    <div class="form-group">
      <label for="gender">Gender</label>
      <select class="form-control shadow" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    <button type="button" class="btn btn-primary shadow" onclick="submitData('insert');">Insert</button>
  </form>
  <br>  
  <a href="index.php" class="btn btn-link shadow-sm">Go To Index</a>
  <?php require 'script.php'; ?>
</div>
<script src="script.php"></script>
<!-- Include Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.7.12/umd.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
