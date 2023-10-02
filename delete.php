<?php 
include 'database.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from `user` where id=$id";
    $result = mysqli_query($connection,$sql);
    if($result){
        header('location:index.php');
    }else{
        die(mysqli_error($connection));
    }
}
?>