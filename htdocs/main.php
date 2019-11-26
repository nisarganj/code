<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}


if(isset($_POST['adminid'])){
if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$adminid = $_POST['adminid'];
$password = $_POST['password'];
$sql= "SELECT * FROM `admi` WHERE `adminid` = '".$adminid."' AND `password` = '".$password."'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1)
{
	echo"login successful";
	header("Location: http://localhost/adminpage.html"); 
	exit;

}
else{
	echo" unsuccessful login";
	//header("Location: http://localhost/main.html"); 
	exit;
}

}

?>