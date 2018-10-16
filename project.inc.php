<?php
$conn = mysqli_connect("localhost","%","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
$name=$_POST['name'];
$contact=$_POST['contact'];
$DOB=$_POST['DOB'];
$cifno=$_POST['CIF_No'];
$panno=$_POST['PAN_No'];
$branchid=$_POST['Branch_id'];
$Email=$_POST['Email'];
$ifsccode=$_POST['IFSC_code'];
$userid=$_POST['userid'];
$sq="insert into account(name,contact,dob,cifno,panno,branch_id,Email,ifsccode,user_id)values
('$name','$contact','$DOB','$cifno','$panno','$branchid','$Email','$ifsccode','$userid')";
$result=$conn->query($sq);
if($result)
{header("Location:home.php");}
else{
	echo"duplicate entries entered";
	echo'<a href="home.php">Home</a>';
	}	
}
?>




