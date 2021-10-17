<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
<style>
body {font-family: 'Noto Sans';}
form {border: 3px solid #f1f1f1;
 border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px #888888;
width:500px;
display: inline-block;
float:center;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #1b1d1d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
 
}

.container {
  padding: 8px;
  margin: 10px;
  width:400px;

}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.button1 {
  background-color: #ffffff;
  border: none;
  color: black;
  text-align: center;
 float: center;
   padding: 10px;
  display:block;
  font-size: 16px;  
  height:20px;
  width:100px;
  font-family:'Noto Sans';
  font-weight: bold;

}
.container{
  clear:both;
  overflow:auto;
}

nav{float:right;overflow: hidden;}

.logo img{float:center;
padding:2%;}

ul li{
  display: inline-block;
  font-size:20px; font-family:'Noto Sans';
}

ul li:hover{
  color:orange;

}
body {
  margin: 0px;
 font-family: 'Noto Sans';
}


.logo{
	position:fixed;
	top:0%;
	padding:5px;
}
.jumbo
{
	margin: 0;
    padding: 0;
	
text-align:center;
}

#su{
text-align:left;
margin-left:10%;

}

h2{
  font-weight: bold;
}

.text{
font-weight: bold;
	font-size:25px;
}
#transit{
	font-weight:bold;
	font-size:50px;
	font-family:''Noto Sans'';
	margin: 0;
    padding: 0;
}
.t
{
font-weight:bold;
	font-size:20px;
	font-family:''Noto Sans'';
	margin: 0;
    padding: 0;}
.train,.hire{
	align:center;
}
.txt{
text-align: justify;
font-size:20px;}
.nav{
	position: fixed;
  top: 0;
  width: 100%;
  height:13%;
  background-color:#ffffff;
   -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;

}
.button {
  background-color: #1b1d1d;
  border: none;
  color: white;
  text-align: center;
  display:block;
  font-size: 16px;  
  height:50px;
  width:200px;
}
/* The Modal (background) */
.modal {
 width: 300px;
   height: 300px;
   position: absolute;
   left: 50%;
   top: 50%; 
   margin-left: -150px;
   margin-top: -150px;
}

/* Modal Content/Box */
.modal-content {
	align:center;
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;

  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
/* Modal Header */
.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

/* Modal Body */
.modal-body {padding: 2px 16px;}

/* Modal Footer */
.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@keyframes animatetop {
  from {top: -300px; opacity: 0}
  to {top: 0; opacity: 1}
}
.button {
  background-color: #1b1d1d;
  border: none;
  color: white;
  text-align: center;
  display:block;
  font-size: 16px;  
  height:50px;
  width:200px;
}
</style>
</head>
<body>
<div class="nav">
<div class="logo">
  <img src="flogo.png" alt="" width="180px"/>
  </div>
<nav class="tn">
  <ul>
  <span style="display:block; width: 150px;"></span>
  <li><a href ="login.php" style="text-decoration:none"><button class="button1">Back</a></button></li>

  </ul>
  </nav>
</div>
<span style="display:block; height: 100px;"></span>
<div>
<center><form name="myForm" method="post" action="mainpage.php">
  <div class="imgcontainer">
    <img src="forgotpassword.png" alt="Avatar" class="avatar">
  </div>
  <p>Forgot Password?</p>
  <p>Please enter your email:</p>
  <div class="container">
   
    <input style="width:90% ; height:30px" type="text" placeholder="Enter Email" name="email" onblur="checkEmail(this.value)">
        
    <button name="next"id="myBtn" class="button" type="submit" onclick="validate()">Next</button>
	<script>document.getElementById("myBtn").disabled = true;</script>
  </div>
</form></center>
</div>


<script type = "text/javascript">
   <!--

      // Form validation code will come here.
      function checkEmail(str)
{
	
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(str))
    {document.getElementById("myBtn").disabled = false;
	}
	else
	{
		alert("Please enter a valid email address");
	}

}

	  
   //-->
</script>
</body>
</html>
