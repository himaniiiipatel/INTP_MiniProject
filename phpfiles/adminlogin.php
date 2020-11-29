<?php
session_start();

$con = mysqli_connect('localhost', 'id15333090_fitfeelz1','iR<0B_wmIf@ervtb');
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}


?>

<!DOCTYPE html>
<html>
    <head>
	    <title></title>
	    <link rel="stylesheet" type="text/css" href="admin.css">
	    
    </head>
    <body>
       
        <section class="fit">
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white"> <h1> ADMIN LOGIN PAGE </h1></div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="logincheck.php" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="pass" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" class="btn btn-success" action="indexajax.php" name="submit" >
				</form>
			</div>
		</div>
	</div>
</section>
    
    </body>
</html>