<?php 




try {
    
    $username = "root";
    $password = "";
    $dbname = "tp-librairie";

    $dsn = "mysql:dbname=tp-librairie;host=localhost";
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $pdo = new PDO($dsn, $username, $password, $options);


echo "Connexion réussie";
} catch (PDOException $error) {
    die("Il y a une erreur : " . $error->getMessage());
}




?>