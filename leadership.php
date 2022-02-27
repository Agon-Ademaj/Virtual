<?php

include_once 'Controller.php';
$employee = new Controller();

$showEmp = $employee -> showEmployee();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadership</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/employees.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>

    <?php include '../Virtual/include/header.php'?>

    <div class="leadership">
        <img class="cta_image" src="img/space.jpg" alt="">
        <div class="leadership-header">
            <h1>Stafi udhëheqës</h1>
        </div>
    </div>


    <div class="leadership_container">
        <div class="employees">
            <?php foreach($showEmp as $emp): ?>
                <div class="emp-container">
                    <div class="leadership-img">
                        <img width="280px" height="215px" src="img/<?=$emp['employeimg']?>" alt="">
                    </div>
                    <div class="leadership-container">
                        <h4><?php echo $emp['employename']; ?></h4>
                        <h5><?php echo $emp['employerole']; ?></h5>
                        <p><?php echo $emp['employedesc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include '../Virtual/include/footer.php'; ?>

    <script src="js/script.js"></script>

</body>
</html>