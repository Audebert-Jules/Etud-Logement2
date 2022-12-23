<?php

//Connexion a la base de données

$servername = 'localhost';
$username = 'root';
$password = 'c6$H7zy7H+)G';
$base = 'etudlogement';

//On établit la connexion
$conn = new PDO("mysql:host=$servername;dbname=$base", $username, $password);

//On vérifie la connexion
if (!$conn) {
    die('Erreur : ' . mysqli_connect_error());
    return false;
}

// Vérification de la soumission du formulaire
if ($_POST) {

    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $dateBirth = $_POST['dateBirth'];
    $ine = $_POST['INE'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Prépare et exécute la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO Users (LastName, FirstName, Email, Phone, DateBirth, INE, Password) VALUES (?, ?, ?, ?, ?, ?, ?)");

    $stmt->execute([$nom, $prenom, $email, $phone, $dateBirth, $ine, $password]);

    // Redirige l'utilisateur vers la page de confirmation
    header('Location: Login.php');
    exit;
}
?>




<!DOCTYPE html>

<html>

<head>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylebibi.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Inscription</title>
    </head>

<body>

    <nav>
        <a href="index.php"><img src="images/maison.png" alt="Home" class="nava"></a> <a href="info.php"><img src="images/i.png" alt="Info" class="nava"></a>
        <a href="map.php"><img src="images/map.png" alt="Map" class="nava"></a> <a href="Login.php"><img src="images/profile.png" alt="Compte" class="selected"></a>
    </nav>

    <h1>Inscription</h1>

    <form name="fo" method="post" action="">
        <input type="text" name="nom" placeholder="Nom" /><br />
        <input type="text" name="prenom" placeholder="Prénom" /><br />
        <input type="text" name="INE" placeholder="INE" /><br />
        <input type="text" name="mail" placeholder="Email" /><br />
        <input type="text" name="phone" id="phone" placeholder="Votre numéro de téléphone"> <br>
        <input type="date" name="dateBirth" id="dateBirth" placeholder="Votre date d'anniversaire"> <br>
        <input type="password" name="password" placeholder="Mot de passe" /><br />
        <input type="password" name="passconf" placeholder="Confirmer votre Mot de passe"><br />
        <input type="submit" name="inscrire" value="inscrire" />
        <a href="Login.php">Deja un compte</a>
    </form>
</body>

</html>