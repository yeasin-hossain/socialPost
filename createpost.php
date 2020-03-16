<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creste Post</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-purple-700">
  <?php require_once 'main.php'; ?>
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
        <li class="mr-1">
            <a class="bg-white inline-block py-2 px-4 text-gray-400 font-semibold" href="#">Single Post</a>
        </li>
        </ul>
    </nav>

  <h1 class="bg-teal-800 w-screen text-5xl text-center p-2 text-white">Post about your technology</h1>

  <div class="container mx-auto mt-5">
    <!-- // form action and method -->
    <form action="main.php" method="POST" class="w-full max-w-sm ">

      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
            Title
          </label>
        </div>
        <div class="md:w-2/3">
          <input name="title"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
            id="inline-username" type="text" value="<?php echo $title ?>" placeholder="Title please!">

        </div>
      </div>


      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
            Decription
          </label>
        </div>

        <div class="md:w-2/3">

          <!-- body input feild  -->

          <textarea name="body" cols="30" rows="10"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
            id="inline-username" placeholder="Writ your Story..."> <?php echo $body ?></textarea>
        </div>
      </div>

      <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">

          <!-- submit button  -->
          <?php 
            if($update == true):
          ?>
          <button type="submit" name="edit"
            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
            type="button">Update</button>
            <?php else: ?>

            <button type="submit" name="createPost"
            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
            type="button">POST</button>
            <?php endif ?>
        </div>
      </div>
    </form>


    <!-- <form action="main.php" method="POST">
    <input name="title" type="text">
    <textarea name="body" id="" cols="30" rows="10"></textarea>
    <button name="createPost" type="submit">post</button>
</form>
    </div> -->

</body>

</html>