<?php
require_once("connection.php");
session_start();
  if( $_POST['formName']== 'updateProfileImage'){
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
       if(isset($_POST["upload"]))
        {
           $_SESSION['status']="Something went Wrong!";
           $_SESSION['status_code']="error"; 
           ?>
                     <script>
                       window.location.href = "http://localhost/php_training/profilepage.php";
                     </script>
                   <?php
            $allowed_ext = array("jpg" => "image/jpg", 
                                "jpeg" => "image/jpeg", 
                                 "gif" => "image/gif",    
                                 "png" => "image/png");
            $file_name = $_FILES["photo"]["name"];
            $file_type = $_FILES["photo"]["type"];
            $file_size = $_FILES["photo"]["size"];
            $temp_name =$_FILES["photo"]["tmp_name"];
            $logeduseremail= $_SESSION['user']['email'];
   
            
          
            // file extension
            $ext = pathinfo($file_name, PATHINFO_EXTENSION);
            if (!array_key_exists($ext, $allowed_ext)) 
            echo "";              
          
            // Verify MYME type of the file
            if (in_array($file_type, $allowed_ext))
            {  
                // file exists or not
                if (file_exists("uploads/".$_FILES["photo"]["name"])) 
                            
                    echo "";
                  
                  
                else
                {
                    move_uploaded_file($_FILES["photo"]["tmp_name"],  
                               "uploads/".$_FILES["photo"]["name"]);
                            $updatequery = "update  users set image_path ='$file_name'
                            where email = '$logeduseremail'";
                        
                            mysqli_query($conn, $updatequery);
                               $_SESSION['status']="Image Uploaded Succesfully!";
                               $_SESSION['status_code']="Success";
                               ?>
                     <script>
                       window.location.href = "http://localhost/php_training/profilepage.php";
                     </script>
                   <?php
                               //  echo 'file uploaded succesfully';
                    
                  
                } 
            } 
           //  else
           //  {
           //      echo '<script>alert("Try Again!")</script>'; 
           //  }
        } 
        else
        {
            echo "Error: ". $_FILES["photo"]["error"];
        }
    }
  }
if($_POST['formName']=='updateProfile'){
 if(isset($_POST['update'])){
  if ($conn->connect_error) {
    $_SESSION['status'] = "Please Check your Sql Connection";
    $_SESSION['status_code'] ="error";
    // die("Connection failed: " . $conn->connect_error);
  }
  $logeduseremail=$_SESSION['user']['email'];
     $fname= $_POST['fname'];
     $address = $_POST['address'];
     $age = $_POST['age'];
     $field = $_POST['field'];
     $city = $_POST['city'];
     $updatedate = date('y-m-d');
    //  $file_name = $_FILES["photo"]["name"];
    //  $filepath = $_FILES['photo']['tmp_name'];
    //  $file_error = $_FILES['photo']['error'];
  
    //  move_uploaded_file($_FILES["photo"]["tmp_name"],  
    //  "uploads/".$_FILES["photo"]["name"]);
  $sql = "UPDATE users SET age = '$age',updated_on='$updatedate' ,address ='$address',fname= '$fname',field= '$field' ,city= '$city' WHERE email= '$logeduseremail'";
  if ($conn->query($sql) === TRUE) {
     $_SESSION['status'] = "Your Record Updated Succesfully!";
     $_SESSION['status_code'] ="success";
    ?>
                     <script>
                       window.location.href = "http://localhost/php_training/profilepage.php";
                     </script>
                   <?php
    // echo "Record updated successfully";
  } else {
      $_SESSION['status'] = "Please Try Again!";
      $_SESSION['status_code'] ="error";
      ?>
      <script>
        window.location.href = "http://localhost/php_training/profilepage.php";
      </script>
    <?php
    // echo "Error updating record: " . $conn->error;
  }
}
}
?>
