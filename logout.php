<?php
session_start();
include('database.php');

if (isset($_SESSION["username"])) {
    session_unset();
    session_destroy();
    $message = "You have been logged out!";
} else {
    $message = "Please login before logging out.";
}

$redirect = "login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    echo '<script type="text/javascript">
        alert("' . $message . '");
        window.location.href = "' . $redirect . '";
    </script>';
    ?>
</body>
</html>
