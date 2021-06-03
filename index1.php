 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="index.css">
 </head>
 <body>
         <h1>EMPLOYEES LIST</h1>    
  <?php 
  
    $employee=array(
        array(
            "name" => "anjali",
            "email" => "aashi@mail.com",
        ),
        array(
            "name" => "vandana",
            "email" => "vani@mail.com",
        ),
        array(
            "name" => "Priya",
            "email" => "priya143@mail.com",
        ),
        array(
            "name" => "shilpa",
            "email" => "sneha342@mail.com",
        ),
        );    
    echo "<div>Employee Details:".$employee[3]["name"]."<br/>".$employee[3]["email"]."<br></div>";  
    echo "<div>Employee Details:".$employee[1]["name"]."<br/>".$employee[1]["email"]."<br></div>";  
    echo "<div>Employee Details:".$employee[2]["name"]."<br/>".$employee[2]["email"]."<br></div>";      

   ?>
    
 <style>
    div{
        height:80px;
        width:500px;
        text-align:center;
        background-color:grey;
        margin-left:30vw;
        margin-top:20vh;
    }
     h1{
          text-align:center;
          text-decoration:underline;
     }
 </style>
 </body>
 </html>
