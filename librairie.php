<?php

include_once 'partials/header.php';

?>

<?php if (!empty($_SESSION["username"]) && isset($_SESSION["username"])): ?>

  <h1 class="text-center">Bienvenue <?= $_SESSION["username"] ?> # </h1>
  <h2 class="text-center">Votre email est <?= $_SESSION["email"] ?></h2>

<?php else: ?>
  <img src="https://thebestmods.com/wp-content/uploads/2023/06/Underground_Library_in_Minecraft-transformed.jpeg" alt=""
    class="top-0 bg-cover mt-100 fixed w-full h-full -z-50">

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 ">
    <div
      class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 text-amber-950 mx-auto flex-col border bg-white w-96 mx-auto p-8 rounded-lg shadow-lg ">
      <?php if (!empty($_SESSION["username"]) && isset($_SESSION["username"])): ?>

        <h1 class="text-center">Bienvenue <?= $_SESSION["username"] ?> sur mon eShop en PHP ! </h1>
        <h2 class="text-center">Votre email est <?= $_SESSION["email"] ?></h2>
      <?php else: ?>

        <h1 class="text-center">Bienvenue, veuillez vous login !</h1>
      <?php endif; ?>

    <?php endif; ?>
  </div>
</div>

<?php

include "partials/footer.php";

?>