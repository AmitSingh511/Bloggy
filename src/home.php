<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <title>Bloggy</title>
</head>

<body class="bg-textcolor">
        <div class="flex  bg-gray-400 h-10">
            <nav class="flex justify-between items-center w-full h-full">
                <h1 class="font-logo font-extrabold text-black ml-3  text-2xl">Bloggy</h1>
                <ul class="flex space-x-5 text-white font-normal text-lg mx-10 h-full items-center">
                    <li class=" inline-block transform transition-transform duration-300 hover:text-gray-700 hover:scale-105"><a href="home.php">Home</a></li>
                    <li class="inline-block transform transition-transform duration-300 hover:text-gray-700 hover:scale-105"> <a href="create.php">Create</a></li>
                    <li class="inline-block transform transition-transform duration-300 hover:text-gray-700 hover:scale-105"><a href="#">View</a></li>
                    <li class="inline-block transform transition-transform duration-300 hover:text-gray-700 hover:scale-105"><a href="#">About</a></li>
                    <li class="inline-block transform transition-transform duration-300 hover:text-gray-700 hover:scale-105"><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
</body>

</html>