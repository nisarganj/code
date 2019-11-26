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
$pid = $_POST['pid1'];
$wid = $_POST['wid1'];

//echo "$cid, $cname ,$status";

//$sql = "INSERT INTO candidateinsertion (cid,cname,status,exp,eff,pid) VALUES ('$cid','$cname','$status','$exp','$eff','$pid')";
//$sql = "INSERT INTO `candidateinsertion` (`cid`, `cname`, `status`, `exp`, `eff`, `pid`) VALUES ('4', 'abc', 'working', '12', '50', '1')";
$sql = "INSERT INTO `candidateinsertion`(`candidate_id`, `candidate_name`, `status`, `experience`, `efficiency`, `partyid`, `WardNo`) VALUES('$cid', '$cname','$status','$exp','$eff', '$pid', '$wid')";

$err = mysqli_query($con,$sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>