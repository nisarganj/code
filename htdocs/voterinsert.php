<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}

if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$vid = $_POST['vid'];
$vname = $_POST['vname'];
$dob = $_POST['dob'];
$wid = $_POST['wid'];

//echo "$cid, $cname ,$status";

$sql = "INSERT INTO `voterinsertion`(`voter_id`, `voter_name`, `dob`, `ward_id`) VALUES ('$vid','$vname','$dob','$wid')";

$err = mysqli_query($con, $sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>