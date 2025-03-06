<?php
session_start(); // Démarre la session
session_unset(); // Supprime toutes les variables de session
session_destroy(); // Détruit la session
header('Location: ../book.php'); // Redirige l'utilisateur après la déconnexion
exit;
 ?>