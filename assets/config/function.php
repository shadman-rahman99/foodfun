<?php

function getusername($uid, $virtual_con){
  // get the user name

$sql="select * from tbluser where UserID='".$uid."'";
  $result=mysqli_query($virtual_con,$sql);
  $row=mysqli_fetch_assoc($result);

  return $row['Name'];
  //echo "Welcome back ". $uname." User has log on before";
  //populate the user name to $uname
}
function getlogin($chkU,$chkP,$virtual_con){
  //validation of usersdb
  $sql="select * from tbluser where UserID='".$chkU."'
  and  Password='".$chkP."'";
  //echo $sql;
  //create an sql statement need execute this command
  // mysqli_query($connection,$sqlstament)
  $result=mysqli_query($virtual_con,$sql);
  return $result;
}


//to jump to next page define the $to to your url
function gotoInterface($to){
	echo "<script language=\"JavaScript\"> window.location = \"".$to."\"</script>";
}
function goto2 ($to,$Message){
	echo "<script language=\"JavaScript\">alert(\"".$Message."\") \n window.location = \"".$to."\"</script>";
}

?>
