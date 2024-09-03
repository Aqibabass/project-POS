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

if (isset($_POST["register"])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $employeeName = filter_input(INPUT_POST, 'employeeName', FILTER_SANITIZE_STRING);
    $employeeDesignation = filter_input(INPUT_POST, 'employeeDesignation', FILTER_SANITIZE_STRING);
    $sol_id = filter_input(INPUT_POST, 'sol_id', FILTER_SANITIZE_STRING);
    $branchName = filter_input(INPUT_POST, 'branchName', FILTER_SANITIZE_STRING);
    $userProfile = filter_input(INPUT_POST, 'userProfile', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    
    $errors = [];

    if (empty($username)) {
        $errors[] = "Employee Code is required.";
    }
    if (empty($employeeName)) {
        $errors[] = "Employee Name is required.";
    }
    if (empty($employeeDesignation)) {
        $errors[] = "Employee Designation is required.";
    }
    if (empty($sol_id)) {
        $errors[] = "SOL ID is required.";
    }
    if (empty($branchName)) {
        $errors[] = "Branch Name is required.";
    }
    if (empty($userProfile)) {
        $errors[] = "User Profile is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo '<script type="text/javascript">alert("' . $error . '");</script>';
        }
    } else {
        $username = mysqli_real_escape_string($conn, $username);
        $sql = "SELECT username FROM login WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<script type="text/javascript">alert("Employee code already exists. Please choose another one.");</script>';
        } else {
            $hashed_password = md5($password);

            $sql = "INSERT INTO login (
                username, employee_name, employee_designation, sol_id, branch_name, password
            ) VALUES (
                '$username', '$employeeName', '$employeeDesignation', '$sol_id', '$branchName', 
                '$hashed_password'
            )";

            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript">alert("Employee registered successfully!"); window.location.href = "welcome.php";</script>';
            } else {
                echo '<script type="text/javascript">alert("Error: ' . mysqli_error($conn) . '");</script>';
            }
        }
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Status</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
</body>
</html>
