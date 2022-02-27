<?php

session_start();
include_once('Controller.php');

if(isset($_POST["submit"])) {
    echo "<script>alert('Per te filluar blerjen, ju duhet te keni nje llogari!')</script>";
    // header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dyqani</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/products.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

    <?php include './include/header.php';?>

    <div class="products">
        <img class="product-image" src="img/shop.jpg" alt="">
        <div class="products-header">
            <h1>Dyqani</h1>
        </div>
    </div>


    <?php

    $userProducts = new Controller();
    $allProd = $userProducts->readProducts();

    ?>

    <div class="prod">
        <?php foreach ($allProd as $product) : ?>
            <form action="" method="POST">
                <div class="prod-container">
                    <div class="prod-img">
                        <img style="width: 300px;" src="img/<?= $product['productimage'] ?>" alt="product">
                    </div>
                    <div class="prod-body">
                        <h3><?php echo $product['productname']; ?></h3>
                        <h5><?php echo $product['productprice'] ?> &euro;</h5>
                    </div>
                    <a href="products.php?id=<?php echo $product['productsid'] ?>">
                        <input type="submit" name="submit" class="btnprod">
                    </a>
                </div>
            </form>
        <?php endforeach; ?>
    </div>


    <?php include './include/footer.php'; ?>

</body>

</html>