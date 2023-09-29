<?php 
$username1 = $_POST["first_name"];
$lastname = $_POST["last_name"];
$occupation = $_POST["occupation"];
$gender = $_POST["gender"];
$id = $_POST["user_id"];
  $con=mysqli_connect("localhost","root","","crudApi") or die("something went wrong");
  $sql="update user set gender='{$gender}',lastname='{$lastname}',occupation='{$occupation}',username='{$username1}' where id={$id}";
  $result=mysqli_query($con,$sql);
mysqli_close($con);
  header("location: http://localhost/php Crud/index.php");
  
  
  ?>