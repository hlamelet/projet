<?php
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
<<<<<<< Updated upstream
			$password = password_hash("$password", PASSWORD_DEFAULT);
=======

>>>>>>> Stashed changes
			$RequestInsertUser = $pdo->prepare(
				"INSERT INTO `user`(`nom`,`email`,`password`) 
                    VALUES ('$nom','$email' ,'$password')"
			);
			if ($RequestInsertUser->execute()) {
				$_SESSION["nom"] = $_POST["nom"];
				$_SESSION["email"] = $_POST["email"];
				header("location: index.php");
			} else {
				var_dump($RequestInsertUser->errorInfo());
			}
		} elseif (!empty($user)) {
			$emailUsed = "L'email est déjà utilisée";
		}
	}
}
?>
<<<<<<< Updated upstream

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/index.css">

	<title>Document</title>
</head>

<body>
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



</body>

</html>
=======
<form action="#" method="post">

	<h1>Créer un compte</h1>
	<input type="text" name="nom" placeholder="nom" />
	<input type="email" name="email" placeholder="email" />
	<input type="password" name="password" placeholder="password" />
	<button type="submit">Sign Up</button>
</form>
>>>>>>> Stashed changes
