<?php
session_start();
include('header.php');
include('database.php');

if (!isset($_SESSION["username"])) {
    echo '<script type="text/javascript">
    alert("Please login to continue");
    window.location.href = "login.php";
    </script>';
    exit();
}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `pos_machine_installation` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: view.php');
        exit();
    } else {
        echo '<script type="text/javascript">alert("Error: ' . mysqli_error($conn) . '");</script>';
    }
}

mysqli_close($conn);
?>
