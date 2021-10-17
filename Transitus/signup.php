<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Navbar with Logo Image</title>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<link rel="stylesheet" href="sl.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style >
    <style>
*{transition:all 0px.3s ease-in-out;}

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

.topnav {
  overflow: hidden;
  background-color: #ffffff;
  alignment:right;
   border: 0px;
  position:sticky;
  position:fixed;
  box-shadow: none;

}

.topnav a {
  float: right;
  display: block;
  color: black;
  text-align: center;

  text-decoration: none;
  font-size: 17px;
      box-shadow: none;
	   border: 0px;

}

.topnav a:hover {
  background-color: #ddd;
  color:#ffffff;
      box-shadow: none;
	   border: 0px;

}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
      box-shadow: none;
	   border: 0px;

}

.topnav .icon {
  display: none;
      box-shadow: none;
	   border: 0px;

}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
	    box-shadow: none;
		 border: 0px;

  }
}
.logo{
	position:fixed;
	top:0%;
	padding:5px;
}
.topnav, .navbar navbar-expand-md navbar-light bg-light{
	text-align:right;
	    box-shadow: none;
 border: 0px;
  position:fixed;

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

th, td ,tr{
  padding-left: 10%;
  padding-right: 10%;
 
  margin-left:20%;
  margin-right:20%;
  width:400px;
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
  text-decoration: none;
  width:100px;
  font-family:'Noto Sans';
  font-weight: bold;

}
.container{
	position: fixed;
  top: 0;
  width: 100%;
  height:13%;
  background-color:#ffffff;
   -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;

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

</style>
</style>
</head>
<body>

<div class="container">
<div class="logo">
  <img src="flogo.png" alt="" width="180px"/>
  </div>
<nav class="tn">
  <ul>
  <span style="display:block; width: 100px;"></span>
  <li><a href ="login.php" style="text-decoration:none"><button class="button1">Login</button></a></li>

  </ul>
  </nav>
</div>

	<span style="display:block; height: 80px;"></span>
	<div class="jumbo">
  <p id="transit">Transitus</p>
  <p class="t">Let us help you become the right person for the job of your dreams!</p>
  <!--<h1 id="su">Sign Up</h1>-->
</div>
<table width=100%>
<tr>
<td>
      <p class="text">Train to get Hired</p>
	  </td>
	  <td>
      <p  class="text">Hire the Best</p>
	  </td>
	  </tr>
	  <tr>
	  <td>
      <p class="txt">Improve your coding skills and aptitude skills and find the best job, best suited for you.</p>
     
      </td>
	  <td>
      <p class="txt">Hire talent for your company from our well-curated list of individuals.</p><span style="display:block; height: 42px;"></span>
      </td>
	  </tr>
	  <tr>
	  <td>
	  <div class="train"><img align="center" src="training.png"></div>
	  </td>
	  <td>
	   <div class="hire"><img align="center" src="career.png"></div>
	  </td>
	  </tr>
	  <tr><td>
	  <a href ="stregistrationformpart1.php" style="text-decoration:none"><button class="button">Sign Up as a Student</button></a></td>
	  <td><a href ="cpregistrationformpart1.php" style="text-decoration:none"><button class="button">Sign Up as a Company</button></a></td>
	  </tr>
	  </table>
	  
	 

<!--<div class="image">
 <a href="#" class="navbar-brand">
            <img src="logo.png" height="30%" width="30%" alt="Transitus">
        </a></div>-->
</body>
</html>
