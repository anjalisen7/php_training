<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel ="stylesheet" href="new.css">
    
</head>
<body>
     <div class="container">
         <form id="form" action="#" method="post" autocomplete="on">
             <h2 id="show_msg"></h2><br><br>
             <label>Name</label><br><br>
             <input type ="text" id="firstname" name="firstname"/><br><br>
             <label>Surname</label><br><br>
             <input type ="text" id="lastname" name="lastname"/><br><br>
             <label>Password</label><br><br>
             <input type ="password" id="password" name="password"/><br><br>
             <label>Email</label><br><br>
             <input type ="email" id="email" name="email"/><br><br>
             <input id="submit" type="submit" class="btn-submit" value="Submit" />
             </form>
     </div>


 <script>
      $(document).ready(function(){
          $('#submit').click(function(e){
               e.preventDefault();
                 var firstname = $('#firstname').val();
                 var lastname = $('#lastname').val();
                 var password = $('#password').val();
                 var email = $('#email').val();
                //    if(firstname=="" || lastname=="" ||password=="" || email==""){
                //        $('#show_msg').html("please fill data");
                //      return false;
                //     }
                    $.ajax({ 
                       type: "POST",
                        url: "new.php",
                         data:{
                             firstname :firstname,
                             lastname :lastname,
                             password :password,
                             email :email
                            }  ,cache:false,
                            success: function(data){
                               $('#form').trigger("reset");
                               $('#show_msg').html(data);
                            }, 
                    });
            });
       });

 </script>
</body>
</html>