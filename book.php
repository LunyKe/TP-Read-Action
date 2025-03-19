<?php
include "./partials/header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Book</title>
    <script defer scr="book.js"></script>

</head>

<body class="relative ">
<img src="https://thebestmods.com/wp-content/uploads/2023/06/Underground_Library_in_Minecraft-transformed.jpeg"alt="" class="top-0 bg-cover mt-100 fixed w-full h-full -z-50">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 h-screen">
        <div class=" flex justify-between flex-row border bg-white w-96 mx-auto p-8 rounded-lg shadow-lg">

            <div class="sm:mx-auto sm:w-full sm:max-w-sm flex justify-sa flex-col gap-y-4">
                <img class="mx-auto h-10 w-auto"
                    src="https://th.bing.com/th/id/OIP.yIrm_GQ-TJ1Ta9S_oPyS4AAAAA?rs=1&pid=ImgDetMain"
                    alt="Your Company">

                <h2 class="mt-3 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Search for your book</h2>
                <input type="text" name="search" id="search" placeholder="search"
                    class="w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border value searchInput">
                <button class="bg-amber-950 text-white text-sm py-2 px-4 rounded hover:bg-zinc-950 btn">
                    Search
                </button>
                <button class="bg-amber-950 text-white text-sm py-2 px-3 rounded hover:bg-zinc-950 favBtn
                mx-auto">Favoris</button>




            </div>

        </div>

    </div>
    <div
        class="results w-full flex flex-col justify-center items-center grid grid-cols-3 gap-4 justify-center items-center w-96 mx-auto p-8 rounded-lg shadow-lg">

    </div>


    <?php
    include "./partials/footer.php";
    ?>