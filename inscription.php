
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>
</head>

<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#" method="post">
				<h1>Créer un compte</h1>
				<input type="text" name="nom" placeholder="nom" />
				<input type="email" name="email" placeholder="email" />
				<input type="password" name="password" placeholder="password" />
				<button type="submit">S'inscrire</button>
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

</body>


</html>