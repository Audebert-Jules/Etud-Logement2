<?php

//lancement de la session
session_start();

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
    $code_ine = $_POST['INE'];

    // Prépare et exécute la requête d'insertion
    $req = $conn->prepare("SELECT * FROM Users WHERE INE = ?");
    $req->execute([$code_ine]);
    $user = $req->fetch();
    if (password_verify($_POST["password"], $user["Password"])) {

        $_SESSION['email'] = $user["Email"];
        $_SESSION['ine'] = $user["INE"];
        $_SESSION['phone'] = $user["Phone"];
    }
    // var_dump($user);
    // Redirige l'utilisateur vers la page de confirmation
    //header('Location: Login.php');

}

?>





<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylebibi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    <title>Login</title>

</head>

<body>

    <nav>
        <a href="index.php"><img src="images/maison.png" alt="Home" class="nava"></a> <a href="info.php"><img src="images/i.png" alt="Info" class="nava"></a>
        <a href="map.php"><img src="images/map.png" alt="Map" class="nava"></a> <a href="#"><img src="images/profile.png" alt="Account" class="selected"></a>
    </nav>

    <h1>Authentification</h1>

    <form name="form" method="post" action="">
        <input type="text" name="INE" placeholder="Votre INE" /><br />
        <input type="password" name="password" placeholder="Mot de passe" /><br />
        <a href="Register.php">Créer votre Compte</a>
        <input type="submit" name="valider" class="btn btn-outline-warning" value="S'authentifier" />
    </form>

    <?php
    if (password_verify($_POST["password"], $user["Password"])) {

        echo " Vous etes bien connecté !";

        $_SESSION['email'] = $user["Email"];
        $_SESSION['ine'] = $user["INE"];
        $_SESSION['phone'] = $user["Phone"];
    }
    ?>


</body>

</html>