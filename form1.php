<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="form.css">
</head>
<body>
      <div class="container">
          <div class="row">
              <div class="color"></div>
              <div class ="col-lg-12 col-sm-12">
                  <form id="submit_form" action="" method="post">
                       <label>NAME</label>
                      <input type="text" id="name" name="name"><br><br>
                         <label>AGE</label>&nbsp;&nbsp;
                       <input type ="number" name="age" id="age"><br><br>
                       <label>ID</label>&nbsp;&nbsp;&nbsp;&nbsp;
                       <input type ="number" name ="id" id="id"><br><br>
                       <label>CITY</label>&nbsp;&nbsp;
                       <input type ="text" name ="city" id="city"><br><br>
                        <label>EMAIL</label>&nbsp;
                       <input type ="email" name ="email" id="email"><br><br>
                        
                          <input type="submit" name ="submit" id="submit" class ="btn btn-danger">
                  </form>
                   <div id ="response"></div>
              </div>
          </div>
     </div>
     <script>
     $(document).ready(function(){
      $('#submit').click(function(e){
            e.preventDefault();
            var name =$('#name').val();
              var age =$('#age').val();
               var id =$('#id').val();
               var city =$('#city').val();
               var email =$('#email').val();
             if(name=="" || age=="" || id=="" || city=="" || email==""){
                  alert("All fields are required!");
             }
              $.ajax({
                    type : "POST",
                     url : "form.php",
                     data:{
                             name:name,
                             age:age,
                             id:id,
                             city:city,
                             email:email
                     },
                      success:function(data){
                           e.preventDefault();
                           $('#response').trigger("reset");
                          $('#response').html(data);
                           
                      },
              });
      });
     });
     </script>
</body>
</html>