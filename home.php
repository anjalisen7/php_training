<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php assignment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel ="stylesheet" href ="home.css">
</head>
<body>
    
<nav class ="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand"  id ="logo"href="#">FRIENDSTER</a>
      </div>
      <ul class="nav navbar-nav" id ="navli">
        <li class="home"><a href="#">Home</a></li>
        <li><a href="#" id="about">ABOUT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/php_training/signup.php" id ="up"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>
    <!-------------------------------------------------navbar end--------------------------------------------------------------->
    <div class="container-fluid">
        <h2>Carousel Example</h2>  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="" class="active"></li>
            <li data-target="#myCarousel" data-slide-to=""></li>
            <li data-target="#myCarousel" data-slide-to=""></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="night (1).jpg" alt="Los Angeles" class="img-thumbnail" style="width:100%; height:90vh;">
            </div>
      
            <div class="item" data-interval="1000">
              <img src="night (6).jpg"  class="img-thumbnail"alt="Chicago" style="width:100%; height:90vh;">
            </div>
          
            <div class="item">
              <img src="lappy2.jpg" alt="New york" class="img-thumbnail" style="width:100%;height:90vh;">
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div><br>
     <!----------------------------slider end---------------------------------->
      
    <div class ="container-fluid mt-3" style="height:10vh; background-color:grey; color:black; font-size:3vh;">
     
    <div class="marquee">
            <marquee  dirextion="left" behavior="alternate" scrollamount="20">
           <marquee scrollamount="20" style ="margin-bottom:">COVID-19: from payments to resources-we want to help</marquee>
          </marquee>
           </div>    
    </div><br><br><br><br>


     <!----------------------------------------------------------------->
     <div class="container-fluid py-5">
       <div class="row mt-4">
         <?php
           $servername ="localhost";
           $username="root";
           $DbPassword ="";
           $dbname ="anjali";
           
           $conn = mysqli_connect($servername, $username,$DbPassword,$dbname);
          $sql = "SELECT * FROM `cards`";
          $result = mysqli_query($conn,$sql);
          $check =mysqli_num_rows($result) > 0;
           if($check){
               while($row = mysqli_fetch_array($result))
                {
                 ?>
               <div class="col-md-4">
               <div class="card-deck">
        <div class="card">
        <div class ="card-body">
          <img src = "<?php  echo $row['pic']; ?>"  height="300vh"; width="280vw"; class ="img-top" alt ="card">
          <h3><?php echo $row['post title'] ?></h3>
          <p><?php echo $row['description'] ?></p>
          <p><?php echo $row['author'] ?></p>
          <p><?php echo $row['date'] ?></p>
        </div>    
        </div>
        <div>
        </div>
      </div>
      </div>
      <?php
     }
    }
 else{
      echo "not found";
    } 
  ?>
      </div>
  </div>
   <!----------------------------------------------card-end---------------------------------------->   
    <div class="container-fluid">
  <div class="jumbotron">
    <h1>FRIENDSTER</h1>  
    <b> <ul style="list-style-type: none;">
            <li>ABOUT FRIENDSTER</li>
            <li>KNOW MORE</li>
            <li>Affiliations</li>
            <li>CONTACT US</li>
          </ul></b>
    </div>
  </div>
  </div>
</body>
</html>