<?php
require_once('assets/config/all.php');

if(isset($_POST['id'])){
    $image = $_FILES['image']['name'];
    $target = "assets/images/".basename($image); 
    $insertsql = "INSERT INTO `menu` (`id`, `name`, `price`, `desc`, `image`) VALUES ('".$_POST['id']."', '".$_POST['name']."', '".$_POST['price']."', '".$_POST['desc']."', '".$image."')";
    $result=mysqli_query($virtual_con,$insertsql);
    $to="menu.php";
    if ($result>0){
      //insert  Success
    $msg="Insert was Success";
    }else{
      //insert failure
      $msg="Insert is not successful";
    }
    goto2($to,$msg);
}
else{
$sqlchkrow = "SELECT MAX(id) as m FROM `menu`";
$result=mysqli_query($virtual_con,$sqlchkrow);
$row=mysqli_fetch_assoc($result);
$maxval = $row['m'];

?>

<form name="insertmenu" action="insertmenu.php" enctype="multipart/form-data" method="post">
        <div class="form-group">
        	<label for="id">ID</label>
             <input readonly name="id" type="text" value="<?php echo $maxval+1; ?>"/>
		</div>
        <div class="form-group">
			<label for="name">Name</label>
            <input name="name" type="text"/>
        </div>
        <div class="form-group">
			<label for="price">Price</label>
            <input name="price" type="text"/>
        </div>
        <div class="form-group">
			<label for="desc">Description</label>
            <input name="desc" type="text"/>
        </div>
        <div class="form-group">
			<label for="image">Image</label>
            <input name="image" type="file"/>
        </div>
 <button name="insert" type="submit" class="btn btn-default">Insert</button>
</form>
<?php } ?>
