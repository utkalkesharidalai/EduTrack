<?php
session_start();
if (!isset($_SESSION['faculty_id'])) {
    header("Location: tlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome, Teacher</h2>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
