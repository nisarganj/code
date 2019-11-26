<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}


if(isset($_POST['voterid'])){
if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$voterid = $_POST['voterid'];
$wardid = $_POST['wardid'];

$sql= "SELECT * FROM `voterinsertion` WHERE `voter_id` = '".$voterid."'AND `ward_id` = '".$wardid."'"; 
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1)
{


echo '<html>';
echo '<head>';
echo '<link rel = "stylesheet" type = "text/css" href = "voterpage.css">';
echo '<title>Voter LoggedIn</title>';
echo '</head>';
echo '';
echo '<body>';
echo '<h1>Details for Ward '.$wardid.'</h1>';
echo '<center>';
echo '<div class = "V1" >';

$sql2= "SELECT `candidate_id`, `candidate_name`, `status`, `experience`, `efficiency`, `partyid`, `WardNo` FROM `candidateinsertion` WHERE `WardNo` = '".$wardid."'";

$retval=mysqli_query($con,$sql2);
if(! $retval ) {
      die('Could not get data: ');}

$num_rows = mysqli_num_rows($retval);
if ($retval->num_rows > 0) {
	echo '<h3>Candidate Details</h3>';
   	echo "<table border='1'>
   	<tr>
   		<th>Candidate Name</th>
   		<th>Status</th>
   		<th>Experience</th>
   		<th>Efficiency</th>
   		<th>Party ID</th>
   	</tr>";
	while($row = $retval->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['candidate_name'] . "</td>";
		echo "<td>" . $row['status'] . "</td>";
		echo "<td>" . $row['experience'] . "</td>";
		echo "<td>" . $row['efficiency'] . "</td>";
		echo "<td>" . $row['partyid'] . "</td>";
		echo "</tr>";
   	}
   	echo "</table>";
}



$sql3 = "SELECT `bill_id`, `bill_name`, `candidate_id`, `ward_id`, `sanctioned_amount`, `spent_amount`, `success_rate`, `feedback` FROM `welfareinsertion` WHERE `ward_id` = '".$wardid."'";

$retval2=mysqli_query($con,$sql3);
if(! $retval2 ) {
      die('Could not get data: ');}

$num_rows = mysqli_num_rows($retval2);
if ($retval2->num_rows > 0) {
	echo '<h3>Welfare Details</h3>';
   	echo "<table border='1'>
   	<tr>
   		<th>Work Name</th>
   		<th>Candidate ID</th>
   		<th>Sanctioned Amount</th>
   		<th>Spent Amount</th>
   		<th>Success Rate</th>
   		<th>Feedback/th>
   	</tr>";
	while($row = $retval2->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['bill_name'] . "</td>";
		echo "<td>" . $row['candidate_id'] . "</td>";
		echo "<td>" . $row['sanctioned_amount'] . "</td>";
		echo "<td>" . $row['spent_amount'] . "</td>";
		echo "<td>" . $row['success_rate'] . "</td>";
		echo "<td>" . $row['feedback'] . "</td>";
		echo "</tr>";
   	}
   	echo "</table>";
}






$sql4 = "SELECT `voterid`, `before_ward`, `after_ward`, `changedat` FROM `voterwardchange` WHERE `voterid` = '".$voterid."'";

$retval3=mysqli_query($con,$sql4);
if(! $retval3 ) {
      die('Could not get data: ');}

$num_rows = mysqli_num_rows($retval3);
if ($retval3->num_rows > 0) {
   echo '<h3>Ward Change History for voter '.$voterid.'</h3>';
      echo "<table border='1'>
      <tr>
         <th>Previous WardNo</th>
         <th>New WardNo</th>
         <th>Date of Change</th>
      </tr>";
   while($row = $retval3->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['before_ward'] . "</td>";
      echo "<td>" . $row['after_ward'] . "</td>";
      echo "<td>" . $row['changedat'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";
}


echo '<div id="vpopup1">';
echo '<button class ="but1">Cancel</button>';
echo '</div>';
echo '</div>';
echo '</center>';
echo '';
echo '';
echo '<center>';
echo '<form>';
echo '<button class = "but1" type = "submit" formaction = "main.html">Go Back</button>';
echo '</form><br><br>';
echo '</center>';
echo '</body>';
echo '</html>';













	//header("Location: http://localhost/voterpage.html"); 
	exit;

}
else{
	echo" unsuccessful login";
	//header("Location: http://localhost/main.html"); 
	exit;
}

}
?>