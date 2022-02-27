<?php
session_start();
include 'Controller.php';
$employee = new Controller();
$adminName = $_SESSION['username'];

if (isset($_POST["submit"])) {
    $empimg = $_POST["empimg"];
    $empname = $_POST["empname"];
    $emprole = $_POST["emprole"];
    $empdesc = $_POST["empdesc"];

    $emp = $employee -> insertEmployee($empimg, $empname, $emprole, $empdesc);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
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
        <h2>Shtoni punetor</h2>
        <br>
        <form action="" method="POST">
            Fotografi e punetorit:
            <input type="file" name="empimg">
            <br><br>
            Emri i punetorit:
            <input type="text" name="empname">
            <br><br>
            Pozita e punetorit:
            <input type="text" name="emprole">
            <br><br>
            Roli i punetorit:
            <input type="text" name="empdesc">
            <br><br>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>