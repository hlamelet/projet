<?php include("pdo.php");

$error = false;

if (!empty($_POST)) {
    if (
        empty($_POST["nom"]) || empty($_POST["email"])
        || empty($_POST["password"])
    ) {
        $error = true;
    } else {

        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $password = $_POST["password"];


        $checkUser = $pdo->prepare("SELECT * FROM user WHERE email = '$email';");
        $checkUser->execute();
        $user = $checkUser->fetch();

        if (empty($user)) {

            $RequestInsertUser = $pdo->prepare(
                "INSERT INTO `user`(`nom`,`email`,`password`) 
                    VALUES ('$nom','$email' ,'$password')"
            );
            if ($RequestInsertUser->execute()) {
                header("location: index.php");
            } else {
                var_dump($RequestInsertUser->errorInfo());
            }
        } else {
            echo "L'email est déjà utilisée";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="headerHConnex.css">
    <title>Header Après Connexion</title>
</head>

<body>

    <header>
        <nav>

            <input id="nav-toggle" type="checkbox">
            <div class="logo">

                <a href="index.php"><img src="imgs/logo.png" alt="logo"></a>
            </div>


            <ul class="links">


                <li><a href="mentionlegale.php">Qui somme-nous?</a></li>
                <li class=" deconnexion"><a href="#" id="button" class="">Login</a></li>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>

            </label>



        </nav>
    </header>
    <!--------------------->





    <!-- Card Section -->

    <section class="card-container">
        <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div>
    </section>

    <!-- Modal Section -->

    <div class="Cardcontainer" id="container">
        <div class="close">+</div>
        <div class="form-container sign-up-container">



            <form action="#" method="post">

                <h1>Créer un compte</h1>
                <input type="text" name="nom" placeholder="nom" />
                <input type="email" name="email" placeholder="email" />
                <input type="password" name="password" placeholder="password" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">

            <form action="#" method="post">
                <h1>S'identifier</h1>
                <input type="email" placeholder="email" />
                <input type="password" placeholder="Password" />
                <a href="#">Mot de passe oublié?</a>
                <button type="submit">S'identifier</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenue !</h1>
                    <p>Pour rester en contact avec nous, veuillez vous connecter avec vos informations personnelles</p>
                    <button class="ghost" id="signIn">S'identifier</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Salut !</h1>
                    <p>Entrez vos données personnelles et commencez votre voyage avec nous</p>
                    <button class="ghost" id="signUp">S'inscrire</button>
                </div>
            </div>

        </div>

    </div>

























<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="inscription.js"></script>
</body>

</html>