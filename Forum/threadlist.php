<?php require "assets/dbconnect.php"; 

$id = $_GET['catid'];
$sql = "SELECT * FROM `categories` WHERE category_id = '$id'";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $id =$row['category_id'];
                $catname = $row['category_name'];
                $catdesc = $row['category_description'];
            }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
      #footer{
        min-height: 500px;
      }
    </style>

    <title>Welcome to the Forum</title>
  </head>
  <body>
    <?php include "assets/header.php";?>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $srn = $_POST['srn'];

        $sql = "INSERT INTO `threads` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`) VALUES ( '$title', '$desc', '$id', '$srn')";
        $result = mysqli_query($con, $sql);
        if($result){
           echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Success!</strong> Your Thread has been inserted. Wait for community to respond.
                </div>';
        }
    }

    
    
    ?>

    <div class="container my-3">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to My thread of <?php echo $catname; ?></h1>
                    <p class="lead"><?php echo $catdesc; ?></p>
                    <hr class="my-2">
                    <p>If you want to know more about thread , click on this button</p>
                <a class="btn btn-primary btn-lg" href="index.php" role="button">More Info</a>
            </div>
         </div>


         <div class="container my-3">
          <h2 class="my-3">Start a Discussion</h2>
          <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo '<form action=" '.$_SERVER["REQUEST_URI"].'" method="post">
                <div class="form-group">
                    <label for="">problem subject</label>
                    <input type="text" class="form-control" name="title" id="" aria-describedby="HelpId">
                    <input type="hidden" name="srn" value="'.$_SESSION["srn"].'">
                    <small>Write a short and crsip subject</small>
                </div>
                <div class="form-group">
                    <label for="">Your cencern</label>
                    <textarea name="desc" row="3" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">post</button>
          </form>';

          } else {
            echo '<div class="jumbotron">
                <h1 class="display-4">You are not able to start a Session</h1>
                    <p class="lead">If you want to start a Session...Login First</p>
                    <hr class="my-2">
            </div>';
          }
          
          ?>
         </div>



    <div class="container my-4" id="footer">
      <h2 class="text-center">Your Queries</h2>
      <div class="container-my-3">

<?php
    $sql = "SELECT * FROM `threads` WHERE thread_cat_id = '$id'";
    $result = mysqli_query($con, $sql);
    $noresult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noresult = false;
                $thid =$row['thread_id'];
                $thtitle = $row['thread_title'];
                $thdesc = $row['thread_desc'];
                $thuserid = $row['thread_user_id'];

                $sql2 = "SELECT Name FROM `users` WHERE srn = '$thuserid'";
                $result2 = mysqli_query($con, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $name = $row2['Name'];

                echo '<div class="media my-3">
                      <img src="img/user.png" height="55px"class="mr-3" alt="image can not be displayed">
                      <div class="media-body ml-2">
                        <h5 class="mt-0"><a class="text-dark" href="threads.php?threadid='.$thid.'">'.$thtitle.'</a></h5>
                        <p>'.$thdesc.'</p>
                      </div>
                      Asked by: <p class="font-weight-bold">'.$name.'</p>
                    </div>';
            }
            if($noresult){
                echo '<div class="jumbotron my-3">
                        <h1 class="display-4">No Threads Found</h1>
                            <p class="lead">Be the first person and ask the question</p>
                            <hr class="my-2">
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