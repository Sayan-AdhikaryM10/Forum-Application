<?php require "assets/dbconnect.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Welcome to the Forum</title>
  </head>
  <body>
    <?php include "assets/header.php";?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" role="listbox">
            <img src="img/slider3.jpg" class="d-block w-100" height="400px" width="2400px" alt="Image error">
            </div>
            <div class="carousel-item">
            <img src="img/slider2.jpg" class="d-block w-100" height="400px" width="2400px" alt="Image error">
            </div>
            <div class="carousel-item">
            <img src="img/slider1.jpg" class="d-block w-100" height="400px" width="2400px" alt="Image error">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <div class="container my-3">
        <h2 class="text-center">Browse Categories</h2>
        <div class="row my-4">

        <?php
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $id =$row['category_id'];
                $catname = $row['category_name'];
                $catdesc = $row['category_description'];

                echo '<div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
                <img src="img/card-'.$id.'.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><a href="threadlist.php?catid='.$id.'" class="">'.$catname.'</a></h4>  
                    <p class="card-text">'.substr($catdesc, 0, 110).'</p>
                    <a href="threadlist.php?catid='.$id.'" class="btn btn-primary btn-lg">View Threads</a>
                </div>
            </div>
            </div>';
                
            }
            

            
        ?>
            
         </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <?php include "assets/footer.php";?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
    
  </body>
</html>