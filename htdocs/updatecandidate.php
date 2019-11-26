<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}

if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$cid = $_POST['cid'];
$cname = $_POST['cname'];
$status = $_POST['status'];
$exp = $_POST['exp'];
$eff = $_POST['eff'];
$pid = $_POST['pid'];
$wid = $_POST['wid'];

//echo "$cid, $cname ,$status";

$sql = "UPDATE `candidateinsertion` SET `candidate_name`='".$cname."',`status`='".$status."',`experience`='".$exp."',`efficiency`='".$eff."',`partyid`='".$pid."',`WardNo`='".$wid."' WHERE `candidate_id` = '".$cid."'";

$err = mysqli_query($con, $sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>




