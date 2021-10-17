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
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
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
  <li><button class="button1">Back</button></li>

  </ul>
  </nav>
</div>
<span style="display:block; height: 100px;"></span>
<div>
<center><form  method="POST">
  <div class="imgcontainer">
    <img src="login.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
   
    <input type="text" placeholder="Enter Username" name="uname" required>

    
    <input type="text" placeholder="Enter Password" name="pasw" required>
        
    <input class="button" type="submit" name="Submit" value="Login">
    
   <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	<p>Forgot password? &nbsp; <a href="forgotpassword.php">Reset your password.</a></p>
  </div>
</form></center>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
  {
$un = $_POST['uname'];
$pass=$_POST['pasw'];

if(isset($_POST["Submit"]))
{
  define('DB_HOST', 'localhost:3308');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'web_tech');

    $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if(!$mysqli)
    {
      die("Connection failed: " . $mysqli->error);
    }

    

      $query ="SELECT uname , pwd FROM details ";
    $result = $mysqli->query($query);
        // output data of each row

      if ($result->num_rows > 0) 
      {
      
        while($row = $result->fetch_assoc()) 
        {
          
          $x = $row["pwd"];
		  $y =$row["utype"];
          if ($x == $pass)
          {
            
            if($un == $row["uname"])
              {
				  if($y==1)
                echo'<script> window.location="front_page.php"; </script> ';
				elseif($y==2)
				{}
				else
				{}
                
            #return;
          }
          }
        }
        $message = "Invalid Login";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
      
      
      //header( "Location: http://localhost/transitus/front_page.php" );
      
    }

}



?>

</body>
</html>
