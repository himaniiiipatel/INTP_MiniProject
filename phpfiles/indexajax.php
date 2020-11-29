<html>
<head>
  
  <meta charset="UTF-8">
 
<script>
function getUser() {
  usrEmailID = document.getElementById("usrEmailID").value;
  if (usrEmailID == ""){
      return
  }
  var obj = {usrEmail: usrEmailID};
  console.log(usrEmailID);
  var userJSON = JSON.stringify(obj);

  var txt ="";
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    console.log(this.responseText);
  myObj = JSON.parse(this.responseText); 
        console.log(myObj);
        if (myObj.length === 0) { 
            txt = "No details found"
        }
        else{
        for (x in myObj) { 
            id=myObj[x].id;                
            name=myObj[x].username;
            email=myObj[x].email;
        } 
        }
       document.getElementById("id").innerHTML = id;
       document.getElementById("name").innerHTML =name;
       document.getElementById("email").innerHTML = email;
      
    }
  }
  xmlhttp.open("POST","indexphpajaxgetuserdetails.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  console.log(userJSON);
  xmlhttp.send("user=" + userJSON ); 
}
</script>
</head>
<body>
<div>
<h3>Enter user email id </h3>
<input type="text" name="usrEmailID" id ="usrEmailID" >
<br/><br/>
<input type="button" onclick="getUser()" value="Click Me"/>
</div>
<div>
<table border="1" 
           cellpadding="15" id="userDetail" style="width:50%;" >
      <tr>
        <th>User Id</th>
        <th>User Name </th>
        <th>Email</th>
        
      </tr>
      <tr>
        <td id="id">-</td>
        <td id="name">-</td>
        <td id="email">-</td>
        
      </tr>
    </table>
</div>

<a href="logout.php">Log Out</a>
<a href ="display.php">view users</a>
</body>
</html>