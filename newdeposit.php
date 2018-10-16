<?php
$conn = mysqli_connect("localhost","%","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
include 'pheader.php';
$amount=(int)$_POST['amount'];
$v=$_SESSION['user_id'];
$sql="insert into permission(user_id)values('$v')";
$result=$conn->query($sql);
$sql="select transaction_id from permission where user_id='$v'";
$result=$conn->query($sql);
while($row = mysqli_fetch_array($result))
{
$r=$row['transaction_id'];}
$sql="insert into deposit(user_user_id,admin_user_id,amount,transaction_id)values('$v','123','$amount','$r')";
$result=$conn->query($sql);
echo"Deposit request submitted";
}
