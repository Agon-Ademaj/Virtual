<?php

session_start();
include 'Controller.php';
$purchases = new Controller();

$userid = $_SESSION["userid"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>User</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/purchases.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <header class="header">
        <nav class="nav-bar">
            <div class="logo">
                <h1 class="pointer">Virtual</h1>
            </div>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-ul" id="nav-ul">
                <li><a class="nav-list" href="user.php"> <?php echo $_SESSION["username"] ?></a></li>
                <li><a class="nav-list" href="purchases.php">Porositë</a></li>
                <li><a class="nav-list" href="logout.php">Shkyçu</a></li>
            </ul>
        </nav>
    </header>


    <div class="content">
        <div class="table-header">
            <h1>Menaxhimi i porosive</h1>
        </div>    

        <table id="customers">
        <tr>
            <th>Imazhi i produktit</th>
            <th>Emri i produktit</th>
            <th>Çmimi i produktit</th>
        </tr>

        <tr>
        <?php
        $showbuyers = $purchases -> readBuyers($userid);
        foreach($showbuyers as $buy):
        ?>
            <td><img src="img/<?=$buy['productimg']?>" style="width: 90px; height: 90px;" alt=""></td>
            <td style="font-weight: bold;"><?php echo $buy['productname']; ?></td>
            <td style="font-weight: bold;"><?php echo $buy['productprice']; ?>&euro;</td>
        </tr>
        
        <?php
        endforeach;
        ?>
        </table>
    </div>

    <script src="js/script.js"></script>

</body>
</html>