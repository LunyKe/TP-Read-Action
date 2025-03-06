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
<body>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 h-screen">
    <div class="flex-col justify-evenly border bg-white w-96 mx-auto p-8 rounded-lg shadow-lg">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm flex justify-sa flex-col">
            <img class="mx-auto h-10 w-auto" src="https://th.bing.com/th/id/OIP.yIrm_GQ-TJ1Ta9S_oPyS4AAAAA?rs=1&pid=ImgDetMain" alt="Your Company">
        <input type="text" name="title" id="title" placeholder="Title" class="md-10pxblock w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
        <button class="bg-amber-950 text-white text-sm py-2 px-4 rounded hover:bg-zinc-950">
  Search
</button>

    
</body>
</html>