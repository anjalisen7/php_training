<?php
       $servername ="localhost";
       $username="root";
       $DbPassword ="";
       $dbname ="anjali";
       
       $conn = mysqli_connect($servername, $username,$DbPassword,$dbname);
   if(isset($_POST['submit'])){

       $title =$_POST['title'];
       $discription =$_POST['discription'];
       $author =$_POST['author'];
       $date =$_POST['date'];
       $file = $_FILES['pic'];
        // print_r($file);
         $filename = $file['name']; 
         $filepath = $file['tmp_name']; 
         $fileerror =$file['error'];

          if($fileerror==0){
             $destfile = 'upload/'.$filename;
            //  echo $destfile; 
             move_uploaded_file($filepath , $destfile);
              $sql = "INSERT INTO `cards`(`post title`, `description`, `author`, `date`, `pic`) VALUES ('$title','$discription','$author','$date','$destfile')";
               $result = mysqli_query($conn,$sql);
               if($result){
                   echo "succesfull";
               }else{
                        echo "not connecting";
               }
          }
   }else{
        echo "something went wrong";
   }
 

?>