<?php

if (isset($_POST['cemail'])) {
    $email = ($_POST['cemail']);
    $password = ($_POST['cpassword']);

    $query = "SELECT * FROM user WHERE email='$email' and password='$password'";
    $result = mysqli_query($connection, $query);
    $rows = mysqli_num_rows($result);
    print_r($rows);

    $requestnom = $pdo->prepare(
        "SELECT `nom` FROM user WHERE email='$email'"
    );
    $requestnom->execute();
    $nom_user = $requestnom->fetchAll();


    if (mysqli_num_rows($result) == 1) {
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