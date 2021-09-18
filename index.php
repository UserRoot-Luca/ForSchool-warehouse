<?php
    session_start();
    if (!$_SESSION["isLogin"]) header("location: ./login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./data/img/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./data/img/icons/favicon.png">
    <link rel="stylesheet" href="./data/css/main.css">
    <title>Warehouse</title>
</head>
<body>
    <div class="nav">
        <div class="nav__name"><?php echo $_SESSION["username"];?></div>
        <div class="nav__item" onclick="sub_nav('add')">Add Filters</div>
        <div class="nav__item">Edit mode</div>
        <div class="left">
            <a class="logout" href="./logout.php">Logout</a>
        </div>
    </div>
    <div class="sub_nav" id="add" style="display: none;">
        fff
    </div>
    <script src="./data/js/main.js"></script>
</body>
</html>