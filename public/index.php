<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask Games</title>
<!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <!-- bootstrap navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/project8/public/">Ask Games</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/project8/public/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Store</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Games
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action Games</a>
                    <a class="dropdown-item" href="#">Racing Games</a>
                    <a class="dropdown-item" href="#">Shooting Games</a>
                    <a class="dropdown-item" href="#">Brain Games</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Editors Choice</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#contacts" tabindex="-1" aria-disabled="true">contact</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>



<section id="firstSection">
 <!-- image Slider -->
 <nab id="navbar"></nab>

    <div class="slideshow-container">
    
    <div class="mySlides fade">
      <img class = "bgimg" src="img/cs.jpg" style="width:100%">
      <div class="text">Action Games</div>
    </div>
    
    <div class="mySlides fade">
      <img class = "bgimg" src="img/acreed.jpg" style="width:100%">
      <div class="text">Open World Games</div>
    </div>
    
    <div class="mySlides fade">
      <img class = "bgimg" src="img/uc4.jpg" style="width:100%">
      <div class="text">Adventure Games</div>
    </div>
    
    </div>
    <br>
    
     <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>


</section>

    <section id="secondSection">

<div class="daba">
    <div class="card" style="width: 18rem;">
        <img src="./img/akm1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, autem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, molestias.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="./img/akm2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, autem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, molestias.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="./img/akm3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, autem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, molestias.</p>
        </div>
      </div>
</div>

</section>

<section id="thirdSection">
    <h1 class="center">Our Sponsors</h1>
    <div id="sponsors">

    <div class="sponsor">
        <img class = "imagesSponsor" src="./img/eg.png" alt="">
    </div>
    <div class="sponsor">
        <img class = "imagesSponsor imagesSponsorrs" src="./img/rsr.png" alt="">
    </div>
    
    <div class="sponsor">
        <img class = "imagesSponsor" src="./img/pg.png" alt="">
    </div>
    
    <div class="sponsor">
        <img class = "imagesSponsor" src="./img/akm1.png" alt="">
    </div>
    <div class="sponsor">
        <img class = "imagesSponsor" src="./img/akm2.png" alt="">
    </div>
    <div class="sponsor">
        <img class = "imagesSponsor" src="./img/akm3.png" alt="">
    </div>
</div>

</section>

<section id="forthSection">

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contact_us` (`Name`, `Email`, `Subject`, `Date`) VALUES ('$name', '$email', '$desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    

?>




 
    <div class="container mt-5 mb-5" id = "contacts">
        <h1>Contact us for your concerns</h1>
            <form action="index.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
        
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
        
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea> 
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

</section>

<footer id="footer">
Copyright &copy;2020-2021 askgames.com | All Rights Reserved.

</footer>




<!-- bootstrap javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>