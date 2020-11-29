
<html>
<head>
<?php

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $ok = true;
    $messages = array();

    if ( !isset($username) || empty($username) ) {
        $ok = false;
        $messages[] = 'Username cannot be empty!';
    }

    if ( !isset($password) || empty($password) ) {
        $ok = false;
        $messages[] = 'Password cannot be empty!';
    }

    if ($ok) {
        if ($username === 'dcode' && $password === 'dcode') {
            $ok = true;
            $messages[] = 'Successful login!';
        } else {
            $ok = false;
            $messages[] = 'Incorrect username/password combination!';
        }
    }

    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );

?>
function getUser() {
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign_In</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<style>
		#hr{
        height:2px;
        margin:30px 0 30px 0;
        background:#1A5276; 
        width: 100%;   
    }
    #foot-lnk{
        margin-left: 100px;
    }
    #img-area img{
    max-width: 25%;
    max-height: 200px;
    right: 0;
    top: 0;
    margin-top: 70px;
    margin-right: 150px;
    position: absolute;
    display: block;
    }
	</style>
</head>
<?php
require("connect.php");
$errors = [];
$errorMessage = '';
@$username=$_POST['username'];
@$password=$_POST['password'];
if ($_POST['submit1']){
    $write = "INSERT INTO register(username,password) VALUES('$username', '$password')";
     if (mysqli_query($conn, $write)) {
  echo "Login successfully";
} else {
  echo "Error: " . $write . "<br>" . mysqli_error($conn);
}
}
?>
<body>
    
    <div class="nav">
            <div class="logo">
                <h4 style="color: black;">FIT FEELZ</h4>
            </div>
            <div class="links">
                <a href="index.html">Home</a>
                <a href="index.html">About Us</a>
                <a href="index.html">Contact Us</a>
                 <a href="signup.php">SignIn/SignUp</a>
            </div>
        </div>
    <div class="wrap">
    <div class="login">
     	
        
        <input id="tab-1" type="radio" name="tab" class="s1" checked>
        <label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="s2">
        <label for="tab-2" class="tab">Sign Up</label>
       
        <div class="lform">

      <div class="s1-htm" id="Sin">
      	<form name="myform" method="post" action="index.html"  onsubmit="return validateform()" >
      <div class="head">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input" placeholder="Username" >
                </div>
                <div class="head">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input" data-type="password" placeholder="Password">
                </div>
                <div class="head">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Remember Me</label>
                </div>
                <div class="head">
                    <input type="submit" name="submit1" class="button" font="bold" value="Sign In">
                </div>
                <div id="hr"></div>
                <div id="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
	</div>
	</form>
	<?php
require("connect.php");
$errors = [];
$errorMessage = '';
/*$username=(isset($_POST['username']) ? $_POST['username'] : null );
$password=(isset($_POST['password']) ? $_POST['password'] : null );
$repeatpassword=(isset($_POST['repeatpassword']) ? $_POST['repeatpassword'] : null );
$email=(isset($_POST['email']) ? $_POST['email'] : null );*/
@$username=$_POST['username'];
@$password=$_POST['password'];
@$repeatpassword=$_POST['repeatpassword'];
@$email=$_POST['email'];

if ($_POST['submit']){
    $write = "INSERT INTO register(username,password,repeatpassword,email) VALUES('$username', '$password', '$repeatpassword', '$email')";
    
    /*if ($conn->query($write) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $write . "<br>" . $conn->error;
    }*/
    if (mysqli_query($conn, $write)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $write . "<br>" . mysqli_error($conn);
}
}
?>
	
	</div>
	<div class="s2-htm" id="Sup">
    <form name="f1" action="" method="POST" onsubmit="return matchpass()" >  

   		<div class="head">
                    <label for="user" class="label">Username</label>
                    <input id="user" name="username" type="text" class="input" placeholder=" Username" >
                </div>
                <div class="head">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Password">
                </div>
                <div class="head">
                    <label for="pass1" class="label">Repeat Password</label>
                    <input id="pass1" name="repeatpassword" type="password" class="input" data-type="password" placeholder="Re-enter Password">
                </div>
                <div class="head">
                    <label for="mail" class="label">Email Address</label>
                    <input id="email" name="email" type="text" class="input" placeholder=" Email" >
                    
                </div>
                <div class="head">
                    <input type="submit" name="submit" class="button" value="Sign Up">
                </div>
                <div id="hr"></div>
                <div id="foot-lnk">
                    <label for="tab-1">Already a member?</label>
    	</form>
		</div>
	</div>
    </div>
   	</div>
	</div>
    <script> 
    function validateEmail(elementValue)
    { 
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
        return emailPattern.test(elementValue); 
} 
 function checkPassword(str)
  {
    // at least one number, one lowercase and one uppercase letter
    // at least six characters
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    return re.test(str);
  }
function validateform(){  
var user=document.myform.user.value;  
var pass=document.myform.pass.value;  
  
if (user==null || user==""){  
  alert("Username can't be blank");  
  return false;  
}
else 
    if (checkPassword(pass)){
        return true;}
        else{
            alert("Password must be at least 8 characters long containing at least one UPPERCASE/lowercase and numbers");  
            return false;  
        } 
 }
 function matchpass(){  
var uname=document.f1.user.value;
var fpwd=document.f1.pass.value;  
var spwd=document.f1.pass1.value;
var em=document.f1.mail.value;

if (uname==null || uname==""){  
  alert("Name can't be blank");  
  return false;  
}
else
    if(fpwd==null || fpwd==""){
        alert("Password can't be blank");
        return false;
    }
    else
        if(checkPassword(fpwd)==false){
            alert("Password must be at least 8 characters long containing at least one UPPERCASE/lowercase and numbers");  
            return false;
        }   
        else
            if(fpwd!=spwd){
                alert("Passwords must be same!!");
                return false;
            }
            else
                if (em==null || em==""){
                    alert("Email can't be blank");
                    return false;
                }
                else 
                    if(validateEmail(em))
                        return true;
                    else{
                        alert("The email doesn't match the pattern required (@ and . is a must)");
                        return false;
                    }

} 
</script>
</body>
</html>