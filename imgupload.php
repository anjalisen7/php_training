<?php
   session_start();
$servername ="localhost";
$username="root";
$password ="";
$dbname ="anjali";
$conn =new mysqli ($servername ,$username ,$password ,$dbname);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0)
    {
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
            die("Error: Please select a valid file format.");
          
        //file size - 2MB max
        $maxsize = 2 * 1024 * 1024;
  
        if ($file_size > $maxsize)         
            die("Error: File size is larger than the allowed limit.");        
      
        // Verify MYME type of the file
        if (in_array($file_type, $allowed_ext))
        {
            // file exists or not
            if (file_exists("uploads/".$_FILES["photo"]["name"]))            
                echo $_FILES["photo"]["name"]." is already exists.";
              
            else
            {
                move_uploaded_file($_FILES["photo"]["tmp_name"],  
                           "uploads/".$_FILES["photo"]["name"]);
                        //    $insertquery = "INSERT INTO images (filename) VALUES ('$file_name')";
                        $updatequery = "update users set image_path ='$file_name' 
                        where email = '$logeduseremail'";
                    
                                mysqli_query($conn, $updatequery);
                echo "Your file was uploaded successfully.";
            } 
        } 
        else
        {
            echo "Error: Please try again."; 
        }
    } 
    else
    {
        echo "Error: ". $_FILES["photo"]["error"];
    }
}
// $result = mysqli_query($conn,"select * from users");
// while($data = mysqli_fetch_array($result)){

//    ?>
//    <img src = "<?php echo 'uploads/'.$data['filename']; ?>">
//     <?php
// }
?>

<style>
img{
   height:100px;
   width:80px;
}
</style>