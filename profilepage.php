<?php 
session_start();
   require_once("connection.php");
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    $user_email= $_SESSION['user']['email'];
    $result = mysqli_query($conn,"select * from users where email='$user_email'");
     while($data =mysqli_fetch_array($result)){
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel ="stylesheet" href ="home.css">
  
</head>
<body id ="profile_body">

    <div id="preview">
     <div id="image_preview">
     <img style="height:155px; width:100%;" src="<?php echo 'cover/'.$data['cover_img']?>"></a>
       <div  class="camera">
       <a style="text-decoration:none;" href="cover.php" class="cover-cam">📷</a>
       </div> 
     </div>
     
    </div>
<div class="container emp-profile">
           
                <div class="row">
                    <div class="col-md-4">
                    <form method="post" action="updateprofile.php"  enctype="multipart/form-data">
                    <input type="hidden"  name="formName" value="updateProfileImage">
                        <div class="profile-img">
                            <img  src="<?php echo 'uploads/'.$data['image_path'];?>">
                            <div class="file btn  btn-dark">
                                Change Photo
                                <input type="file" name="photo" id="fileselect"/>
                                <input type="submit" name="upload" value="Upload">
                            </div>
                             <h5 style="margin-right:20vh;"> 🟢 Online</h5>
                            </div>
                    </form>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                        <form method="post" action="updateprofile.php" enctype="multipart/form-data">
                        <input type="hidden"  name="formName" value="updateProfile">
                                    <h5 class="text-capitalize">
                                  <p><?php print_r($data['fname']);?> 
                                    </h5>
                                    <h6 class="text-capitalize">
                                    <p><?php print_r($data['field']); ?></p>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                                    <ul class="nav nav-pills" role="tablist">
                                               <li class="nav-item">
                                      <a class="nav-link active" data-toggle="pill" href="#">About</a>
                                               </li>
                                       <li class="nav-item">
                                      <a class="nav-link" data-toggle="pill" href="posts.php">Timeline</a>
                                          </li>
                                        
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                       <a href="#"><input type="button" class="profile-edit-btn" id="edit_btn" name="btnAddMore" value="Edit Profile"></a>
                    </div><br><br>
                    <div class="col-md-2">
                       <a href="updateprofile.php"><input type="submit" class="profile-update-btn" id="update_btn" name="update" value="Update Profile"></a>
                    </div><br><br>
                    <div class="col-md-2">
                       <a href="deleteprofile.php"><input type="button" class="profile-delete-btn" id="delete_btn" name="Delete" value="Delete Profile"></a>
                    </div><br><br>
                    <div class="col-md-2">
                        <a href ="logout1.php"><input type="button" value="logout"  class="logout_btn" name="logout"></a>
                      
                    </div>
                    <div class="col-md-2" style="width:180px;">
                        <a href ="disabled.php"><input type="button" value=" enable"  class="disabled_btn" name="disabled"></a>
                      
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">     
                        <button type="button" id="addwork" class="btn btn-info btn-sm">Add more Work</button>
                            <class="text-capitalize"><p><input type="text" name="work1" id="work_1" value="Website Link" disabled></p>
                            <class="text-capitalize"><p><input type="text" name="work2" id="work_2" value="Bootsnip Profile" disabled></p>
                            <class="text-capitalize"><p><input type="text" name="work3" id="work_3" value="Bootply profile" disabled></p>
                           <a href="#"><p>Add a new SKILLS 🖊️</p></a>
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
                                                <class="text-capitalize"><p><input type="text" name="fname" id="input_name" value="<?php print_r($data['fname']);?>"disabled></p>
                                             </div>
                                         </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label style="color:teal; font-size:2.4vh; ">Age</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><input type="text" name="age" id="input_age" value="<?php print_r($data['age']);?>"disabled></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="color:teal; font-size:2.4vh; ">Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><input type="email" name="email" id="input_email" value="<?php print_r($data['email']); ?>"disabled></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="color:teal; font-size:2.4vh; ">Address:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><input type="text" name="address" id="input_address" value="<?php print_r($data['address']); ?>"disabled></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="color:teal; font-size:2.4vh; ">city</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><input type="text" name="city" id="input_city" value="<?php print_r($data['city']); ?>"disabled></p>
                                            </div>
                                        </div>
                                  </div>
                            </div>
            </div>

</div> 
  </form>
</body>
<?php
  }
}else{
    echo "Invalid User";
}
?>
<script>

 $('#edit_btn').click(function(){
   $('#input_name').removeAttr("disabled");
   $('#input_age').removeAttr("disabled");
   $('#input_city').removeAttr("disabled");
   $('#input_address').removeAttr("disabled");
 });
 $('#addwork').click(function(){
   $('#work_1').removeAttr("disabled");
    $('#work_2').removeAttr("disabled");
    $('#work_3').removeAttr("disabled");
  
 });
 <?php
 
  if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    ?>
swal({
     title: "<?php  echo $_SESSION['status'];?>",
     icon: "<?php echo $_SESSION['status_code']; ?>",
     button: "Ok Done!",
       });
    <?php
    unset($_SESSION['status']);
  }
 ?>
     
</script>
</html>
