
// Récupère le bouton de déconnexion

let logout = document.querySelector(".logout")
console.log(logout);
//on ajoute un écouteur d'événement sur le bouton de déconnexion
if (logout) {
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
}

//on récupère les éléments du HTML
let input = document.querySelector(".searchInput");
let submit = document.querySelector(".btn");
let result = document.querySelector(".results");
//L'API Google Books
let apikey = "AIzaSyDTGZKooGZ9XLV4CKC24j0ETrlmjcNVwkk" //= clé API
let Api = `https://www.googleapis.com/books/v1/volumes?q=intitle:${input.value}&key=${apikey}`;



submit.addEventListener("click", () => {
    let inputValue = input.value;
    result.innerHTML = "";
    //on appelle l'API Google Books
    console.log(Api);
    fetch(`https://www.googleapis.com/books/v1/volumes?q=intitle:${inputValue}&key=${apikey}`)
        .then(res => res.json())
        .then(data => {
            console.log(data);
            data.items.forEach(item => {
                //j'appelle une fonction displaybook pour mes recherche de livres
                displayBook(item);


            })
        })
        .catch(error => console.log(error))
})


function displayBook(book) {


    let container = document.createElement("div");
    container.classList.add("flex", "flex-col", "items-center", "justify-center", "bg-gray-100", "rounded-lg", "p-4", "m-4", "shadow-lg","w-96");
    let title = document.createElement("h2");
    let authors = document.createElement("h3");
    let img = document.createElement("img");
    let year = document.createElement("p");
    let description = document.createElement("p");

    title.textContent = book.volumeInfo.title;
    img.src = book.volumeInfo.imageLinks.thumbnail;
    authors.textContent = book.volumeInfo.authors;
    year.textContent = book.volumeInfo.publishedDate;
    

   container.append(title, authors, img, year);
    result.appendChild(container);


}