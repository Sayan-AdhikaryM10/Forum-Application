<?php require "assets/dbconnect.php"; 

$id = $_GET['threadid'];
$sql = "SELECT * FROM `threads` WHERE thread_id = '$id'";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $id =$row['thread_id'];
                $title = $row['thread_title'];
                $desc = $row['thread_desc'];
                $thuser_id = $row['thread_user_id'];

                $sql2 = "SELECT Name FROM `users` WHERE srn = '$thuser_id'";
                $result2 = mysqli_query($con, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $postedby = $row2['Name'];

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
    <?php include "assets/header.php";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $comment = $_POST['comment'];
        $srn = $_POST['srn'];

        $sql = "INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`) VALUES ( ' $comment', '$id', '$srn')";
        $result = mysqli_query($con, $sql);
        if($result){
           echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Success!</strong> Your comment has been posted.
                </div>';
        }
    }


    
    ?>

    <div class="container my-3">
            <div class="jumbotron">
                <h1 class="display-4"><?php echo $title; ?></h1>
                    <p class="lead"><?php echo $desc; ?></p>
                    <hr class="my-2">
                    <p>Posted by: <b><?php echo $postedby; ?></b></p>
            </div>


            <div class="container my-3">
          <h2 class="my-3">Post a Comment</h2>
          <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
         echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">
                <div class="form-group">
                    <textarea name="comment" row="3" class="form-control"></textarea>
                    <input type="hidden" name="srn" value="'.$_SESSION["srn"].'">
                </div>
                <button type="submit" class="btn btn-primary">post</button>
          </form>
         </div>';
          } else {
            echo '<div class="jumbotron">
                <h1 class="display-4">You are not able to post a Comment</h1>
                    <p class="lead">If you want to post a Comment...Login First</p>
                    <hr class="my-2">
            </div>';
          }
        ?>





    </div>
    <div class="container my-4" id="footer">
      <h2 class="text-center">Your Comments</h2>
      <div class="container my-3">
<?php
    $sql = "SELECT * FROM `comments` WHERE thread_id = '$id'";
    $result = mysqli_query($con, $sql);
    $noresult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noresult = false;
                $comment = $row['comment_content'];
                $postedby = $row['comment_by'];

                $sql2 = "SELECT Name FROM `users` WHERE srn = '$postedby'";
                $result2 = mysqli_query($con, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $name = $row2['Name'];



                echo '<div class="media my-3">
                      <a class="d-flex" href="#">
                      <img src="img/user.png" height="55px" alt="image can not be displayed">
                      </a>
                      <div class="media-body my-0 ml-2">
                      <p class="font-weight-bold my-0">'.$name.'</p>
                      '.$comment.'
                      </div>
                    </div>';
            }
            if($noresult){
                echo '<div class="jumbotron my-3">
                        <h1 class="display-4">No comments Found</h1>
                            <p class="lead">Be the first person post a comment</p>
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