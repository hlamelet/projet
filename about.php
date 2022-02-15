    <?php include('pdo.php') ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>This is my Portfolio Website</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <link rel="stylesheet" href="css/headerHConnex.css">
        <link rel="stylesheet" href="css/about.css">

    </head>

    <body>

        <!-- Navbar -->
        <?php include('header.php') ?>
        <!-- Navbar End -->
        <!---messages----->
        <?php include('messages.php') ?>
        <!-------->
        <header class="py-5 section1">
            <div class="container px-lg-5 ">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center ">
                    <div class="m-4 m-lg-5 "> <img class="img-home" src="imgs/blogging.png" alt="">
                        <h1 class="display-5 fw-bold">Qui somme-nous?</h1>
                        <p class="fs-4">Nous somme une entreprise spécialiser à gérer et analyser les trames réesaux avec une équipe toujours à votre disposition et à votre écoute pour d'eventuelle questions.</p>
                        <a class="btn btn-primary btn-lg coord-qsn" href="#footer"> Nos Coordonnées</a>
                        <div class="qsn-coordonnées"><img src="../imgs/logo_Need_For_School.jpg" alt="" srcset=""> <img src="../imgs/logo.png" alt="" style="background-color: black;border-radius:50%; width:100px">
                            <p> <img src="imgs/location.png" alt=""> Need for School,Rouen 765000</p>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d83138.60077748411!2d0.9869778270765159!3d49.36953509399671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d49.2899925!2d0.9972738!4m5!1s0x47e0df1548cd768b%3A0x70b4b34959b1ec9f!2sneed%20for%20school%20rouen!3m2!1d49.4304007!2d1.0812127!5e0!3m2!1sfr!2sfr!4v1644863404915!5m2!1sfr!2sfr" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <p><img src="imgs/phone-call.png" alt="" srcset=""> 02 35 70 04 04</p>
                            <p><img src="imgs/email.png" alt="" srcset=""> info@ath-reseau.com</p>

                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->


        <section class="pt-4 " id="partenaires">
            <div class="container px-lg-5">

                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-4 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold"><a href="#" target="_blank"><img src="imgs/logo-QSN.jpg" alt=""></a></h2>
                                <p class="mb-0">une entreprise spécialiser d'analyse du réseaux</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold"><a href="https://www.needfor-school.com/" target="_blank"><img src="imgs/logo_Need_For_School.jpg" alt=""></a></h2>
                                <p class="mb-0"> une école associative pour vous former aux métiers du numérique</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold"><a href="https://www.pole-emploi.fr/accueil/" target="_blank"><img src="imgs/pole_emploi.png" alt=""></a></h2>
                                <p class="mb-0">Un établissement public à caractère administratif (EPA), chargé de l'emploi en France</p>
                            </div>
                        </div>
                    </div>

        </section>
        <!-----------map---------->


        <!--------------->
        <section class="pt-4 section-devs" id="section-devs">

            <h2>Notre équipe :</h2>
            <div class="equipe-devs">

                <div class=" cardid">
                    <img src="imgs/programmer.png" alt="">
                    <h3>AHMAD</h3>
                    <p>Developpeur web dans Need for school et membre de l'équipe ATH Réseau.</p>
                    <button class="devs-coord-ahmad">Ses Coordonnées</button>
                    <div class="devs-coordonnées-ahmad">
                        <p> <img src="imgs/location.png" alt=""> Need for School,Rouen 765000</p>

                        <p><img src="imgs/phone-call.png" alt="" srcset=""> + 01 234 567 88</p>
                        <p><img src="imgs/email.png" alt="" srcset=""> info@ath-reseau.com</p>
                        <p></p>
                    </div>
                </div>
                <div class=" cardid">

                    <img src="imgs/programmertheo.png" alt="">
                    <h3>THEO</h3>
                    <p>Developpeur web dans Need for school et membre de l'équipe ATH Réseau.</p>
                    <button class="devs-coord-theo">Ses Coordonnées</button>
                    <div class="devs-coordonnées-theo">
                        <p> <img src="imgs/location.png" alt=""> Need for School,Rouen 765000</p>
                        <p><img src="imgs/phone-call.png" alt="" srcset=""> + 01 234 567 88</p>
                        <p><img src="imgs/email.png" alt="" srcset=""> info@ath-reseau.com</p>
                    </div>
                </div>
                <div class="cardid">

                    <img src="imgs/programmerhugo.png" alt="">
                    <h3>HUGO</h3>
                    <p>Developpeur web dans Need for school et membre de l'équipe ATH Réseau.</p>
                    <button class="devs-coord-hugo">Ses Coordonnées</button>
                    <div class="devs-coordonnées-hugo">
                        <p> <img src="imgs/location.png" alt=""> Need for School,Rouen 765000</p>
                        <p><img src="imgs/phone-call.png" alt="" srcset=""> + 01 234 567 88</p>
                        <p><img src="imgs/email.png" alt="" srcset=""> info@ath-reseau.com</p>
                    </div>
                </div>
            </div>
        </section>




















        <!-- End of contact section -->
        <?php include('footer.php') ?>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="js/inscription.js"></script>
        <script src="js/about.js"></script>

    </body>

    </html>