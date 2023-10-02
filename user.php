<?php
include 'database.php';
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "insert into `user` (name,email,mobile) values('$name','$email','$mobile')";
    $result = mysqli_query($connection,$sql);
    if($result){
        header('location:index.php');
    }else{
        die(mysqli_error($connection));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Crud App</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container my-5">
<form method="post" action="">
<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="enter your name">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="enter your email">
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="" class="form-control" name="mobile" placeholder="enter your mobile">
  </div>
  <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
</form>

</div>
    
</body>
</html>