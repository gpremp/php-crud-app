<?php
include 'database.php';
$id = $_GET['id'];
$sql = "select * from `user` where id=$id";
$res = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($res);
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "update `user` set name='$name',email='$email',mobile='$mobile' where id='$id'";
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
    <h3 class="text-center">Update user details</h3>
<form method="post" action="">
<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" placeholder="enter your name">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" placeholder="enter your email">
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>" placeholder="enter your mobile">
  </div>
  <button type="submit" name="Submit" class="btn btn-primary">Update</button>
</form>

</div>
    
</body>
</html>