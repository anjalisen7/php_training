<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  
    <link rel ="stylesheet" href="index.css">
    
   
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="fb col-lg-7 col-sm-12">
                <h1>FACEBOOK</h1>
                <p>Use <code>FACEBOOK</code> and Connect With Your Loved Ones</p>
            </div>
            <div class="sign col-lg-5 col-sm-12">
              <form method="post" action="#">
                  <p id="error_msg">*fill the form</p>
                  <input type ="text" id="username" name="username" placeholder="Email/phone no.">
                  <input type="text" id="text2" namee="pass" placeholder="password">
                  <button type="button" id="btn">LOGIN</button>
                  <p><code>forgotten your password?</code></p>
                  <hr>
                  <button type="button" id="btn2" data-toggle="modal" data-target="#mymodal">New Account</button>
              </form>
            </div>
            <div class="modal fade" id="mymodal">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">SIGN-UP!</h4>
                            <p class="p1">easy and in a quick way</p>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <form class= "mod"  id ="formdetails" action="#" method="post"  auto_complete="off">
                               
                               <input type="text" id="form_fname" name="fname" placeholder="name"> 
                               <input type="text" id="form_sname" name="sname" placeholder="surname"><br><br>
                               <span class="error" id="surname_err_msg"></span>
                               <input type="password" name="pass" id="password" placeholder="password" ><br><br>
                               <span class="error" id="pass_err_msg"></span>
                               <input type="email" id="email" name="email" placeholder="email">
                               <span class="error" id="mail_err_msg"></span>
                            <br><br>
                              GENDER:<br>
                              &nbsp;&nbsp; <label for="radio1">
                                <input type="radio"  class="form-check-input" id="radio1" name="optradio" value="MALE👨" checked>MALE
                              </label> &nbsp;&nbsp;&nbsp;&nbsp;
                              <label for="radio2">&nbsp;
                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="FEMALE👧">FEMALE
                              </label>&nbsp;&nbsp;&nbsp;&nbsp;
                              <label for="radio3">&nbsp;&nbsp;
                                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="CUSTOM🌝">CUSTOM
                              </lable> &nbsp;&nbsp;
                          </div>
                          <p style="font-size: 1.8vh;">By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>
                          <div class="modal-footer">
                              <button type="submit" style="margin-right:25vh;" id="button" class="btn btn-success" >SIGNUP</button>
                              <span id="response"></span>
                          </div>
                         
                        </form>
                        
                          
                    </div>
      
                </div>
            </div>
        </div>
    </div>
<script>
  $(document).ready(function(){
   

    $("#btn").click(function(e){
      var fname=$('#username').val();
      alert(fname);
      $.post("index.php",
      {
        fname: fname,
        
      },
      function(data,status){
        console.log(data,status);
          $('#error_msg').text(data);
         return e.preventDefault();
        // alert("Data: " + data + "\nStatus: " + status);
        
      });
    });
  });
        
</script>   

</body>
</html>