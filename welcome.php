<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;
            background: brown;
         }
        
        
    </style>
</head>
<body>
    <div class="page-header">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. <br>Welcome to our site.</h1>
    </div>
    <p>
        <a href="viewBookings.php" class="btn btn-warning">View bookings</a>
        <br> <br>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <br> <br>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <footer class="footer"> @Health Care Service Centre</footer>
</body>
</html>