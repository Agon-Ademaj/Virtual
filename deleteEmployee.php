<?php

include 'Controller.php';
$emp = new Controller();
if (isset($_GET['id'])) {
    $empId = $_GET['id'];
}
$emp -> deleteEmp($empId);
header("Location: adminshowemployees.php");
?>