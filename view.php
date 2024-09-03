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

if ($_SESSION["role"] !== 'Admin' && $_SESSION["role"] !== 'Verifier') {
    echo '<h1><center>You do not have the required permissions to access this page.</center></h1>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php if (isset($_SESSION["username"])) { ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Branch</th>
                <th scope="col">Legal Name</th>
                <th scope="col">Marketing Name</th>
                <th scope="col">Business Type</th>
                <th scope="col">PAN Number</th>
                <th scope="col">Existing Account Number</th>
                <th scope="col">Type of Account</th>
                <th scope="col">Status</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT id, branch, legal_name, marketing_name, business_type, pan_number, existing_account_number, type_of_account, status FROM pos_machine_installation";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = htmlspecialchars($row['id']);
                    $branch = htmlspecialchars($row['branch']);
                    $legalname = htmlspecialchars($row['legal_name']);
                    $marketingname = htmlspecialchars($row['marketing_name']);
                    $businesstype = htmlspecialchars($row['business_type']);
                    $panNumber = htmlspecialchars($row['pan_number']);
                    $existingAccountNumber = htmlspecialchars($row['existing_account_number']);
                    $typeOfAccount = htmlspecialchars($row['type_of_account']);
                    $status = isset($row['status']) ? htmlspecialchars($row['status']) : 'pending';

                    echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $branch . '</td>
                        <td>' . $legalname . '</td>
                        <td>' . $marketingname . '</td>
                        <td>' . $businesstype . '</td>
                        <td>' . $panNumber . '</td>
                        <td>' . $existingAccountNumber . '</td>
                        <td>' . $typeOfAccount . '</td>
                        <td>'  . $status . '</td>
                        <td>';

                    if ($_SESSION["role"] === 'Admin') {
                        echo '<a href="update.php?updateid=' . $id . '" class="btn-update">Update</a>
                            <a href="delete.php?deleteid=' . $id . '" class="btn-delete">Delete</a>';
                    } elseif ($_SESSION["role"] === 'Verifier') {
                        echo '<a href="update.php?updateid=' . $id . '" class="btn-update">Update</a>';
                    }

                    echo '</td></tr>';
                }
            } else {
                echo '<tr><td colspan="10">No records found.</td></tr>';
            }
            ?>
        </tbody>
    </table>
<?php } ?>
</body>
</html>
