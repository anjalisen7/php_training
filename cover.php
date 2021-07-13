<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <div class="cover">
<form id="submit_form" action="updateprofile.php" method="post" enctype="multipart/form-data">
    <input type="hidden"  name="formName" value="coverImage">
     <input type="file" name="file" id="upload_file">
     <input type="submit" name="upload_button" id="upload_btn" value="upload">
    </form>
</div>
</body>
</html>
