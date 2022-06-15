
<?php
require_once('assets/config/all.php');

$id = $_GET['id'];

$sqldelete = "DELETE FROM `review` WHERE `id`= '".$id."'";
$result=mysqli_query($virtual_con,$sqldelete);
$to = "DisplayReview.php";
if($result>0){
    //delete success
    $msg = "Delete was Success";
}
else{
    //delete failure
    $msg = "Delete is not Successful";
}
goto2($to, $msg);
?>
