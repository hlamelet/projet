<?php include("pdo.php");


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
    <link rel="stylesheet" href="css/mdp.css">

    <title>ATH-reseau</title>
</head>

<body>
    <?php
    include("header.php") ?>

    <?php
    include("messages.php") ?>
    <div class="recherche">
        <img src="imgs/password.png" alt="mdp">
        <h2>Entrez votre adresse mail</h2>
        <form action="" method="POST" class="searchinput">
            <input class="barrerecherche" type="text" name="email" value="" />
            <input class="submit" type="submit" value=" Envoyer" />

        </form>


        <?php if (!empty($_POST['email'])) {

            $email = $_POST['email'];
            $requestUtilisateur = $pdo->prepare("SELECT * FROM user WHERE email='$email'");
            $requestUtilisateur->execute();
            $users = $requestUtilisateur->fetch();

            if ($users) {

                $to = $users["email"];
                $subjet = "Notification Mot de Passe - ATH-Reseau";
                $message = "Bonjour " . $users["nom"] . ", " . "Il semble que vous avez oublié votre mot de passe, merci de ne le communiquer à personne, Ceci est votre mot de passe : "   . $users["password"] . "\n\n";
                $headers = "From : athreseau@gmail.com \r\n";


                if (mail($to, $subjet, $message, $headers)) {
                    echo ("<p class='mdp-envoye'>mot de passe envoyé .</p>");
                } else
                    echo 'erreur';
            } else {
                echo ("<p class='mdp-inconnue'>Adresse mail inconnue !</p>");
            }
        }

        ?>
    </div>


    <?php include("footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/inscription.js"></script>
    <script src="js/popUpVerifsInscrption.js"></script>
</body>

</html>