<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoS Machine Installation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-content">
            <a href="login.php">
                <img src="jkb.jpg" alt="Bank Logo" class="header-logo">
            </a>
            <h1>PoS Machine Installation</h1>
            <h2>Merchant Relationship Form</h2>
            <nav class="main-nav">
                <ul>
                    <?php if (isset($_SESSION["username"])) { ?>
                        <li><a href="welcome.php">Home</a></li>
                        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] === 'Admin') { ?>
                            <li><a href="userprofile.php">Add User</a></li>
                        <?php } ?>
                        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] !== 'Verifier') { ?>
                        <li><a href="newapp.php">New Application</a></li>
                        <?php } ?>
                        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] !== 'Enterer') { ?>
                            <li><a href="view.php">View Application</a></li>
                        <?php } ?>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    <?php } ?>
                </ul>
                <hr>
            </nav>
        </div>
    </header>
</body>
</html>
