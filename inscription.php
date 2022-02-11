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
<form action="#" method="post">

	<h1>Créer un compte</h1>
	<input type="text" name="nom" placeholder="nom" />
	<input type="email" name="email" placeholder="email" />
	<input type="password" name="password" placeholder="password" />
	<button type="submit">Sign Up</button>
</form>