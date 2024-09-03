<?php 
session_start();
include('header.php');
include('database.php');

if (isset($_SESSION["username"]) && isset($_SESSION["role"])) {
    header("Location: welcome.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="authentication.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <label for="role">Select User Type:</label>
                <select id="role" name="role">
                    <option value="Enterer">Enterer</option>
                    <option value="Verifier">Verifier</option>
                    <option value="Admin">Admin</option>
                </select><br><br>

                <button type="submit" name="login">Log in</button>
            </form>
        </div>
    </div>
</body>
</html>
