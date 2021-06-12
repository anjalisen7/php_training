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
<body>
    <div class ="container-fluid">
        <div class="row">
            <div class ="col-lg-7">
                  <h4 id="company">FRIENDSTER<h4>
                <img src ="signup.jpg" height="450vh;" id="signup">
            </div>
            <div clas ="col-lg-5">
                 <div>
                <form id ="form" action="#" method ="post"> 
                  <p class="show_msg"></p>
                  <p class="show_msg1"></p>
                 <input type = "text" id ="fname" name="fname" placeholder=" 👨‍💼      First Name"> 
                 <input type = "text" id ="lname" name="lname" placeholder=" 👨‍💼      last Name"><br><br>
                 <input type = "email" id ="email" name="email" placeholder=" 📧    E-mail"><br><br>
                 <input type = "text" id ="age" name="age" placeholder="age"><br><br>
                 <input type = "password" id ="password" name="password" placeholder=" 🔏     Password"><br><br>
                 <input type ="submit" class ="btn btn-success btn-lg" id ="submit" name="submit" value ="Create your account">
                 <h5>________________________________OR___________________________________________</h5>
                 <input type ="button" class ="btn btn-primary btn-lg" id ="submit" name="submit" value ="Continue with facebook"><br><br>
                 <input type ="button" class ="btn btn-info btn-lg" id ="submit" name="submit" value ="Continue with instagram">
                 <p class="main"> Already Registered ? <a href="login.php">login </a> </p>
                 </form>
                 </div>
                </div>
                 
        </div>
    </div>
  <script>
    $(document).ready(function(){
          $('#submit').click(function(e){
               e.preventDefault();
                 var fname = $('#fname').val();
                 var lname = $('#lname').val();                 
                 var age = $('#age').val();                                 
                 var password = $('#password').val();
                 var email = $('#email').val();
                   if(fname=="" || lname=="" ||password=="" || email=="" || age ==""){
                       $('.show_msg').html("*All field is mandatory");
                      return false;
                    } 
                     console.log(password);
                    $.ajax({ 
                       type: "POST",
                        url: "profile1.php",
                         data:{
                             fname :fname,
                             lname :lname,
                             age:age,
                             password:password,
                             email :email,
                             
                            }  ,cache:false,
                            success: function(data){
                               $('#form').trigger("reset");
                                $('.show_msg').html(data);
                                console.log(data);
                              //  $('.show_msg').html("Registration is successful");
                              //  $('.show_msg').css("color","green");
                            }, 
                    });
            });
       });
  

  </script>  
</body>
</html>