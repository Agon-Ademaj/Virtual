<?php

include 'Controller.php';
$contact = new Controller();

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $inscontact = $contact -> insertContact($name, $email, $subject, $message);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>
<body>

    <?php include './include/header.php' ?>

    <div class="contact">
        <img class="img" src="img/CTA-bg.png" alt="">
        <div class="contact-container" style="display: flex; justify-content: space-between;">
            <div class="contact-header">

                <div class="contact-form">
                <h2>Dergo Mesazh</h2>
                    <form action="" method="POST">
                        <input type="text" name="name" placeholder="Emri">
                        <br><br>
                        <input type="email" name="email" placeholder="E-mail">
                        <br><br>
                        <input type="text" name="subject" placeholder="Subject">
                        <br><br>
                        <input type="text" mame="message" placeholder="Mesazhi" style="height: 100px;">
                        <br><br>
                        <input type="submit" name="submit" value="Dergo">
                    </form>
                </div>

            </div>
            <div class="imgtest" style="position:relative; bottom: 7em; left: 2em; object-fit: cover; width: 50%; height: 30%;">
                <img src="img/Sass.png" alt="" style="height: 70%; width: 100%;">
            </div>
        </div>
    </div>

</body>
</html>