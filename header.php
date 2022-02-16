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


            <li><a href="about.php">Qui somme-nous?</a></li>

            <a href="#" id="button" class="button">
                <li class="connexion"><img src="imgs/login.png" alt=""> Login </li>
            </a>

        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>

        </label>



    </nav>


    <?php include('popUp.php') ?>


</body>

</html>