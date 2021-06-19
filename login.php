<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel ="stylesheet" href ="home.css">
  
</head>
<body style="background-color:grey;">
<nav class ="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand"  id ="logo"href="home.php">FRIENDSTER</a>
      </div>
      <ul class="nav navbar-nav" id ="navli">
        <li class="home"><a href="home.php">Home</a></li>
        <li><a href="#" id="about">ABOUT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/php_training/signup.php" id ="up"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </nav>

 <div class="container3">
   <div id="show_alert"></div>
    <form id= "loginform" action="#" method="post">
       <p id ="show_msg"></p>
        <label>Username</label>
      <input type ="text" id ="email" name ="email"><br><br>
       <label>Password</label>
      <input type ="password" id ="password" name ="password"><br><br>
       <input type ="submit" class= "btn btn-success btn-lg " id="submit1" value ="Login"><br><br>
       <p style="color:black; margin-left:28vh; font-size:2vh;">don't have an account?   <a  style= "color:green; font-weight:bolder; font-size:2.3vh;" href="signup.php">SignUp</a></p>
     
</form>
</div>
 <script>
  $(document).ready(function(){
   $('#submit1').click(function(e){
      e.preventDefault();
      var email = $('#email').val();
      var password = $('#password').val();
      //  if(email=="" || password==""){
      //     $('#show_msg').html("Incorrect username & password");
      //    return false;
      //  }
       $.ajax({
             type:"POST",
             url: "loginbackend.php",
             data:{
                 email :email,
                 password :password
             },catch : false,
             success:function(data){
               $('#show_msg').html(data);
             },
       });
   });
  });
 </script>


</body>
</html>