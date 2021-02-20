
<html>
<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title><?php include "data.php"; echo $user["name"] ?> - Portfolio</title>
    <?php

    require_once "header.php";

    ?>
</head>
<body>

<?php

require_once "header.php";

?>

<img alt="profil" src="<?php include "data.php"; echo $user["url"] ?>" class="mx-auto object-cover rounded-full h-96 w-96 "/>
<h1 class="font-sans text-center mt-3 text-6xl"><?php include "data.php"; echo $user["name"] ?></h1>
<h1 class="font-sans text-center mt-2 text-6xl"> - </h1>
<h1 class="font-sans text-center mt-2 text-4xl"><?php include "data.php"; echo $user["job"] ?></h1>

<h1 class="font-sans text-left mt-60 ml-6 mb-5 text-4xl text-center">Formations</h1>
<div class="sm:flex flex-wrap justify-center items-center text-center gap-8">

    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6  shadow-lg rounded-lg dark:bg-gray-800">
        <h3 class="text-2xl text-gray-500 font-semibold dark:text-white py-4">
            <?php include "data.php"; echo $formation["year"]; echo " - "; echo $formation["nameFormation"] ?>
        </h3>
        <h3 class="text-1xl text-gray-500 font-semibold dark:text-white py-4">
            <?php include "data.php"; echo $formation["school"]; ?>
        </h3>
        <p class="text-md  text-gray-500 dark:text-gray-300 py-4">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </p>
    </div></div>

<h1 class="font-sans text-left mt-60 mb-5 ml-6 text-4xl text-center">Passions</h1>
<div class="sm:flex flex-wrap justify-center items-center text-center gap-8">
    <?php
    foreach ($passions as $p) {
        include "passions.php";
    }
    ?>
</div>

<?php

require_once "footer.php";

?>

</body>
</html>
