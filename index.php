<?php

include_once 'partials/header.php';

?>

<?php if (!empty($_SESSION["username"]) && isset($_SESSION["username"])) : ?>

<h1 class="text-center">Bienvenue <?= $_SESSION["username"] ?> # </h1>
<h2 class="text-center">Votre email est <?= $_SESSION["email"] ?></h2>

<?php else : ?>
  <img src="https://thebestmods.com/wp-content/uploads/2023/06/Underground_Library_in_Minecraft-transformed.jpeg"alt="" class="top-0 bg-cover mt-100 fixed w-full h-full -z-50">


<h1 class="text-center size-100">Bienvenue Sur Read-Action</h1>

<?php endif ?>

<?php

  include "partials/footer.php";

?>










































