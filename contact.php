<?php
require_once('assets/config/all.php');
//declare sql statement
$sql='SELECT * FROM `contact`';
//execute the sql statment to db and retrieve the data
$result=mysqli_query($virtual_con,$sql);
$counter = 1;
 ?>

<!-- to show data in table (HTML) -->
<table class="table table-dark">
<thead class="thead-dark">
 <tr>
   <th scope="col">NO</th>
   <th scope="col">Name</th>
   <th scope="col">Email</th>
   <th scope="col">Subject</th>
   <th scope="col">Message</th>
   <th scope="col">Delete</th>
 </tr>
</thead>
<tbody>
  <?php while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $counter; $counter++;  ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['subject']; ?></td>
      <td><?php echo $row['message']; ?></td>
      <td><a href="deletecontact.php?cid=<?php echo $row['cid']; ?>">Delete</a></td>
    </tr>
  <?php } ?>
</tbody>
</table>
