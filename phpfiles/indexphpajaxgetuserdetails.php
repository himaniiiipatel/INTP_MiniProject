<?php header("Content-Type: application/json; charset=UTF-8"); ?>
<?php include 'connect.php';?>
<?php
$obj = json_decode($_POST["user"], false);
//echo json_encode($obj->usrEmail);
$emailid=$obj->usrEmail;
//$emailid = "ralop@ertocp.com";
$output = [];
$sql = "SELECT * from register where email ='$emailid'";
//echo $sql;
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
	$output[]=$row;
  }
$sresult = json_encode($output);
echo $sresult;
mysqli_close($conn);
?>