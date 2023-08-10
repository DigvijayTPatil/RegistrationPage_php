<?php

session_start();
if(!isset($_SESSION['username'])){ 
header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

<div class="container">
	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2>
	<a href="logout.php"> Logout </a>
</div>

</body>
</html>