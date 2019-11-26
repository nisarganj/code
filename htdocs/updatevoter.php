
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

$sql = "UPDATE `voterinsertion` SET `voter_name`='".$vname."',`dob`='".$dob."',`ward_id`='".$wid."' WHERE `voter_id` = '".$vid."'";


$err = mysqli_query($con, $sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>




