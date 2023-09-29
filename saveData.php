<?php
 $user_first_name=$_POST["first_name"];
 $user_Last_Name=$_POST["last_name"];
 $user_occupation=$_POST["occupation"];
 $user_gender=$_POST["gender"];
$con=mysqli_connect("localhost","root","","crudApi") or die("cannot connect");
$sql="insert into user (username,lastname,gender,occupation) values ('{$user_first_name}','{$user_Last_Name}','{$user_gender}','{$user_occupation}')";
$result=mysqli_query($con,$sql) or die("gg");
header("location: http://localhost/php Crud/index.php");
mysqli_close($con);


?>