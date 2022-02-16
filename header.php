<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>

        <input id="nav-toggle" type="checkbox">
        <div class="logo">

            <a href="index.php"><img src="imgs/logo.png" alt="logo"></a>
        </div>


        <ul class="links">

            <?php if (isset($_SESSION['email'])) {
                echo "<li><a href='dashBoard.php'>Dashbord</a></li>";
            }
            ?>
            <li><a href="about.php">Qui somme-nous?</a></li>
            <?php if (!isset($_SESSION['email'])) {
                echo "<a href='#' id='button' class='button'>";
                echo "<li class='connexion'><img src='imgs/login.png' alt=''> Login </li></a>";
            }
            if (isset($_SESSION['email'])) {
                echo "<a href='deconnexion.php'>";
                echo "<li class='deconnexion'><img src='imgs/logout.png' width='30px' alt='logout'> Logout</li></a>";
            }
            ?>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>

        </label>



    </nav>


    <?php include('incPopUP\popUp.php') ?>


</body>

</html>