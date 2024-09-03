<?php
session_start();
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
    if (!isset($_SESSION["username"])) {
        echo '<script type="text/javascript">
    alert("Please login to continue");
    window.location.href = "login.php";
    </script>';
    } elseif ($_SESSION["role"] !== 'Admin') {
        echo '<h1><center>Access Denied. You do not have permission to view this page.</center></h1>';
    } else {
        ?>
        <h2>Employee Registration Form</h2>
        <div class="container">
            <form action="adduser.php" method="POST">
                <label for="username">Employee Code:</label>
                <input type="text" maxlength="6" id="username" name="username" required><br><br>

                <label for="employeeName">Employee Name:</label>
                <input type="text" maxlength="30" id="employeeName" name="employeeName" required><br><br>

                <label for="employeeDesignation">Employee Designation:</label>
                <input type="text" maxlength="30" id="employeeDesignation" name="employeeDesignation" required><br><br>

                <label for="sol_id">SOL ID:</label>
                <input type="text" maxlength="4" id="sol_id" name="sol_id" required><br><br>

                <label for="branchName">Branch Name:</label>
                <select id="branchName" name="branchName" required>
                    <option value="Branch1">Branch1</option>
                    <option value="Branch2">Branch2</option>
                    <option value="Branch3">Branch3</option>
                </select><br><br>

                <label for="userProfile">User Profile:</label>
                <select id="userProfile" name="userProfile" required>
                    <option value="Enterer">Enterer</option>
                    <option value="Verifier">Verifier</option>
                    <option value="Admin">Admin</option>
                </select><br><br>

                <label for="password">Password:</label>
                <input type="password" maxlength="20" id="password" name="password" required><br><br>

                <input type="submit" class="submit-button" name="register" value="Register">
            </form>
        </div>
        <?php
    }
    ?>
</body>
</html>
