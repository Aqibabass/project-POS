<?php 
session_start();
include('header.php');
include('database.php');

if (isset($_SESSION["username"])) {
    echo '<h1><center>Welcome, ' . $_SESSION["role"] . '!</h1></center>';   
} else { 
    echo '<script type="text/javascript">
    alert("Please login to continue");
    window.location.href = "login.php";
</script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>
