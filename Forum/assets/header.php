<?php 
session_start();
require "dbconnect.php";
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $login = true;
}else {
    $login = false;
}
    
 echo       '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/Forum">Forum</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Forum/index.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Top 5 Catagories</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">';


                    $sql = "SELECT * FROM `categories` LIMIT 5";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)){
                        $cat = $row['category_name'];
                        $catid = $row['category_id'];
                        echo '<a class="dropdown-item bg-dark text-light" href="threadlist.php?catid='.$catid.'">'.$cat.'</a>';
                    }
                    
                   echo '</div>
                 </li> 

                    <li class="nav-item active">
                        <a class="nav-link" href="/Forum/assets/about.php">About Us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Forum/assets/contact.php">Contact Us<span class="sr-only">(current)</span></a>
                    </li>
                
                
                </ul>
                <form class="form-inline my-2 my-lg-0" action="/Forum/assets/search.php" method="get">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>';

if(!$login){
echo   '<button class="btn btn-outline-light my-2 my-sm-0 ml-2" type="submit" data-toggle="modal" data-target="#loginModal">Login</button>
        <button class="btn btn-outline-light my-2 my-sm-0 ml-2" type="submit" data-toggle="modal" data-target="#signupModal">Signup</button>';
                       
}
if($login){
    echo' <em class="text-light ml-2"> welcome: '.$_SESSION['email'] .'</em>
    <a href="/Forum/assets/logout.php" class="btn btn-outline-light my-2 my-sm-0 ml-2" type="submit">Logout</a>';
}
     echo  '</div>
    </nav>';
            require "login.php";
            require "signup.php";

            if(isset($_GET['Emailalreadyexists']) && $_GET['Emailalreadyexists'] == "true"){
                echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                      <strong>Error!</strong> Email already exists.
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>';
            }
            if(isset($_GET['registersuccessfull']) && $_GET['registersuccessfull'] == "true"){
                echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                      <strong>Successfully Registered!</strong> Now you can login.
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>';
            }
            if(isset($_GET['Passwordnotmatch']) && $_GET['Passwordnotmatch'] == "true"){
                echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                      <strong>Error!</strong> Password not match.
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>';
            }
            if(isset($_GET['loginsuccessfull']) && $_GET['loginsuccessfull'] == "true"){
                echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>login Successfully!</strong> welcome to the forum.
                     </div>';
            }
            if(isset($_GET['Invalidcredentials']) && $_GET['Invalidcredentials'] == "true"){
                echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Error!</strong> Invalid credentials.check email and password.
                     </div>';
            }
            if(isset($_GET['logout']) && $_GET['logout'] == "true"){
                echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>logout Successfully!</strong>
                     </div>';
            }
        

            ?>

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