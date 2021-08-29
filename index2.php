<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ayush_singh_chillify";


    $conn = mysqli_connect($server , $username , $password ,  $dbname);

    if(isset($_POST['submit'])) {
        if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

            $first_name = $_POST['first_name'] ;
            $last_name = $_POST['last_name'] ;
            $email = $_POST['email'] ;
            $password = $_POST['password'] ;

            $query = "insert into ayush_singh_chillify_user_tbl(first_name,last_name,email,password) values('$first_name' , '$last_name' , '$email' , '$password')" ;

            $run = mysqli_query($conn ,  $query) or die(mysqli_error());

            if($run) {
                header("Refresh:0 ; url=http://localhost/CHILLIFY/index2.php");
            }
            else {
                echo "form not submitted";
            }

        }
        else {
            echo "All fields required";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>
      <link rel="icon" href="images/favicon.ico" >
      <header>
            <nav>
              <ul>
                    <br>
                <li><a href="#">Featured</a></li>
                <li><a href="#"> Genres & Moods</a></li>
                <li><a href="#">New Releases</a></li>
                <li><a href="#">Discover</a></li>
                <li><a href="index.php">Logout</a></li>
                <script src="https://use.fontawesome.com/f449517365.js"></script>
                <link rel="stylesheet" href="index2.css">
              </ul>
            </nav>
      </header>
</head>
<body>
<br>
      <span style="text-align:center">
            <h4>Hello, Love</h4>
            <h1>Genre and Moods!</h1>
      </span>
      <div class="music christian">
            <i class="fa fa-book fa-4x" aria-hidden="true"></i>
            <p class="c">Christian</p>    
      </div>
      <div class="music pop">
            <i class="fa fa-fire fa-4x" aria-hidden="true"></i>
            <p class="c">Pop</p>
      </div>
      <div class="music mood">
            <i class="fa fa-meh-o fa-4x" aria-hidden="true"></i>
            <p class="c">Mood</p>
      </div>
      <div class="music hiphop">
            <i class="fa fa-link fa-4x" aria-hidden="true"></i>
            <p class="c">Hip Hop</p>
      </div>
      <div class="music chill">
            <p class="c">Chill</p>
            <i class="fa fa-snowflake-o fa-4x" aria-hidden="true"></i>
      </div>
      <div class="music latino">
            <i class="fa fa-volume-up fa-4x" aria-hidden="true"></i>
            <p class="c">Latino</p>
      </div>
      <div class="music electronic">
            <i class="fa fa-diamond fa-4x" aria-hidden="true"></i>
            <p class="c"> Electronic x Dance</p>
      </div>
      <div class="music country">
            <i class="fa fa-star fa-4x" aria-hidden="true"></i>
            <p class="c"> Country</p>
      </div>
      <div class="music rock">
            <i class="fa fa-bolt fa-4x" aria-hidden="true"></i>
            <p class="c">Rock</p>
      </div>
      <div class="music focus">
            <i class="fa fa-desktop fa-4x" aria-hidden="true"></i>
            <p class="c">Focus</p>
      </div>
      <div class="music randb">
            <i class="fa fa-music fa-4x" aria-hidden="true"></i>
            <p class="c"> RnB</p>
      </div>
      <div class="music party">
            <i class="fa fa-headphones fa-4x" aria-hidden="true"></i>
            <p class="c"> Party</p>
      </div>
      <footer>
            <p>Created By: Ayush Singh</p>
      </footer>
 
</body>
</html>