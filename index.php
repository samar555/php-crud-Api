
    <?php 
    include("upperheader.php");
    include("header.php");
    $con=mysqli_connect("localhost","root","","crudApi") or die("Connection not established Please Contect Owner");
    $sql="select * from user";
    $result=mysqli_query($con,$sql) or die("query not run");
   ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Catagory</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  <?php
    if(mysqli_num_rows($result)>0){
      $id=1;
    while($row = mysqli_fetch_assoc($result)){
     
      ?>

      <th scope="row"><?php echo $id++;?></th>
      <td><?php echo $row["username"];?></td>
      <td><?php echo $row["lastname"];?></td>
      <td><?php echo $row["occupation"];?></td>
      <td>
        <a href="update.php" class="btn btn-primary">Update</a>
        <a href="delete.php" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  <?php
    }
  }else{
    echo "<h2>  No Results !!</h2>";
  }
 mysqli_close($con);
   ?>
  </tbody>
</table>
<?php     

include("lowerHeader.php");
?>
