<?php
$servername = "localhost";
$username = "danielis_simpleLoginv";
$password = "DanVil5454";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    //echo(mysqli_connect_error());
    $_POST['SQLErr'] = mysqli_connect_error();
    Header("Location: tempTest.php");
}
echo "Connected successfully NEKREIPK";
?>