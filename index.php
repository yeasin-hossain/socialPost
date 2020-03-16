<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-purple-700">
    
<div class="container mx-auto">
<nav>
        <ul class="flex border-b">
        <li class="-mb-px mr-1">
            <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold" href="allpost.php">All Post</a>
        </li>
        <li class="mr-1">
            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="index.php">Home</a>
        </li>
        <li class="mr-1">
            <a class="bg-white inline-block py-2 px-4 text-gray-400 font-semibold" href="allpost.php">all post</a>
        </li>
        </ul>
    </nav>

<div class="flex justify-center">

<form class="w-full max-w-sm mt-10">
  <div class="flex items-center border-b border-b-2 border-teal-500 py-2">

    <input class="appearance-none bg-transparent text-white font-medium border-none w-full  mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Your Techology!" aria-label="Full name">

    <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
      Search
    </button>

    <a href="createpost.php"
    class="flex-shrink-0 ml-2 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
    >New Post</a>


  </div>
</form>
</div>



<?php require_once 'allpost.php' ?>

</div>


</body>
</html>