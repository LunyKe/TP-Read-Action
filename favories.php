<?php
include "./partials/header.php";

?>


<img src="https://thebestmods.com/wp-content/uploads/2023/06/Underground_Library_in_Minecraft-transformed.jpeg"alt="" class="top-0 bg-cover mt-100 fixed w-full h-full -z-50">


<?php
// Ajouter un livre aux favoris

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $userId = $_POST['user_id'];
    $bookId = $_POST['book_id'];

    $sql = "INSERT INTO favorites (id,user_id, book_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $userId, $bookId);
    

    $sql= "U";

    if ($stmt->execute()) {
        echo "ajouté aux favoris!";
    } else {
        echo "Erreur : " . $stmt->error;
    }
}

// Récupérer les favoris de l'utilisateur

$userId = $_GET['user_id'];

$sql = "SELECT books.title FROM favorites 
        JOIN books ON favorites.book_id = books.id 
        WHERE favorites.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);

$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row['title'] . "</p>";
}


// Supprimer un favori

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $favoriteId = $_POST['favorite_id'];

    $sql = "DELETE FROM favorites WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $favoriteId);

    if ($stmt->execute()) {
        echo "Favori supprimé !";
    } else {
        echo "Erreur : " . $stmt->error;
    }
}




?>



































<?php

include "./partials/footer.php";

?>