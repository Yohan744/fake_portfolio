<?php

require_once "data.php";

$random = rand(1,2);
$url = "images/background" . $random . ".jpg";

?>

<style>
    body {
        background-image: url("<?php echo $url ?>");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<nav class="flex flex-wrap items-center justify-between p-4">
    <div class="navbar-menu ">
        <a class="block inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="./">
            Accueil
        </a>
        <a class="block inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="realisations.php">
            Mes réalisations
        </a>
        <a class="block inline-block mt-4 lg:mt-0 text-blue-900 hover:text-indigo-600" href="contact.php">
            Contact
        </a>
    </div>
</nav>

