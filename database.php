<?php
$connection = new mysqli('localhost','root','root','phpcrud');

if(!$connection){
    echo "database connection is unsuccesfull";
}
// $name = $_POST['name'];
//     $email = $_POST['email'];
//     $mobile = $_POST['mobile'];
//     echo $mobile;
//     $sql = "insert into `user` (name,email,mobile) values('$name','$email','$mobile')";
//     $result = mysqli_query($connection,$sql);
//     if($result){
//         echo "data inserted succesfully";
//     }else{
//         die(mysqli_error($connection));
//     }

 ?>