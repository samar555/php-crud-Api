<?php 
include("upperheader.php");
include("header.php");
$id=$_GET["id"];
$con=mysqli_connect("localhost","root","","crudApi") or die("not Connected to database");
$sql="select * from user where id={$id}";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($rows = mysqli_fetch_assoc($result)){
?>
<form action="updateProcess.php" method="POST">
<input type="text" name="user_id" value="<?php echo $rows["id"]?>" hidden >
 <div class="form-group">
   
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" value="<?php echo $rows["username"]?>" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" value="<?php echo $rows["lastname"]?>" name ="last_name" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ouccupation</label>
    <input type="text" value="<?php echo $rows["occupation"]?>" name="occupation" class="form-control" id="exampleInputPassword1" placeholder="Occupation">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Gender</label>
  <select name="gender" class="form-control form-control">

    <?php
  
    if($rows["gender"]=="Male"){
        echo "<option selected >Male</option>";
        echo "<option >Female</option>";
    }else{
        echo "<option>Male</option>";
        echo "<option selected>Female</option>";
    }

  ?>
</select>
</div>
  <button type="submit" name ="updatebtn" class="btn btn-primary">Update</button>
</form>
  <?php
}
}else{
echo "no result";
}
  ?>

<!-- update code here  -->


<?php 


include("lowerHeader.php");
?>