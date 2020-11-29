<?php
session_start();

$con = mysqli_connect('localhost', 'id15333090_fitfeelz1', 'iR<0B_wmIf@ervtb' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'id15333090_fitfeelz');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  admin where user='$username' and pass='$password' ";
	$query = mysqli_query($con,$sql);
    
    $link_address1 = 'indexajax.php';
	$row = mysqli_num_rows($query);
		if($row == 1){ 
		    echo ("<br>");
		    echo ("login successful ");
		    echo ("<br>");
			echo ("<a href='".$link_address1."'>Index Page</a>");
		}else{
		    echo ("<br>");
			echo "login failed";
			
		}

}


?>