<?php
session_start();

$_SESSION['a'] = $_POST['first_name'];
$_SESSION['b'] = $_POST['last_name'];
$_SESSION['c'] = $_POST['email'];
$_SESSION['d'] = $_POST['pass'];


?>
<!DOCTYPE html>
<html>
<head>
<title>user info</title>
<link type="text/css" rel="stylesheet" href="link.css">
</link>
</link>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=2">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#E5E7E9">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <center><a class="navbar-brand" href="#">assignment </a></center>
    </div>
    <ul class="nav navbar-nav">
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
	<li><a href="#"></a></li> 
      <li><a href="#"><strong>Home</strong></a></li>
      
	  <li><a href="assignment.html"><strong>login</strong></a></li>
   
      <li ><a href="about.html"><strong>About</strong></a></li> 
    </ul>
  </div>
</nav><center><center>
<h1 style="background-color:rgb(210,180,140)"> Few more details to fill </h1>
<br>
<br>
<form method="post" action='page3.php'>
<strong>First name : </strong><br> <input type="text" name="firstname">
<br>
<br>
<strong>Last name : </strong><br> <input type="text" name="lastname">
<br>
<br

<strong>date of birth :</strong><br> <input type="text" name="date_of_birth" value="enter as dd/mm/yy">
<br>
<br>
<strong>gender:</strong><br>
<input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
<br>
<br>
<strong>mobile :</strong><br> <input type="text" name="mobile" value="+91">
<br>
<br><strong>Street Address : </strong><br> <input type="text" name="street_add">
<br>
<br>
<strong>City :</strong><br> <input type="text" name="city">
<br>
<br>
<strong>State :</strong><br> <input type="text" name="state">
<br>
<br>
<strong>Postal Code :</strong><br> <input type="text" name="postal_code">
<br>
<br>
<input type='submit'name='submit' value='Submit'>
</form>
<br>
<br>
</center>
</body>
</html>