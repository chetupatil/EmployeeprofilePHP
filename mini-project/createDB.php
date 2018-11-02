<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
  $serverName="localhost";
  $username="root";

	$link=mysqli_connect($serverName,$username);
	if($link===false)
	{
		die("error:could not connected" .mysqli_connect_error());
	}
	$sql="CREATE DATABASE myDB3";
	if(mysqli_query($link,$sql))
	{
		echo "database is created";
	}else
	{
		echo "database is not created";
	}
	mysqli_close($link);
?>
</body>
</html>
