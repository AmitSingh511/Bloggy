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

<body class="bg-gray-300">
        <div class="flex justify-center items-center bg-gray-400 h-10">
            <nav class="flex justify-between items-center w-full h-full">
                <h1 class="font-logo font-extrabold text-black ml-3  text-2xl">Bloggy</h1>
                <ul class="flex space-x-5 text-white font-normal text-lg mx-10 h-full items-center">
                    <li
                        class=" inline-block transform transition-transform duration-300 hover:text-gray-700 hover:scale-105">
                        <a href="#">Signup</a></li>
                    <li
                        class="inline-block transform transition-transform duration-300 hover:text-gray-700 hover:scale-105">
                        <a href="home.php">Login</a></li>
                </ul>
            </nav>
        </div>
        <div class=" mt-20 h-full 300 group w-min">
            <p class="text-9xl text-gray-500 font-write ml-20 font-bold group-hover:text-gray-700">Post it</p>
            <p class="text-5xl text-black  font-write ml-100 mt-10 group-hover:text-gray-500">Now!</p>-
        </div>
        <div></div>
</body>

</html>