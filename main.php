<?php 
// session_start();
$id = 0;
$update = false;
$title = "";
$body = "";

$mysqli = new mysqli( 'localhost', 'root', '', 'post')or die(mysqli_error($mysqli));

if(isset($_POST['createPost'])){

    $title = $_POST['title'];
    $body = $_POST['body'];

    if(!empty($title)){
        $mysqli->query("INSERT INTO content(title,body) VALUES('$title', '$body')")or die($mysqli->error);
        header("location: singlepost.php");
    }
    // header("location: createpost.php");
    
}

//del section

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM content WHERE id=$id")or die($mysqli->error);
    header("location: index.php");
}

//edit
if(isset($_GET['edit'])){
    
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM content WHERE  id=$id")or die($mysqli->error);

    if(!empty($result)){
        $row = $result->fetch_array();
        $title = $row['title'];
        $body = $row['body'];
    }
}


?>