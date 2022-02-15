<?php include("pdo.php");
$error = false;


if (!empty($_SESSION)) {
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="headerHConnex.css">
    <title>index</title>
</head>

<body>
    <nav>

        <input id="nav-toggle" type="checkbox">
        <div class="logo">

            <a href="index.php"><img src="imgs/logo.png" alt="logo"></a>
        </div>


        <ul class="links">
            <?php
            if (isset($_SESSION['email'])) {
                echo "<a href='dashBoard.php'><li>Dashbord</li></a>";
            }
            ?>
            <a href="about.php">
                <li>Qui somme-nous?</li>
            </a>
            <?php
            if (isset($_SESSION['email'])) {
                echo "<a href='deconnexion.php'><li class='deconnexion'>Log/out</li></a>";
            } else {
                echo "<a href='#' id='button' class='button'><li class='connexion'>Login</li></a>";
            }
            ?>

            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>

            </label>
    </nav>

    <!--------------------->
    <!--------popUp---------->
    <?php include('popUp.php') ?>
    <!------fin popUp--------->
    <!---sections--->
    <section class="section-index1">
        <div class="home-section">
            <div class="desc-home">

                <h2>L’analyse du réseau :</h2>
                <p>Les réseaux sont les piliers de chaque entreprise. Même dans les petites entreprises, la perte de productivité lors d'une panne de réseau peut entraîner de lourds dommages.<span> L’analyse
                        du réseau vous aide à anticiper les pannes potentielles et à résoudre les problèmes de réseau de manière proactive. Cela aide à maintenir un réseau sans congestion qui maintient votre entreprise opérationnelle. Un logiciel d’analyse réseau vous aide à contrôler les performances de tout appareil IP et aide les entreprises à visualiser à distance les performances de leur système et à analyser les services réseau, l'utilisation de la bande passante, les commutateurs, les routeurs et le flux de trafic.</span>
                </p>
                <button class="savoir-plus">Savoir plus </button>
            </div>

            <div>
                <img src="imgs/gps-tracking_features_route_management.png" alt="">
            </div>
        </div>


    </section>
    <!---->
    <section class="section-index2">
        <div class="h1-notreSite">
            <h1>Notre Site :</h1>
        </div>

        <div class="allcards">
            <div class="card" style="width: 18rem;">

                <img class="card-img-top" src="imgs/test img1.png" height="200px" alt="Card image cap">

                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="imgs/test img1.png" height="200px" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="imgs/test img1.png" height="200px" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </section>
    <!------------section3------------->

    <section class="section-index3">
        <div class="home-section">
            <div>
                <img src="imgs/undraw_traveling_re_weve.svg" alt="">
            </div>
            <div class="desc-home">
                <h1>Commencez en toute sécurité</h1>
                <a href="#"> <button class="connexion" id="button">Rejoignez-nous</button></a>
            </div>
        </div>
    </section>








    <!------footer------>

    <?php include('footer.php') ?>
    <!--------------->




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="inscription.js"></script>
</body>

</html>