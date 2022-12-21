<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styleAccueil.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="JavaScriptAccueil.js"></script>
</head>
<body>
    <nav>
        <a href="#"><img src="images/maison.png" alt="Home" class="selected"></a> <a href="info.html"><img src="images/i.png" alt="Info"  class="nava"></a>
        <a href="map.html"><img src="images/map.png" alt="Map"  class="nava"></a> <a href="account.html"><img src="images/profile.png" alt="Account"  class="nava"></a>
    </nav>
    <br/>
    <div>
        <h1 style="font-size: 60px; margin-top: 20px"><b>Etud’Logement</b></h1>
    </div>
    <br/>
    <div>
        <h2 style="font-size: 40px; margin-top: 20px">Logement pour étudiant</h2>
    </div>
    <br/>
    <div>
        <p>Notre but est d’aider les étudiants à trouver plus facilement un logement, proche de leur etablissement scolaire. Tout en leur proposant des aides adaptées à leur situation.</p>
    </div>
    <br/>
    <div>
        <form>
            <input type="text" id="search" name="search">
            <button type="submit">
                <img src="images/loupe.png" height="32" width="32" alt="recherche">
            </button>
        </form>
    </div>
    <br/>
    <div>
        <p>Nos logements proche de la locisation : <br/> Paris</p>
    </div>
    <br/>
    <div id="listing"></div>
    <br/>


</body>
</html>