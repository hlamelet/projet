<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>

    <!-- Modal Section -->
    <div class="card-father">
        <div class="Cardcontainer" id="container">
            <div class="close">+</div>
            <div class="form-container sign-up-container">



                <form action="#" method="post">

                    <h3>Créer un compte</h3>
                    <input type="text" id="nom" name="nom" placeholder="nom">

                    <input type="text" id="email" name="email" placeholder="email">

                    <input type="text" id="password" name="password" placeholder="Mot de Passe">

                    <input type="password" id="passwordVerif" name="password" placeholder="Confirmez le Mot de Passe">

                    <div class="lesSpans">
                        <span id="nomError">Nom entre 2 et 20 characteres</span><br>
                        <span id="passwordErrorSize">Password : au moins 8 characteres</span><br>
                        <span id="passwordErrorMajuscule">Une majuscule</span><br>
                        <span id="passwordErrorMinuscule">Une minuscule</span><br>
                        <span id="passwordErrorNombre">Un nombre</span><br>
                        <span id="passwordErrorSpecial">Un charactere special</span><br>
                        <span id="passwordVerifError">Password de vérification identique</span>

                    </div>
                    <button class="btn btn-success" id="btnInscription" type="submit">Sign Up</button>


                </form>
            </div>
            <div class="form-container sign-in-container">

                <form action="#" method="post">
                    <img src="imgs/login+.png" width="100px" alt=""><br>
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
    </div>




    <script src="js/popUpVerifsInscrption.js"></script>
</body>

</html>