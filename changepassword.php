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
    if (isset($_POST["submitChange"])) {
        $oldPassword = filter_input(INPUT_POST, 'old_password', FILTER_SANITIZE_STRING);
        $newPassword = filter_input(INPUT_POST, 'new_password', FILTER_SANITIZE_STRING);
        $confirmPassword = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
        $username = $_SESSION["username"];

        $errors = [];

        if (empty($oldPassword)) {
            $errors[] = "Old password is required.";
        }
        if (empty($newPassword)) {
            $errors[] = "New password is required.";
        }
        if ($newPassword !== $confirmPassword) {
            $errors[] = "New passwords do not match.";
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo '<script type="text/javascript">alert("' . $error . '");</script>';
            }
        } else {
            $username = mysqli_real_escape_string($conn, $username);
            $sql = "SELECT password FROM login WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $hashedPassword = $row['password'];

                if (md5($oldPassword) === $hashedPassword) {
                    $newHashedPassword = md5($newPassword);
                    $sql = "UPDATE login SET password = '$newHashedPassword' WHERE username = '$username'";

                    if (mysqli_query($conn, $sql)) {
                        echo '<script type="text/javascript">alert("Password changed successfully!");</script>';
                    } else {
                        echo '<script type="text/javascript">alert("Error: ' . mysqli_error($conn) . '");</script>';
                    }
                } else {
                    echo '<script type="text/javascript">alert("Old password is incorrect.");</script>';
                }
            } else {
                echo '<script type="text/javascript">alert("Error: ' . mysqli_error($conn) . '");</script>';
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
    <title>Change Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
if (isset($_SESSION["username"])) {
?>
    <div class="container">
        <h2>Change Password</h2>
        <form action="changepassword.php" method="post">
            <label for="old_password">Old Password:</label>
            <input type="password" id="old_password" name="old_password" required>

            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>

            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <input type="submit" name="submitChange" class="submit-button" value="Change Password">
        </form>
    </div>
<?php
}
?>
</body>
</html>
