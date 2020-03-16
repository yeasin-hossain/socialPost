<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">New Post</a>
        </li>
        <li class="mr-1">
            <a class="bg-white inline-block py-2 px-4 text-gray-400 font-semibold" href="#">Single Post</a>
        </li>
        </ul>
    </nav>
    <?php 
        $mysqli = new mysqli('localhost', 'root', '', 'post')or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM content")or die($mysqli->error);
    
    ?>

    <?php 
            while($row = $result ->fetch_assoc()): ?>

        <div class="bg-teal-400 ">



            <h1 class=" text-6xl pl-5"><?php echo $row['title'] ?></h1>

            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-full uppercase ml-2 float-right">EDIT</button>
            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-full uppercase  float-right">Delet</button>
            <p class="pl-5 mt-5"><?php echo $row ['body'] ?></p>
           <?php endwhile ?>
        </div>
    </div>
</body>
</html>