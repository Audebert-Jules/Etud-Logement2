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
		<!-- Cookie Consent by TermsFeed https://www.TermsFeed.com -->
        <script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.0.0/cookie-consent.js" charset="UTF-8"></script>
        <script type="text/javascript" charset="UTF-8">
            document.addEventListener('DOMContentLoaded', function () {
                cookieconsent.run({"notice_banner_type":"simple","consent_type":"express","palette":"light","language":"fr","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false,"website_name":"etud'logement"});
            });
        </script>

        <!-- googleAnalytics -->
        <script type="text/plain" cookie-consent="tracking" async src="https://www.googletagmanager.com/gtag/js?id=G-WN2K5JW9PM"></script>
        <script type="text/plain" cookie-consent="tracking">
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-WN2K5JW9PM');
        </script>
        <!-- end of googleAnalytics-->

        <noscript>Free cookie consent management tool by <a href="https://www.termsfeed.com/" rel="nofollow noopener">TermsFeed Policy Generator</a></noscript>
        <!-- End Cookie Consent by TermsFeed https://www.TermsFeed.com -->
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylebibi.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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