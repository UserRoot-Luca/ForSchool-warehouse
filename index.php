<?php
    session_start();
    if (!$_SESSION["isLogin"]) header("location: ./loginSystem/login.php");
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
        <div class="nav__item" onclick="sub_nav('editMode')">Edit mode</div>
        <div class="left">
            <a class="logout" href="./loginSystem/logout.php">Logout</a>
        </div>
    </div>
    <div class="sub_nav" id="editMode" style="display: none;">
        <div class="sub_nav__container">
            <div class="sub_nav__container__title">EDIT</div>
            
        </div>
        <div class="sub_nav__container">
            <div class="sub_nav__container__title">ADD</div>
            <!-- id, name, categoria, luogo stoccaggio, numero prodotti -->
            <form action="./editMode/add.php" method="get" autocomplete="off" class="sub_nav__container__form">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>

                <!-- s -->
                <label for="category">Category</label>
                <input type="sssssssssssssssssssss" name="category" id="category" required> 
                <!-- s -->

                <!-- s -->
                <label for="storage_location">Storage Location</label>
                <input type="sssssssssssssssssssss" name="storage_location" id="storage_location" required> 
                <!-- s -->

                <label for="in_stock">In Stock</label>
                <input type="number" name="in_stock" id="in_stock" min="0" required>

                <input type="submit" value="add">
            </form>
        </div>
    </div>
    
    <script src="./data/js/main.js"></script>
</body>
</html>