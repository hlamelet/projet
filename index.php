<?php
include('pdo.php');
if (isset($_SESSION)) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/headerHConnex.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">


    <title>Connexion</title>
</head>

<body>









    <?php
    include('header.php') ?>

    <!--------------------->









    <!--------popUp---------->
    <?php include('messages.php') ?>
    <!------fin popUp--------->





    <!---sections--->
    <section class="section-index1">
        <div class="home-section">
            <div class="desc-home">

                <h2>L’analyse du réseau :</h2>
                <p>Les réseaux sont les piliers de chaque entreprise. Même dans les petites entreprises, la perte de productivité lors d'une panne de réseau peut entraîner de lourds dommages.<span id="spanP"> L’analyse
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
            <h1>ATH Réseau:</h1>
        </div>

        <div class="allcards">
            <div class="card" style="width: 18rem;">

                <img class="card-img-top" src="imgs/responsive-design.png" alt="Card image cap">

                <div class="card-body">
                    <p class="card-text">Adapté sur tous les appareils </p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="imgs/analyse-web.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">C'est la meilleure solution pour gérer vos réseaux et garder vos informations strictement confidentielles.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="imgs/service-client.png" width="100px" alt="Card image cap">
                <a href="about.php#section-devs" style="color :black">
                    <div class="card-body">
                        <p class="card-text">une équipe à votre disposition de A à Z !</p>
                    </div>
                </a>
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
    <script src="js/inscription.js"></script>
    <script src="js/popUpVerifsInscrption.js"></script>
</body>

</html>