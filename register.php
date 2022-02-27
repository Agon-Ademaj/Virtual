<?php

include_once 'Controller.php';
$register = new Controller();

if (isset($_POST['submit'])) {
    $userfullname = $_POST['fullname'];
    $username = $_POST['username'];
    $useremail = $_POST['email'];
    $userpass = $_POST['password'];
    $usertype = $_POST['usertype'];

    $registerData = $register -> register($userfullname, $username, $useremail, $userpass, $usertype);

    if ($register) {
        echo  "<script> alert('Registration succssfuly'); </script>";
        echo "<script> window.location.href='Register.php' </script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='Register.php'</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Regjistrimi - AgoX</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/register.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>

    <?php include '../Virtual/include/header.php' ?>

    <div class="register">
        <img class="cta_image" src="img/CTA-bg.png" alt="">
        <div class="register-header">
            <h1>Regjistrohuni falas për të filluar blerjen</h1>
        </div>
    </div>

    <div class="register__container">
        <div class="register__body">
            <div class="register__contact">
                <div class="contact contact_one">
                    <img class="icons" src="img/mobilegrey.png" alt="">
                    <h2>+383/44-612346</h2>
                </div>
                <div class="contact contact_two">
                    <img class="icons" src="img/mailgrey.png" alt="">
                    <h2>agonademaj@agoX.com</h2>
                </div>
                <div class="contact contact_three">
                    <img class="icons" src="img/locationgrey.png" alt="">
                    <h2>Zyra qendrore</h2>
                    <p>Kosove, Prishtine</p>
                </div>
            </div>

            <div class="register__form" style="box-shadow: 2px 2px 40px 1px grey; border-radius: 10px;">
                <div class="form__container">
                    <h2>Regjistrohu duke plotësuar formën</h2>
                    <form action="#" method="POST">
                        <input type="text" name="fullname" placeholder="Emri i plotë">
                        <br><br>
                        <input type="text" name="username" placeholder="Username">
                        <br><br>
                        <input type="email" name="email" placeholder="Email">
                        <br><br>
                        <input type="password" name="password" placeholder="Fjalkalimi">
                        <br><br>
                        <select type="select" name="usertype">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                        <br><br>
                        <input type="submit" name="submit" value="Regjistrohu">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include '../Virtual/include/footer.php' ?>
    <script src="js/script.js"></script>

</body>
</html>