<?php

include 'Controller.php';
$prod = new Controller();
if (isset($_GET['id'])) {
    $prodId = $_GET['id'];
}
$prod -> deleteProd($prodId);
header("Location: adminshowproducts.php");
?>