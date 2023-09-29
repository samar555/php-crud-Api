<?php 

$id = $_GET["user_id"];
  $con=mysqli_connect("localhost","root","","crudApi") or die("something went wrong");
  $sql="delete from user where id={$id}";
  $result=mysqli_query($con,$sql);
mysqli_close($con);
  header("location: http://localhost/php Crud/index.php");
  
  
  ?>