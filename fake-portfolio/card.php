<div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
    <a href="<?php echo $r["link"] ?>" class="w-full block h-full">
        <img src="<?php echo $r["image"] ?>"
             class="max-h-40 w-full object-cover"/>
        <div class="bg-white dark:bg-gray-800 w-full p-4">
            <p class="text-indigo-500 text-md font-medium"></p>
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                <?php echo $r["title"] ?> </p>
            <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                <?php echo $r["description"] ?> </p>
        </div>
    </a>
</div>
