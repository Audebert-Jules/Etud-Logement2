<html lang="fr">
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Carte des logements</title>
    </head>
    <body>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv6xxF2w0un9TchEiWEuFD3YkWhP7uiLE&callback=initMap&v=weekly"
            defer></script>
        <script src="map.js"></script>
        <nav class="fixed-top sticky-top">
            <a href="index.php"><img src="images/maison.png" alt="Home" class="nava"></a> <a href="info.php"><img src="images/i.png" alt="Info"  class="nava"></a>
            <a href="#"><img src="images/map.png" alt="Map"  class="selected"></a> <a href="Login.php"><img src="images/profile.png" alt="Account"  class="nava"></a>
        </nav>

        <div>
            <h1 style="font-size: 40px; margin-top: 5px">Recherche Ville</h1>
        </div>

        <div>
            <form>
                <input type="text" id="search" name="search">
                <button type="submit">
                    <img src="images/loupe.png" height="32" width="32" alt="recherche">
                </button>
            </form>
        </div>
        <div id="map"></div>

        <div id="listing">
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
            <?php
            foreach ($data as $lodging){?>
                <div class="list" onclick="changeMarker(<?= $lodging["Longitude"] ?>, <?= $lodging["Latitude"] ?>)">
                <img src="<?= $lodging["Picture"] ?>" height="100" width="100" alt="studio"/>
                <h3><u>Studio <?= $lodging["Surface"] ?>m²</u></h3>
                <ul>
                    <li><?= $lodging["Rent"] ?>€/mois</li>
                    <li><?= $lodging["Street"] ?>, <?= $lodging["PostalCode"] ?>, <?= $lodging["City"] ?></li>
                </ul>
            </div>
        <?php }
        ?>
        </div>
    </body>
</html>