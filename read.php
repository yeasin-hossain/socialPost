<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-pink-600">
<?php require_once 'main.php'; ?>
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
            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="createpost.php">New Post</a>
        </li>
        
        </ul>
    </nav>

    <h1 
        class="text-6xl text-center text-grey-500 font-semibold"
    ><?php echo $title ?></h1>
    <p
        class="text-2xl text-left text-grey-500 font-semibold mt-5"
    ><?php echo $body ?></p>
    </div>
    

</body>
</html>