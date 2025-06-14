<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Search Results for - </title>
  </head>
  <body>
    <?php require "header.php";?>
    <style>
        #main{
            min-height: 87vh;
        }
    </style>

<div class="container my-3" id="main">
        <h1 class="my-3 py-2">Search results for <em>"<?php  echo $_GET['search'] ?>"</em></h1>
    
<?php

$query = $_GET['search'];
$noresult = true;
$sql ="SELECT * FROM `threads` WHERE MATCH (thread_title , thread_desc) against ('$query')";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
    $id = $row['thread_id'];
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];
    $noresult = false;



    echo   '<div class="container my-3">
                <h1 class="my-3"><a href="/Forum/threads.php?threadid='.$id.'" class="text-dark">'.$title.'</a></h1>
                <p>'.$desc.'</p>
            </div>';
   
}
if($noresult){
   echo '<div class="jumbotron my-3">
          <h1 class="display-4">No comments Found</h1>
            <p class="lead">Be the first person post a comment</p>
            <hr class="my-2">
         </div>' ;
}

?>





</div>




    <?php require "footer.php";?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>


