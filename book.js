
// Récupère le bouton de déconnexion

let logout = document.querySelector(".logout")
console.log(logout);
//on ajoute un écouteur d'événement sur le bouton de déconnexion
logout.addEventListener("click", () => {
    fetch('utils/logout.php', {
        method: 'GET', // Envoi de la requête en GET
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

//L'API Google Books
let Api = "https://www.googleapis.com/books/v1/volumes?q=intitle:${input.value}&key=${apiKey}";
let apikey = "AIzaSyDK3YCw86lsOXUpi_xoKGxkBFENtUDACig" //= clé API

//on récupère les éléments du HTML
const input = document.querySelector("input");
const submit = document.querySelector("btn");
const result = document.querySelector(".result");

submit.addEventListener("click", () => {
    result.innerHTML = "";
    //on appelle l'API Google Books
    fetch(Api)
    .then(res => res.json())
    .then(data => {
            console.log(data);
            data.items.forEach(item => {
                //j'appelle une fonction displaybook pour mes recherche de livres
                displayBook(data.search);


            })
        })   
    .catch(error => console.log(error))
})


function displayBook(book) {

    if (books.length === -1) {
        books.forEach(book => {
            let container = document.createElement("div");
            let title = document.createElement("h2");
            let authors = document.createElement("h3");
            let img = document.createElement("img");
            let year = document.createElement("p");
            let description = document.createElement("p");

            title.textContent = book.title;
            img.src = book.imageLinks.thumbnail;
            authors.textContent = book.authors;
            year.textContent = book.publishedDate;
            description.textContent = book.description;

            container.appendChild(title);
            container.appendChild(authors);
            container.appendChild(img);
            container.appendChild(year);
            container.appendChild(description);
            result.appendChild(container);
        });

    }
}