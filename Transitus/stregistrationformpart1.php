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
  <li><a href ="signup.php" style="text-decoration:none"><button class="button1">Back</button></a></li>

  </ul>
  </nav>
</div>
<span style="display:block; height: 100px;"></span>
<div>
<center><form name="myForm"action="mainpage.php" onsubmit = "return(validate());">
  <div class="imgcontainer">
    <img src="registration.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
   
    <input type="text" placeholder="Enter Name" name="name" >
	<input type="text" placeholder="Enter Username" name="uname" >    
	<input type="email" placeholder="Enter Email" name="email" >    
    <input type="password" placeholder="Enter Password" name="psw" >
        
    <button type="submit">Register</button>
  </div>
</form></center>
</div>
<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
		 if( document.myForm.uname.value == "" ) {
            alert( "Please provide your username!" );
            document.myForm.uname.focus() ;
            return false;
         }
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
		 if( document.myForm.psw.value == "" ) {
            alert( "Please provide your password!" );
            document.myForm.psw.focus() ;
            return false;
         }
         
         return( true );
      }
   //-->
</script>
</body>
</html>
