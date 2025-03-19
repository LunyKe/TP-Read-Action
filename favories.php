<?php
include "./partials/header.php";

?>


<img src="https://thebestmods.com/wp-content/uploads/2023/06/Underground_Library_in_Minecraft-transformed.jpeg"alt="" class="top-0 bg-cover mt-100 fixed w-full h-full -z-50">


<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'nom_utilisateur', 'mot_de_passe', 'nom_base');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['user_id'];
    $bookId = $_POST['book_id'];

    $sql = "INSERT INTO favorites (user_id, book_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $userId, $bookId);

    if ($stmt->execute()) {
        echo "Livre ajouté aux favoris !";
    } else {
        echo "Erreur : " . $stmt->error;
    }
}
?>
































<?php

include "./partials/footer.php";

?>