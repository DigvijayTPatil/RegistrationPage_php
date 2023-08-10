<?php


session_start();
header('location:login.php')

$con = mysqli_connect('localhost','root','@3rdFeb93');
if ($con) {
	echo "Connection is created";
} else{
	echo "Not connected";
}

mysqli_select_db($con,'sessionpractical')

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " select * from signin where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){

	$_SESSION['username'] = $name;
	header('location:home.php');



} else{
	
	header('location:login.php');
}

?>