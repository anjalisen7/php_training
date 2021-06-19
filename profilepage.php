<?php session_start();
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
?>
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
<body id ="profile_body">
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="win.gif"alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file" id="fileToUpload"/>
                                <input type="submit" value="Upload Image" name="submit">
                            </div>
                             <h5 style="margin-right:20vh;"> 🟢 Online</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                        <form method="post">
                                    <h5 class="text-capitalize">
                                    <?php  echo $_SESSION['user']['fname']. $_SESSION['user']['lname']; ?> 
                                    </h5>
                                    <h6 class="text-capitalize">
                                    <p><?php echo $_SESSION['user']['field']; ?> </p>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                                    <ul class="nav nav-pills" role="tablist">
                                               <li class="nav-item">
                                      <a class="nav-link active" data-toggle="pill" href="#about">About</a>
                                               </li>
                                       <li class="nav-item">
                                      <a class="nav-link" data-toggle="pill" href="#timeline">Timeline</a>
                                          </li>
                                        
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        
                       
                        <input type="submit" class="profile-edit-btn" id="edit_btn" name="btnAddMore" value="Edit Profile"/>
                    </div><br><br>
                    <div class="col-md-2">
                    <a class="btn btn-info" id="logout-profile-btn">logout</a>
                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                 <!--------------------------------------->
                        <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="color:teal; font-size:2.4vh; ">Fullname</label>
                                            </div>
                                            <div class="col-md-6">
                                                <class="text-capitalize"><?php echo  $_SESSION['user']['fname']  . $_SESSION['user']['lname']; ?> </p>
                                             </div>
                                         </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label style="color:teal; font-size:2.4vh; ">Age</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p> <?php echo $_SESSION['user']['age']; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="color:teal; font-size:2.4vh; ">Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><?php echo $_SESSION['user']['email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="color:teal; font-size:2.4vh; ">Address:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><?php echo $_SESSION['user']['address']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="color:teal; font-size:2.4vh; ">city</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><?php echo $_SESSION['user']['city']; ?></p>
                                            </div>
                                        </div>
                                  </div>
                            </div>
            </div>
</form>
</div> 

</body>
<?php
}else{
    echo "Invalid User";
}

?>
<!-- <script>
$(document).ready(function(){
 $('#submit-form').on("submit",function(e){
      e.preventDefault();
      var formData = new formData(this);
      $.ajax({
          url:"upload.php",
          type:"POST",
          data: "formData",
          contentType:"false",
          processData:"false",
           success:function(data){
      ('.image_preview').html(data);
      ('#upload_file').val('');
           }


      });
 });
});
</script> -->



</html>
