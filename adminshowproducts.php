<?php
session_start();
include_once 'Controller.php';
$products = new Controller();
$adminName = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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
      <h3>Admin: <?php echo $adminName ?></h3>
    </div>
  </div>

  <table class="showproducts">
    <tr>
      <th>Imazhi Produktit</th>
      <th>Emri Produktit</th>
      <th>Cmimi Produktit</th>
      <th>Perditeso</th>
      <th>Fshij</th>
    </tr>
    <tr>


      <?php

      $showproducts = $products->readProducts();

      foreach ($showproducts as $prod) :
      ?>
        <td><?php echo $prod['productimage'] ?></td>
        <td><?php echo $prod['productname'] ?></td>
        <td><?php echo $prod['productprice'] ?></td>
        <td><i class="fa-solid fa-pen-to-square" style="color: #333; cursor: pointer;"></i></td>
        <td><a href="deleteProduct.php?id= <?php echo $prod['productsid'];?>"><i class="fa-solid fa-trash-can" style="color: #333;"></i></a></td>
    </tr>
  <?php endforeach; ?>
  </table>

  <script src="https://kit.fontawesome.com/6d25678602.js" crossorigin="anonymous"></script>

</body>

</html>

<style>
  table {
    table-layout: fixed;
    width: 85%;
    border-collapse: collapse;

  }

  /* tbody tr:nth-child(even) {
    background-color: #808080;
  } */

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