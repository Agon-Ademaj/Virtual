<?php

session_start();

include_once('Controller.php');

$user = new Controller();

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $userpass = $_POST['userpass'];

    $redirect = $user -> login($username, $userpass);

    $num = mysqli_fetch_array($redirect);

    if ($num['usertype'] == 'admin') {
        $_SESSION["usertype"] = $num["usertype"];
        $_SESSION['username'] = $num['userfullname'];
        header("Location: admin.php");
        exit();
    } else if ($num['usertype'] == 'user') {
        $name = $num["userfullname"];
        $userid = $num["userid"];
        // Sessions
        $_SESSION["usertype"] = $num["usertype"];
        $_SESSION["username"] = $name;
        $_SESSION["userid"] = $userid;
        header("Location: user.php");
        exit();
    } else {
        echo "<script>alert('Invalid details. Please try again');</script>";
        echo "<script>window.location.href='Login.php'</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual - Log in</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/loginstyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
    
    <?php include '../Virtual/include/header.php' ?>

    <div class="login">
        <div class="login-container">
            <img class="loginimage" src="img/CTA-bg.png" alt="">
            <div class="login-body">
                <form action="" method="POST">
                    <h2>Llogaria ime</h2>
                    <input type="text" name="username" placeholder="Username">
                    <br><br>
                    <input type="password" name="userpass" placeholder="Fjalkalimi">
                    <br><br>
                    <input type="submit" name="submit" value="Hyr">
                    <br>
                    <p>Nuk keni një llogari? Regjistrohu <a style="color: blue;" href="register.php">këtu</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>

</body>
</html>