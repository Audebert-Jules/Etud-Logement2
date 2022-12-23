<!doctype html>
<html lang="en">

<head>
    <!-- Cookie Consent by TermsFeed https://www.termsfeed.com/ -->
    <script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.0.0/cookie-consent.js"
        charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({ "notice_banner_type": "simple", "consent_type": "express", "palette": "light", "language": "fr", "page_load_consent_levels": ["strictly-necessary"], "notice_banner_reject_button_hide": false, "preferences_center_close_button_hide": false, "page_refresh_confirmation_buttons": false, "website_name": "etud'logement" });
        });
    </script>

    <!-- googleAnalytics -->
    <script type="text/plain" cookie-consent="tracking" async src="https://www.googletagmanager.com/gtag/js?id=G-WN2K5JW9PM%22%3E</script>
        <script type=" text/plain" cookie-consent="tracking">
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-WN2K5JW9PM');
        </script>
    <!-- end of googleAnalytics-->

    <noscript>Free cookie consent management tool by <a href="https://www.termsfeed.com/" rel="nofollow noopener">TermsFeed Policy Generator</a></noscript>
    <!-- End Cookie Consent by TermsFeed https://www.termsfeed.com/ -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styleAccueil.css">
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceuil</title>
</head>

<body>
    <nav>
        <a href="#"><img src="images/maison.png" alt="Home" class="selected"></a>
        <a href="info.php"><img src="images/i.png" alt="Info" class="nava"></a>
        <a href="map.php"><img src="images/map.png" alt="Map" class="nava"></a>
        <a href="Login.php"><img src="images/profile.png" alt="Account" class="nava"></a>
    </nav>
    <br />
    <div>
        <h1 style="font-size: 60px; margin-top: 20px"><b>Etud’Logement</b></h1>
    </div>
    <br />
    <div class="entete">
        <h2 style="font-size: 40px; margin-top: 20px">Logement pour étudiant</h2>
        <br />
        <p>Notre but est d’aider les étudiants à trouver plus facilement un logement proche de leur établissement scolaire. Tout en leur proposant des aides adaptées à leur situation.</p>
    </div>
    <br />
    <div>
        <form>
            <input type="text" id="search" height="100" width="100">
            <a href="map.php"><img src="images/loupe.png" style="margin-left: 20px;" height="32" width="32"
                    alt="recherche"></a>
        </form>
    </div>
    <br />
    <div>
        <p>Nos logements proches de la localisation : <br /> Paris</p>
    </div>
    <br />
    <?php
    $host = 'localhost';
    $user = 'Test';
    $password = 'Y(2g7{S?pPm4';
    $dbname = 'etudlogement';

    $conn = mysqli_connect($host, $user, $password, $dbname);
    $sql = "SELECT * FROM Lodging";
    $result = mysqli_query($conn, $sql);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $json_data = json_encode($data); ?>

    <script>window.onload = function () { generateMarkers(<?= $json_data ?>) }</script>
    <div class="container1">
        <?php
        foreach ($data as $lodging) { ?>
        <div class="card1">
            <div class="list2" style="margin-top: 20px;"
                onclick="changeMarker(<?= $lodging["Longitude"] ?>, <?= $lodging["Latitude"] ?>)">
                <img src="<?= $lodging["Picture"] ?>" height="100" width="100" style="margin: auto;" alt="studio" />
                <h3><u>Studio <?= $lodging["Surface"] ?>m²</u></h3>
                <ul>
                    <li><?= $lodging["Rent"] ?>€/mois</li>
                    <li><?= $lodging["Street"] ?>, <?= $lodging["PostalCode"] ?>, <?= $lodging["City"] ?></li>
                </ul>
            </div>
        </div>
        <?php }
        ?>
    </div>
    <br />
    <div>
        <p>Si vous avez une maison ou un appartement à louer, vous pouvez nous contacter via un mail pour qu’on puisse voir ensemble pour tout document nécessaire à votre demande. Si vous avez besoin de quelques informations complémentaires nous appeler. etudlogment@gmail.com 01-23-45-67-89</p>
    </div>
    <br />
    <br />
    <div class="formulaire">Besoin d'aide?</div>
    <br />
    <div>
        <form action="index.php" method="post">
            <p>

                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" style="width:200px;">
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="firstname" style="width:200px;">
                <br>
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" style="width:300px;">
                <br>
                <label for="subject">Objet :</label>
                <input type="text" id="subject" name="subject" style="width:300px;">
                <br>
                <label for="message">Message :</label>
                <textarea id="message" name="message" style="height:200px; width:400px;"></textarea>
                <br>
                <input type="submit" value="Envoyer" style="margin-top: 20px;">
            </p>
        </form>
    </div>
    <?php

    if (!empty($_POST)) {
        // Récupération des données du formulaire
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $message = $_POST['message'];

        // En-têtes de l'email
        $headers = 'Etud-Logement' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: ' . $firstname . ' ' . $lastname . ' <' . $email . '>' . "\r\n";

        // Envoi de l'email
        mail('remoussin.arthur78@gmail.com', $subject, $message, $headers);

        // Redirection vers la page de confirmation
        header('Location: index.php');
    }
    ?>
</body>

</html>