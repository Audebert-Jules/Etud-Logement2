
    <?php
            function connectbase(){
                $servername = 'localhost';
                $username = 'root';
                $password = 'c6$H7zy7H+)G';
                $base = 'etudlogement';
                
                //On établit la connexion
                $conn = mysqli_connect($servername, $username, $password, $base);
                
                //On vérifie la connexion
                if(!$conn){
                    die('Erreur : ' .mysqli_connect_error());
                    return false;
                }
                echo 'Connexion réussie';
                return $conn;
            }
    ?>