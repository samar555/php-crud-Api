<?php 
include("upperheader.php");
include("header.php");

?>

<form action ="saveData.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" name ="last_name" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ouccupation</label>
    <input type="text" name="occupation" class="form-control" id="exampleInputPassword1" placeholder="Occupation">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Gender</label>
  <select name="gender" class="form-control form-control">
  <option selected disabled>Choose gender</option>
  <option >Male</option>
  <option >Female</option>
</select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




<?php

include("lowerHeader.php");
?>