<?php
require_once('assets/config/all.php');
if (isset($_GET['id'])) {
          $id=$_GET['id'];
          $sql="SELECT * FROM `menu` WHERE (`id`='".$id."')";
          $result=mysqli_query($virtual_con,$sql);
          $row=mysqli_fetch_assoc($result);
}else if (isset($_POST['id']))  {
  $image = $_FILES['image']['name'];
  $target = "assets/images/".basename($image); 
  $sqlupdate="UPDATE `menu` SET `name` = '".$_POST['name']."', `price` = '".$_POST['price']."', `desc` = '".$_POST['desc']."', `image` = '".$image."' WHERE `id` = '".$_POST['id']."'";
  $result=mysqli_query($virtual_con,$sqlupdate);
  $to="menu.php";
  if ($result>0){
    //update  Success
  $msg="Update was Success";
  }else{
    //update failure
    $msg="Update is not successful";
  }
  goto2($to,$msg);
}

?>

<form name="updatemenu" action="updatemenu.php" enctype="multipart/form-data" method="post">
        <div class="form-group">
        	<label for="id">ID</label>
             <input readonly name="id" type="text" value="<?php echo $row['id'];?>" />
		     </div>
         <div class="form-group">
			<label for="Name">Name</label>
            <input name="name" type="text" value="<?php echo $row['name'];?>" />
        </div>
        <div class="form-group">
			<label for="price">Price</label>
            <input name="price" type="text" value="<?php echo $row['price'];?>" />
        </div>
        <div class="form-group">
			<label for="desc">Description</label>
            <input name="desc" type="text" value="<?php echo $row['desc'];?>" />
        </div>
        <div class="form-group">
			<label for="image">Image</label>
            <input name="image" type="file" value="<?php echo $row['image'];?>"/>
        </div>
 <button type="submit" class="btn btn-default">Update</button>
</form>

