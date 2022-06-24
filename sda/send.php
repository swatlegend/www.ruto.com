<?php
$host="localhost";
$user="root";
$password="";
$db="form";
$data=mysqli_connect($host,$user,$password,$db);
if (!$data) {
	echo "prblem";
	# code...
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];

$qry="INSERT INTO `table2`( `name`, `email`, `phone`, `msg`) VALUES ('$name','$email',$phone,'$msg')";
$insert=mysqli_query($data,$qry);
if (!$insert) {
	echo "data incorrect insert";
	
}else{
	echo "data inserted";
}





?>