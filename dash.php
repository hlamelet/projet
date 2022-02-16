<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dash.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <nav class="nav">
        <a href="" class="logo">
            <i class="bi bi-lighbulb"></i>
            <img class="logoath" src="imgs/logo.png" alt="">
        </a>
        <ul class="menu">
            <li class="users"><a href=""><i class="bi bi-person-circle"></i>
                    Session : <span> Admin</span>
            <li class="active"><a href=""><i class="bi bi-house-fill"></i><span>Dashboard</span>
                </a></li>
            <li class="accuiel"><a href="index.php"><i class="bi bi-box-arrow-left"></i><span>Accueil</span>
                </a></li>
        </ul>
    </nav>

    <main class="content">
        <header class="header">
            <button type="button" class="button toggle-menu active">
                <i class="bi bi-list"></i>
                <span>Dashboard</span>
            </button>
            <form action="" class="form">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </header>

        <section class="section">
            <div class="container-fluid container-content cards">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card shadow">
                            <div class="desc">
                                <span>100</span>
                                <p>Utilisateurs connectée </p>
                            </div>
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card shadow">
                            <div class="desc">
                                <span>10</span>
                                <p>Serveur Actif</p>
                            </div>
                            <i class="bi bi-server"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card shadow">
                            <div class="desc">
                                <span> TEST</span>
                                <p>Total 10</p>
                            </div>
                            <i class="bi bi-ui-checks"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card shadow">
                            <div class="desc">
                                <span>TEST</span>
                                <p>Total 10</p>
                            </div>
                            <i class="bi bi-ui-checks"></i>
                        </div>
                    </div>
                </div>
        </section>
    </main>




    <!--footer -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="js/dash.js"></script>
</body>

</html>