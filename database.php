<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pos_installation";
$conn = "";

$conn = @mysqli_connect(
    $db_server,
    $db_user,
    $db_pass,
    $db_name
);

if (!$conn) {
    echo '<script type="text/javascript"> alert("Could not establish connection!"); </script>';
    echo '<h2><center> You are offline! </h2></center>';
    exit();
} 

?>
