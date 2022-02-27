<!-- <h1>Admin page</h1> -->

<?php
session_start();
include_once 'Controller.php';
$admin = new Controller();
$adminName = $_SESSION['username'];

if ($_SESSION["usertype"] != "admin") {
    header("Location: login.php");
}

$countProd = $admin->countProducts();
$countBuy = $admin->countBuyers();
$countUser = $admin->countUsers();
$countEmp = $admin->countEmployee();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="css/adminstyle.css"> -->
    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-content">
            <a href="admin.php">Kryefaqja</a>
            <a href="adminaddproducts.php">Shtoni produkte</a>
            <a href="adminshowproducts.php">Produktet në stok</a>
            <a href="addEmployee.php">Shtoni punëtor</a>
            <a href="adminshowemployees.php">Të punësuarit</a>
            <a href="clientpurchases.php">Porositë nga klientet</a>
            <a href="logout.php">Shkyqu</a>
        </div>
    </div>

    <div class="headerbar">
        <div class="logo">
            <h1>Dashboard</h1>
        </div>
        <div class="headerbar-container">
            <h3>Admin: <?php echo $adminName?></h3>
        </div>
    </div>

    <div class="content">
        <div class="dashboard">
            <div class="countproducts">
                <h4>Stoku total</h4>
                <?php foreach ($countProd as $pr) : ?>
                    <h2><?php echo $pr; ?></h2>
                <?php endforeach; ?>
            </div>
            <div class="dash-icon">
                <i class="fa-solid fa-cart-shopping icon"></i>
            </div>
        </div>
        <div class="dashboard">
            <div class="countproducts">
                <h4>Bleresit total</h4>
                <?php foreach ($countBuy as $buy) : ?>
                    <h2><?php echo $buy; ?></h2>
                <?php endforeach; ?>
            </div>
            <div class="dash-icon">
                <i class="fa-solid fa-store icon"></i>
            </div>
        </div>
        <div class="dashboard">
            <div class="countproducts">
                <h4>Perdoruesit total</h4>
                <?php foreach ($countUser as $user) : ?>
                    <h2><?php echo $user; ?></h2>
                <?php endforeach; ?>
            </div>
            <div class="dash-icon">
                <i class="fa-solid fa-users icon"></i>
            </div>
        </div>
        <div class="dashboard">
            <div class="countproducts">
                <h4>Te punesuarit total</h4>
                <?php foreach ($countEmp as $emp) : ?>
                    <h2><?php echo $emp; ?></h2>
                <?php endforeach; ?>
            </div>
            <div class="dash-icon">
                <i class="fa-solid fa-briefcase icon"></i>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/0cdce05e47.js" crossorigin="anonymous"></script>
</body>

</html>