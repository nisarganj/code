<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}

if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$bid = $_POST['bid'];
$cid = $_POST['cid'];
$wid = $_POST['wid'];
$bname = $_POST['bname'];
$sa = $_POST['sa'];
$spnta = $_POST['spnta'];
$succrate= $_POST['succrate'];
$fb = $_POST['fb'];

//echo "$cid, $cname ,$status";

$sql = "UPDATE `welfareinsertion` SET `bill_name`='".$bname."',`candidate_id`='".$cid."',`ward_id`='".$wid."',`sanctioned_amount`='".$sa."',`spent_amount`='".$spnta."',`success_rate`='".$succrate."',`feedback`='".$fb."' WHERE `bill_id` = '".$bid."'";

$err = mysqli_query($con, $sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>




