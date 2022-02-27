<?php
session_start();
include_once 'Controller.php';
$buyers = new Controller();
// echo $userid;

if(isset($_POST["submit"])) {
    $userbuyid = $_SESSION["userid"];
    $productimg = $_POST["hidden_img"];
    $productname = $_POST["hidden_name"];
    $productprice = $_POST["hidden_price"];

    $buyersProd = $buyers -> insertBuyers($userbuyid, $productimg, $productname, $productprice);
    echo "<script>alert('Added to cart: $productname');</script>";
}

if ($_SESSION["usertype"] != "user") {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llogaria ime | <?php echo $_SESSION["username"] ?></title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/user.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>

    <header class="header">
        <nav class="nav-bar">
            <div class="logo">
                <h1 class="pointer">AgoX</h1>
            </div>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-ul" id="nav-ul">
                <li><a href="#"> <?php echo $_SESSION["username"] ?></a></li>
                <li><a class="nav-list" href="purchases.php">Porositë</a></li>
                <li><a class="nav-list" href="logout.php">Shkyçu</a></li>
            </ul>
        </nav>
    </header>

    <div class="products">
        <img class="product-image"  alt="">
        <div class="products-header">
            <!-- <h1>Welcome, <?php echo $_SESSION["username"] ?></h1> -->
            <h1>Blini Tani me zbritjet tona!</h1>
            <h2>Të gjitha paisjet teknologjike përfshirë edhe paijset e realitetit virtual -20% ulje vetëm këtë javë</h2>
            <a href="#prod" class="btntest">Shfletoni</a>
        </div>
    </div>

    <?php
    $userProducts = new Controller();
    $allProd = $userProducts->readProducts();
    ?>

    <div class="prod" id="prod">
        <?php foreach ($allProd as $product) : ?>
            <form action="" method="POST">
                <div class="prod-container">
                    <div class="prod-img">
                        <img style="width: 300px;" src="img/<?= $product['productimage'] ?>" alt="product">
                        <input type="hidden" name="hidden_img" value="<?php echo $product['productimage'] ?>">
                    </div>
                    <div class="prod-body">
                        <h3><?php echo $product['productname']; ?></h3>
                        <input type="hidden" name="hidden_name" value="<?php echo $product['productname']; ?>">
                        <h5><?php echo $product['productprice'] ?> &euro;</h5>
                        <input type="hidden" name="hidden_price" value="<?php echo $product['productprice'] ?>">
                    </div>

                    <a href="details.php?id=<?php echo $product['productsid'] ?>">
                        <input type="submit" name="submit" value="Blini">
                    </a>
                </div>
            </form>
        <?php endforeach; ?>
    </div>

    <script src="js/script.js"></script>

</body>

</html>