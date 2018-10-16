<?php
$conn = mysqli_connect("localhost","%","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
$userid=$_POST['userid'];
$password=$_POST['password'];
$sql="select * from user where user_id='$userid' and password='$password'";
$result=$conn->query($sql);
if(!$row=$result->fetch_assoc())
{
echo "your password or username incorrect";
}
else{
	$_SESSION['user_id']=$row['user_id'];
header("Location: home.php");
}
}


