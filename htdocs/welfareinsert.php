<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}

if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$bid = $_POST['bid'];
$bname = $_POST['bname'];
$cid = $_POST['cid'];
$wid = $_POST['wid'];
$sa = $_POST['sa'];
$spnta = $_POST['spnta'];
$succrate= $_POST['succrate'];
$fb = $_POST['fb'];

//echo "$cid, $cname ,$status";

$sql = "INSERT INTO `welfareinsertion`(`bill_id`,`bill_name`,`candidate_id`, `ward_id`, `sanctioned_amount`, `spent_amount`, `success_rate`, `feedback`) VALUES  ('$bid','$bname','$cid','$wid','$sa','$spnta','$succrate','$fb')";

$err = mysqli_query($con, $sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>