<!DOCTYPE html>
<html lang="en">

<style>
    html {
    scroll-behavior: smooth;
}
</style>

<head>
    <title>VR Stratus</title>
    <link rel="stylesheet" href="css/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

    <?php include '../Virtual/include/header.php' ?>

    <div class="container">
        <!-- Section 1 -->
        <div class="home">
            <img class="img" src="img/prod2_crop.hero.jpg" alt="">

            <div class="home__container">
                <h1>Madhështia nuk mbaron kurrë,<br>por evulon</h1>
                <div class="buttons">
                    <a href="#features" class="btn btn__blue">Eksploro</a>
                    <a href="Products.php" class="btn btn__white">Bleni tani</a>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="slider">
            <div class="slider__content">
                <img class="icon" src="img/EyeIcon.png" alt="">
                <h2>Ndryshe nga çdo gjë që keni përjetuar ndonjëherë</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel turpis sed felis finibus scelerisque. Sed et facilisis urna. Vestibulum vehicula scelerisque pellentesque. Suspendisse at dolor leo. Integer ac luctus nisi, a scelerisque odio. Integer non nisl eu ligula semper dictum.</p>
            </div>
            <img class="virtual_showcase" src="img/prod2_showcase.jpg" alt="">
        </div>

        <!-- Section 3 -->
        <div class="features" id="features">
            <div class="features__header">
                <img class="icon" src="img/flash.png" alt="">
                <h2>Realiteti virtual i gjeneratës së ardhshme</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel turpis sed felis finibus scelerisque. Sed et facilisis urna. Vestibulum vehicula scelerisque pellentesque. Suspendisse at dolor leo.</p>
            </div>

            <div class="features__content">
                <div class="features__content_flex">
                    <div class="row">
                        <div class="feature feature__one">
                            <img class="icons" src="img/square.png" alt="">
                            <h3>Ndërfaqja celulare</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper. Fusce consectetur turpis nec dolor laoreet ultrices. In a venenatis leo.</p>
                        </div>
                        <div class="feature feature__two">
                            <img class="icons" src="img/camera.png" alt="">
                            <h3>Eksperienca e perdoruesit</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper. Fusce consectetur turpis nec dolor laoreet ultrices. In a venenatis leo.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="feature feature__three">
                            <img class="icons" src="img/mobile2.png" alt="">
                            <h3>Zhvillimi i Uebit</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper. Fusce consectetur turpis nec dolor laoreet ultrices. In a venenatis leo.</p>
                        </div>
                        <div class="feature feature__four">
                            <img class="icons" src="img/arrow.png" alt="">
                            <h3>Strategjia e Projektit</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper. Fusce consectetur turpis nec dolor laoreet ultrices. In a venenatis leo.</p>
                        </div>
                    </div>
                </div>

                <div class="feature__footer">
                    <img class="feature__image" src="img/prod2_html4.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="theme">
            <div class="theme__container">
                <h3>A janë produktet tona të përshtatshme për ju? Bleni tani në dyqanin tonë online!</h3>
                <!-- <button class="btn btn__white">Bleni ketu</button> -->
                <a href="products.php" class="btn btn__white">Bleni këtu</a>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="advantages-section">
            <div class="advantages_all">
                <div class="advantages__header">
                    <img class="icon" src="img/settings.png" alt="">
                    <h2>Ndërtim cilësor si nga jashtë, ashtu dhe brenda</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel turpis sed felis finibus scelerisque. Sed et facilisis urna. Vestibulum vehicula scelerisque pellentesque. Suspendisse at dolor leo.</p>
                </div>
                <div class="advanteges__content">
                    <div class="advantages__content_left">
                        <img class="riftrear__image" src="img/inside.png" alt="">
                    </div>
                    <div class="advantages__content_right">
                        <div class="advantages advantages__one">
                            <img class="icons" src="img/square__grey.png" alt="">
                            <h3>Dizajn i hollë</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper.</p>
                        </div>
                        <div class="advantages advantages__two">
                            <img class="icons" src="img/camera_grey.png" alt="">
                            <h3>Plotësisht i personalizueshëm</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper.</p>
                        </div>
                        <div class="advantages__three">
                            <img class="icons" src="img/unlimited.png" alt="">
                            <h3>Përmirësime të pakufizuara</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="innovative">
            <div class="innovative__header">
                <img class="innovative__image" src="img/prod2_tour.jpg" alt="">
            </div>
            <div class="innovaive__container">
                <h2>Kontrollues inovatorë për përshtatje</h2>
                <p>Maecenas aliquet massa tempus, euismod ipsum id, tempus ante. Maecenas vulputate nibh et nulla euismod, egestas bibendum ante molestie. Integer metus libero, vulputate dictum libero vel, iaculis bibendum neque. Vestibulum id imperdiet lorem. Maecenas sollicitudin ex nunc. In hac habitasse platea dictumst. Mauris magna urna, gravida quis tempus sodales, lobortis varius lacus. Ut lacinia, leo eget suscipit mattis.</p>
            </div>
        </div>

        <div class="parallax"></div>

        <div class="riviews">
            <div class="riviews__container">
                <h3>"Një dizajn inovator që përmbush premtimet e tij dhe tejkalon pritshmëritë. Kjo ndjehet vërtet si e ardhmja e lojërave."</h3>
                <img class="testimonial" src="img/testimonial.jpg" alt="">
                <p>Sandra Thompson</p>
                <p>Rishikues Teknik</p>
            </div>
        </div>
    </div>

    <?php include '../Virtual/include/footer.php' ?>

    <script src="js/script.js"></script>
</body>

</html>
