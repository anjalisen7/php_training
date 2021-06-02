 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="index.css">
 </head>
 <body>
            
    <?php 
  
    $mail = $_GET['fmail'];
    $password=$_GET['pass'];
    if(!empty($mail) && !empty($password)){
        echo "<h1>welcome to our site</h1>"."<br>";
        echo "<h4>your email id is $mail</h4>"."<br>";
        echo "<h3>password is:'.$password<h3>";
         
    } else{
         echo "<h1>oops!</h1>"."<br>";
        echo "<h4> Error404: page not found</h4>"."<br>";
        
       
    }
  ?>
 <style>
    h1{
        background-color: grey;
        text-align:center;
    }
     h4{
          text-align:center;
          text-decoration:underline;
     }
      h3{
          text-align:center;
      }
     </style>

 </body>
 </html>
