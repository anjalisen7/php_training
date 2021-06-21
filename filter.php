<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="filter.css"> </head>

<body>
	<div class="container-fluid">
		<div class="row register">
			<h1>REGISTRATION FORM</h1>
			<div class="col-sm-3"> </div>
			<div class="col-sm-6 reg">
				<h2 class="show_msg"></h2>
				<form class="form-horizontal hr" method="post" action="">
					<!-------------------------------------->
					<div class="form-group">
						<label class="control-label col-sm-4"id="label" for="fname">FIRST NAME:</label>
						<div class="col-sm-8">
							<input type="text" name="fname" placeholder="Enter Your First Name" class="form-control" id="fname"> </div>
					</div>
					<!------------------------------->
					<div class="form-group">
						<label class="control-label col-sm-4"id="label" for="fname">LAST NAME:</label>
						<div class="col-sm-8">
							<input type="text" name="lname" placeholder="Enter Your Last Name" class="form-control" id="lname"> </div>
					</div>
					<!-------------------------------->
					<div class="form-group">
						<label class="control-label col-sm-4"id="label" for="uname">USER NAME:</label>
						<div class="col-sm-8">
							<input type="text" name="uname" placeholder="Enter USER Name" class="form-control" id="uname"> </div>
					</div>
					<!------------------------------>
					<div class="form-group">
						<label class="control-label col-sm-4" id="label" for="EMAIL">USER EMAIL:</label>
						<div class="col-sm-8">
							<input type="email" name="email" placeholder="EMAIL" class="form-control" id="email"> </div>
					</div>
					<!---------------------->
					<div class="form-group">
						<label class="control-label col-sm-4" id="label" for="password">PASSWORD:</label>
						<div class="col-sm-8">
							<input type="password" name="password" placeholder="PASSWORD" class="form-control" id="password"> </div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" id="label" for="fname">AGE</label>
						<div class="col-sm-8">
							<input type="text" name="age" placeholder="Age" class="form-control" id="age"> </div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" id="label" for="number">MOBILE NUMBER:</label>
						<div class="col-sm-8">
							<input type="text" name="number" placeholder="mobile number" class="form-control" id="number"> </div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" id="submit" class="btn btn-default">SUBMIT</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-3"> </div>
		</div>
	</div>
  <script>
   
   $(document).ready(function(){
    $("#submit").click(function(e){
        e.preventDefault();
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var uname = $('#uname').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var age = $('#age').val();
        var number = $('#number').val();
             
        //  if(fname =="" || lname=="" || uname=="" || email=="" || password==""|| rpassword==""|| number==""){
        //       $('.show_msg').html("*ALL FIELD IS REQUIRED");
        //        return false;
        //  }
        $.ajax({
           type:"POST",
            url: "filter2.php",
            data:{
                fname:fname,
                lname:lname,
                uname:uname,
                email:email,
                password:password,
                  age:age,
                number:number
            }, success:function(data){
                $('.form-horizontal').trigger("reset");
                //  alert(data);
                $('.show_msg').html(data);
            },
        });
    });
   });
  
  
  
  
  
  </script>







</body>

</html>