let Api ="https://www.googleapis.com/books/v1/volumes?q=intitle:${input.value}&key=${apiKey}";
let apikey="AIzaSyDK3YCw86lsOXUpi_xoKGxkBFENtUDACig"

console.log("Api",Api);

let logout = document.querySelector(".logout")

logout.addEventListener("click", () => {
    fetch('utils/logout.php', {
        method: 'GET', // ou 'POST' si tu préfères
        credentials: 'same-origin', // Assure que la session est envoyée avec la requête
    })
    .then(response => {
        if (response.ok) {
            window.location.href = "login.php"; // Redirige vers la page d'accueil après la déconnexion
        }
    })
    .catch(error => {
        console.error('Erreur de déconnexion:', error);
    });
});