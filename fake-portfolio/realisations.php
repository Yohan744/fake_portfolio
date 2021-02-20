<html>
<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title><?php include "data.php"; echo $user["name"] ?> - Portfolio</title>
</head>
<body>

<?php

require_once "header.php";

?>

<h1 class="font-sans text-center mt-2 text-8xl">Mes réalisations</h1>

<div class="sm:flex flex-wrap justify-center items-center text-center gap-8 mt-40">
    <?php
    foreach ($realisations as $r) {
        include "card.php";
    }
    ?>
</div>

<?php

require_once "footer.php";

?>

</body>
</html>
