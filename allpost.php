<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL POST</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-purple-700">

<div class="container mx-auto flex flex-wrap ">
<!-- <nav>
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
    </nav> -->
    
        <?php 
        $mysqli = new mysqli('localhost', 'root', '', 'post')or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM content")or die($mysqli->error);
    
        ?>

            <?php 
            while($row = $result ->fetch_assoc()): ?>
        <section class=" mt-10 m-5">
            <div class="h-auto border rounded-md w-64 bg-green-800 p-3">
                       <!-- heading read section -->

            <h1 class="text-2xl font-medium "><?php echo $row['title'] ?></h1>


              <!-- Decription read section -->
            <p class="text-white mt-2"><?php echo  substr($row ['body'],0,200) ?></p>
            
              <!-- See more button section -->
              <a href="main.php?delete=<?php echo $row['id']; ?>" 
            class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-full uppercase float-right"
            >Delete</a>
            

            <a href="createpost.php?edit=<?php echo $row['id']; ?>" 
            class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-full uppercase float-right"
            >Edit</a>
            
            <a href="read.php?read=<?php echo $row['id']; ?>" 
            class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-full uppercase float-right"
            >Read</a>
            
        </div>

    </section>

    <?php endwhile ?>
        
  
</div>


</body>
</html>