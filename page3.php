<?php
   $host = 'localhost:3306';
   $user = 'root';
   $password = '';
   
   $connect = mysqli_connect($host, $user, $password);
   
   if(! $connect ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $start="CREATE DATABASE IF NOT EXISTS panda";
   $output=mysqli_query($connect, $start);
   $db_name='panda';
 
 if(mysqli_select_db($connect,$db_name)){}
 else{echo "Database is not selected";}

$start = "CREATE TABLE user(
firstname VARCHAR(60) NOT NULL ,
lastname VARCHAR(50) NOT NULL ,
email VARCHAR(100) NOT NULL  ,

pass VARCHAR(30) NOT NULL ,
PRIMARY KEY(email)
)";
if (mysqli_query($connect, $start)) {
    echo "Table members  is created successfully";
} else {
    echo "Error creating  this table: " . mysqli_error($connect);
}
$start= "CREATE TABLE profile(
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL ,
dob  DATE,
gender VARCHAR(15) NOT NULL,
mobile BIGINT(12) UNSIGNED,
streetaddress VARCHAR(30) NOT NULL, 
city VARCHAR(15) NOT NULL ,
state VARCHAR(25) NOT NULL,
postalcode BIGINT (10) UNSIGNED,
FOREIGN KEY (email) REFERENCES user(email)
)";
if (mysqli_query($connect, $start)) {
    echo "Table member_info created successfully";
} else {
    echo "Error creating  this table: " . mysqli_error($connect);
}
session_start();
$user_email=$_SESSION['c'];
$user_pass=$_SESSION['d'];
$user_first_name=$_SESSION['a'];
$user_last_name=$_SESSION['b'];
$start = "INSERT INTO members(firstname, lastname,  email ,pass)
VALUES ('$user_first_name','$user_last_name','$user_email','$user_pass')";
if (mysqli_query($connect, $start)) {
    echo "New record created successfully in TABLE members";
} else {
    echo "Error occured : " . $start . "<br>" . mysqli_error($connect);
}

$user_dob=$_POST['date_of_birth'];
$user_gender=$_POST['gender'];
$user_mobile=$_POST['mobile'];
$user_street_add=$_POST['street_add'];
$user_city=$_POST['city'];
$user_state=$_POST['state'];
$user_postal_code=$_POST['postal_code'];
$start = "INSERT INTO member_info(mobile,city,dob,gender,streetaddress,state,postalcode)
VALUES ('$user_mobile','$user_city','$user_dob','$user_gender','$user_street_add','$user_state',$user_postal_code')";
if (mysqli_query($connect, $start)) {
    echo "New record created successfully in TABLE member_info";
} else {
    echo "Error occured : " . $start . "<br>" . mysqli_error($connect);
}
echo"Successful!!"
mysqli_close($connect);
?>
