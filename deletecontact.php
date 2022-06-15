<?php
require_once('assets/config/all.php');

$id = $_GET['cid'];

$sqldelete = "DELETE FROM `contact` WHERE `cid`= '".$id."'";
$result=mysqli_query($virtual_con,$sqldelete);
$to = "contact.php";
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