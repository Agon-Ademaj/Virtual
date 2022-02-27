<?php
session_start();
include_once 'Controller.php';
$contact = new Controller();
$adminName = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontaktet nga klientet</title>

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
            <a href="adminshowcontact.php">Kontaktet nga klientet</a>
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

    <table class="showproducts">
    <tr>
      <th>Emri nga kontakti</th>
      <th>Email nga kontakti</th>
      <th>Subjekti nga kontakti</th>
    </tr>
    <tr>


      <?php

      $showcont = $contact-> showContact();

      foreach ($showcont as $cont) :
      ?>
        <td><?php echo $cont['contactname'] ?></td>
        <td><?php echo $cont['contactemail'] ?></td>
        <td><?php echo $cont['contactsubject'] ?></td>
    </tr>
  <?php endforeach; ?>
  </table>

    
</body>
</html>

<style>
  table {
    table-layout: fixed;
    width: 85%;
    border-collapse: collapse;

  }

  tbody tr:nth-child(even) {
    background-color: #f4f4f4;
  }

  th,
  td {
    padding: 7px;
  }

  tbody td {
    text-align: center;
  }

  tfoot th {
    text-align: right;
  }
</style>