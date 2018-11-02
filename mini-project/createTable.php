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
	$DBname="myDB3";
	$link=mysqli_connect($serverName,$username,'',$DBname);
	if($link===false)
	{
		die("error:could not connected" .mysqli_connect_error());
	}
	$sql="CREATE TABLE emp(
	eid int(6) PRIMARY KEY,
	ename VARCHAR(30) NOT NULL,
	companyName VARCHAR(30) NOT NULL,
	email VARCHAR(30))";
	if(mysqli_query($link,$sql))
	{
		echo " created a table";
	}else
	{
		echo " not created table";
	}
	mysqli_close($link);
	?>
</body>
</html>
