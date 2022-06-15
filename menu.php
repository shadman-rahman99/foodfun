<?php
require_once('assets/config/all.php');
//declare sql statement
$sql='SELECT * FROM `menu`';
//execute the sql statment to db and retrieve the data
$result=mysqli_query($virtual_con,$sql);
 ?>

<form name="insertmenu" action="insertmenu.php" method="post">
  <div class="form-group" align="center">
  	<button type="submit" class="btn btn-default">New Menu Item</button>
  </div>
</form>

<!-- to show data in table (HTML) -->
<table class="table table-dark">
<thead class="thead-dark">
 <tr>
   <th scope="col">ID</th>
   <th scope="col">Name</th>
   <th scope="col">Price</th>
   <th scope="col">Description</th>
   <th scope="col">Image</th>
   <th scope="col">Delete</th>
   <th scope="col">Update</th>
 </tr>
</thead>
<tbody>
  <?php while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $row['id'];  ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['desc']; ?></td>
      <td><?php echo "<img src='assets/images/".$row['image']."' height='90' width='100'>"; ?></td>
      <td><a href="deletemenu.php?id=<?php echo $row['id']; ?>">Delete</a></td>
      <td><a href="updatemenu.php?id=<?php echo $row['id']; ?>">Update</a></td>
    </tr>
  <?php } ?>
</tbody>
</table>
