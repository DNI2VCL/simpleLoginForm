<?php
$pass = $_POST["passwordBox"];
$passHashed = md5($pass);
$hashedDefault = "9807d11ed50fcf5acc448550b9888014";
if($passHashed == $hashedDefault) {
    echo "YAYY";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<div class="main">
    <h1>Welcome! Please Login</h1>
    <p>Enter password.</p>
    <form method="post" action="index.php">
        <input type="text" class="userBox textStyle centered" name="userBox" placeholder="Username"><br>
        <input type="password" class="textStyle centered" name="passwordBox" placeholder="Password"><br>
        <input type="submit" class="submitButton">

    </form>
</div>
</body>

</html>
