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
        <table class="table table-bordered table-hover">
            <tr>
                <th onclick="sortTable(0)">#</th>
                <th onclick="sortTable(1)">Name</th>
                <th onclick="sortTable(2)">Email</th>
                <th onclick="sortTable(3)">Gender</th>
                <th>Action</th>
            </tr>
            <?php
            require 'config.php';
            $rowsPerPage = 10;
            $pageNum = 1;
            if(isset($_GET['page']) && is_numeric($_GET['page'])) {
                $pageNum = $_GET['page'];
            }
            $offset = ($pageNum - 1) * $rowsPerPage;
            $sql = "SELECT * FROM users LIMIT $offset, $rowsPerPage";
            $rows = mysqli_query($conn, $sql);
            $i = $offset + 1;
            foreach($rows as $row) : ?>
                <tr id="<?php echo $row["ID"]; ?>">
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["Name"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["Gender"]; ?></td>
                    <td>
                        <a class="btn btn-primary" href="edituser.php?id=<?php echo $row['ID']; ?>">Edit</a>
                        <button class="btn btn-danger" type="button" onclick="submitData(<?php echo $row['ID']; ?>);">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php
        // Pagination Links
        $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
        $row = mysqli_fetch_assoc($result);
        $totalRows = $row['total'];
        $totalPages = ceil($totalRows / $rowsPerPage);
        ?>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php if($pageNum > 1): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $pageNum - 1 ?>">Previous</a></li>
                <?php endif; ?>
                <?php for($page = 1; $page <= $totalPages; $page++): ?>
                    <li class="page-item <?= $page == $pageNum ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $page ?>"><?= $page ?></a></li>
                <?php endfor; ?>
                <?php if($pageNum < $totalPages): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $pageNum + 1 ?>">Next</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <br>
        <a href="adduser.php" class="btn btn-primary">Add User</a>
    </div>
    <?php require 'script.php'; ?>
</body>
</html>
