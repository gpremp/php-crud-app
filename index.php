<?php
include 'database.php';
$sql = "select * from `user`";
$result = mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
    <button class="btn btn-primary my-5">
        <a href="user.php" class="text-light">Add User</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if($result){
        $sno = 1;
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            echo '<tr>
            <th>'.$sno.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td><button class="btn btn-primary"><a href="update.php?id='.$id.'" class="text-light">update</a></button>
                <button class="btn btn-danger"><a href="delete.php?id='.$id.'" class="text-light">delete</a></button></td>
          </tr>';
          $sno = $sno + 1;
        }
    }
    
    
    ?>
    
  </tbody>
</table>

</div>
    
</body>
</html>