<?php
    session_start();
    $_SESSION["isLogin"] = false;
    $_SESSION["username"] = "ghost";

    $error_notifications       = "";
    $error_notifications_sylte = "width: 100%; background-color: #af4c4c; color: #ffffff; padding: 14px 20px; margin: 12px 0; border: none; border-radius: 4px; font-size: 17px; letter-spacing: 0.6px; display: flex; align-items: center; justify-content: center; ";

    require_once "./config.php";
    define('DATABASE_NAME', 'warehouse');

    $db_conn = new mysqli(DATABASE_SERVERNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
    if ($db_conn -> connect_error){ $error_notifications = "<div style='$error_notifications_sylte'>ERROR: DataBase connect</div>"; exit; }

    $data = $db_conn -> query("SELECT username, password FROM users_account");

    if (isset($_POST['submit'])) {
        if ($data->num_rows > 0) {
            while($row = $data->fetch_assoc()) {
                if (trim($_POST['username']) == $row["username"] && md5(trim($_POST['password'])) == $row["password"]) {
                    $_SESSION["isLogin"] = true;
                    $_SESSION["username"] = trim($_POST['username']);
                    header("location: ../index.php");
                } else {
                    $_SESSION["isLogin"] = false; 
                    $error_notifications = "<div style='$error_notifications_sylte'>Incorrect username or password</div>";
                }
            }
        } else $error_notifications = "<div style='$error_notifications_sylte'>ERROR: The DataBase is void</div>";
    }

    $db_conn -> close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../data/img/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../data/img/icons/favicon.png">
    <link rel="stylesheet" href="../data/css/login.css">
    <title>Login</title>
</head>
<body>
    <form action="./login.php" method="post" autocomplete="off">
        <label for="user">Username</label>
        <input type="text" name="username" id="user" required>

        <label for="pass">Password</label>
        <input type="password" name="password" id="pass" required>
        <input type="submit" value="Login" name="submit">
        <?php echo $error_notifications; ?>
    </form>
</body>
</html>