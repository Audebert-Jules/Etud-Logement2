<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Title</title>
    </head>
    <body>
        <nav class="fixed-top sticky-top">
            <a href="index.html"><img src="images/maison.png" alt="Home" class="nava"></a> <a href="info.html"><img src="images/i.png" alt="Info"  class="nava"></a>
            <a href="#"><img src="images/map.png" alt="Map"  class="selected"></a> <a href="account.html"><img src="images/profile.png" alt="Account"  class="nava"></a>
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
        $user = 'root';
        $password = '';
        $dbname = 'etudlogement';
        $conn = mysqli_connect($host, $user, $password, $dbname);

        $sql = "SELECT * FROM lodging";
        $result = mysqli_query($conn, $sql);

        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $json_data = json_encode($data);
        foreach ($data as $lodging){?>
            <div class="list">
                <img src="<?= $lodging["Photo"] ?>" height="100" width="100" alt="studio"/>
                <h3><u>Studio <?= $lodging["Surface"] ?>m²</u></h3>
                <ul>
                    <li><?= $lodging["Rent"] ?>€/mois</li>
                    <li><?= $lodging["Street"] ?>, <?= $lodging["PostalCode"] ?>, <?= $lodging["City"] ?></li>
                </ul>
            </div>
        <?php }

        ?>
        </div>
        <script src="map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv6xxF2w0un9TchEiWEuFD3YkWhP7uiLE&callback=initMap&v=weekly"
                defer></script>
    </body>
</html>