<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}

if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$pid = $_POST['pid'];
$pname = $_POST['pname'];
$noc = $_POST['noc'];
$status = $_POST['status'];
$success = $_POST['success'];


//echo "$cid, $cname ,$status";

$sql = "UPDATE `partyinsertion` SET `partyname`='".$pname."',`no_of_members`='".$noc."',`status`='".$status."',`success_rate`='".$success."' WHERE `partyid` = '".$pid."'";

$err = mysqli_query($con, $sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>