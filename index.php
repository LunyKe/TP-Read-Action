<?php

// index.html sert de routeur

session_start();

// Vérifier si $_SESSION est vide
if (empty($_SESSION)) {
    // Si la session est vide, rediriger vers login.php
    header("Location: ./login.php");
    exit();
} else {
    // Si on est connecté, rediriger vers library.php
    header("Location: ./librairie.php");
    exit();
}
?>