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
    //  $employee=array( "sneha" ,"anjali","kriti","sonali","sneha","anjali");
    //  $person=array( "sneha" ,"anjali","kriti","sneha","anjali");
    //  $emp_per=array_diff_key($employee,$person);
     $a=array_fill(4,2,"anjali");
     $b=array_fill(3,1,"shoaib");
    print_r ($a);
    echo "<br>";
    print_r ($b);
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
