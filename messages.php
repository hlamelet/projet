<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="messages">
        <?php
        $error = false;
        $message_error =   "<h4 class='message_error'>L'email est déjà utilisée !</h4>";
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
                    echo $message_error;
                }
            }
        } else {
            $message_remplir = "<p>veuillez remplir le formulaire</p>";
        }

        ?>
    </div>
</body>

</html>