<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}

if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$pid = $_POST['pid5'];
$pname = $_POST['pname5'];
$noc = $_POST['noc5'];
$status = $_POST['status5'];
$success = $_POST['success5'];


//echo "$cid, $cname ,$status";

//$sql = "INSERT INTO partyinsertion INSERT INTO `partyinsertion`(`partyid`, `partyname`, `no_of_members`, `status`, `success_rate`) VALUES ('$pid','$pname','$noc','$status','$success')";
$sql = "INSERT INTO `partyinsertion` (`partyid`, `partyname`, `no_of_members`, `status`, `success_rate`) VALUES ('$pid','$pname','$noc','$status','$success')";

$err = mysqli_query($con,$sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>