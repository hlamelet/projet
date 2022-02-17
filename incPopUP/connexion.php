<?php

// print_r(password_hash("$password", PASSWORD_DEFAULT));
if (isset($_POST['cemail'])) {
    $email = ($_POST['cemail']);
    $password = ($_POST['cpassword']);

    // $query = "SELECT * FROM user WHERE email='$email' and password='$password'";
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($connection, $query);
    $rows = mysqli_num_rows($result);

    $requestemail = $pdo->prepare(
        "SELECT * FROM user WHERE email='$email'"
    );
    $requestemail->execute();
    $User = $requestemail->fetchAll();


    $requestnom = $pdo->prepare(
        "SELECT `nom` FROM user WHERE email='$email'"
    );
    $requestnom->execute();
    $nom_user = $requestnom->fetchAll();

    $requestpassword = $pdo->prepare(
        "SELECT `password` FROM user WHERE email='$email'"
    );
    $requestpassword->execute();
    $hashedPassword = $requestpassword->fetchAll();
    $hashedPassword = $hashedPassword[0][0];
    print_r($hashedPassword);

    if (password_verify($password, $hashedPassword) == 1) {
        $_SESSION["nom"] = $nom_user[0][0];
        $_SESSION["email"] = $email;
        header("location: index.php");
    }
}

?>
<form action="" method="post">
    <h1>S'identifier</h1>
    <input type="email" placeholder="email" name="cemail" />
    <input type="password" placeholder="Password" name="cpassword" />
    <a href="#">Mot de passe oublié?</a>
    <button type="submit">S'identifier</button>
</form>