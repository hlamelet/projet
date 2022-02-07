<?php include("partials/php/pdo.php");
 
 $error = false;

 if (!empty($_POST)) {
    if (
        empty($_POST["nom"]) || empty($_POST["prenom"])
        || empty($_POST["email"]) || empty($_POST["password"])
    ) {
        $error = true;
    } else {

        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        

        $checkUser = $db->prepare("SELECT * FROM users WHERE email = '$email';");
        $checkUser->execute();
        $user = $checkUser->fetch();

        if (empty($user)) {

            $RequestInsertUser = $db->prepare(
                "INSERT INTO `users`(`nom`, `prenom`, `email`, `password`) 
                    VALUES ('$nom','$prenom','$email' ,'$password')"
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
    <meta name="viewport" content="width=<bt, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <button class="main-btn"><a href="#">Get started</a></button> 
    
    <div class="modal" id="email-modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="modal-content-left">
                <img src="/images/image1.svg" alt="">
            </div>
            <div class="modal-content-left">
                <form action="/" method="post" class="modal-form"
                id="form">
                <h1> Bienvenue sur le site ! inscrit-toi !</h1>
                <div class="form-validation">
                    <input type="text"class="modal-input" id="nom" name="nom" placeholder="Entrer votre nom">
                        <p>Erreur Message<p>
                </div>
                <div class="form-validation">
                    <input type="text"class="modal-input" id="prenom" name="prenom" placeholder="Entrer votre prenom">
                        <p>Erreur Message<p>
                </div>
                <div class="form-validation">
                    <input type="email"class="modal-input" id="email" name="email" placeholder="Entrer votre email">
                        <p>Erreur Message<p>
                </div>
                <div class="form-validation">
                    <input type="text"class="modal-input" id="password"  name="password" placeholder="Entrer votre mot de passe">
                        <p>Erreur Message<p>
                </div>
                <input type="submit" class="modal-input-btn" value="Inscription">
                <span class="modal-input-login"> Vous avez deja un compte ? inscrit-toi <a href="#">Inscription</a></span>
            </form>
            </div>
        </div>
    </div>
</body>
</html>