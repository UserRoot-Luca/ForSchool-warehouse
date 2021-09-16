<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./data/img/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./data/css/login.css">
    <title>Login</title>
</head>
<body>
    <form action="./login.php" method="post" autocomplete="off">
        <label for="user">Username</label>
        <input type="text" name="username" id="user" required>

        <label for="pass">Password</label>
        <input type="password" name="password" id="pass">
        <input type="submit" value="Login" name="submit" required>
    </form>
</body>
</html>

<?php
    $isLogin = false;

    $dataBase_servername = "localhost";
    $dataBase_username   = "username";
    $dataBase_password   = "password";
    try {
        $dbConn = new PDO("mysql:host=$dataBase_servername;dbname=myDB", $dataBase_username, $dataBase_password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
    } catch(PDOException $e) { echo "";}

    return $isLogin;
?>