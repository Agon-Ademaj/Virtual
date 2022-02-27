<?php
session_start();
include_once 'Controller.php';
// include_once 'Login.php';
$products = new Controller();

// echo "<h1>Welcome .$_SESSION['username'] </h1>";
$adminName = $_SESSION['username'];
// echo "<h3>Welcome $adminName</h3>";

if(isset($_POST['submit'])) {
    $productimg = $_POST['prodimage'];
    $productname = $_POST['prodname'];
    $productprice = $_POST['prodprice'];

    $insertProducts = $products -> insertProducts($productimg, $productname, $productprice);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
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

    <div class="form-container">
        <h2>Shtoni Produkte</h2>
        <form action="" method="POST" class="insideform">
            Imazhi i Produktit:
            <br>
            <input type="file" name="prodimage">
            <br><br>
            Emri i Produktit:
            <input type="text" name="prodname">
            <br><br>
            Cmimi i Produktit:
            <input type="text" name="prodprice">
            <br><br>
            <input type="submit" name="submit" value="Shto">
        </form>
    </div>
</body>
</html>