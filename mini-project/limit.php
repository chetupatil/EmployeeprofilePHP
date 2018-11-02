<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->
  
  
 <!--
  <link rel="stylesheet" href="C:/xampp/htdocs/mytestings/mini-project/bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="C:/xampp/htdocs/mytestings/mini-project/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
-->
<!--
<link href="C:/xampp/htdocs/mytestings/mini-project/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="C:/xampp/htdocs/mytestings/mini-project/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
 
 -->

</head>

<body>

 
 
<?php
	$serverName="localhost";
	$username="root";
	$DBname="myDB3";
	$link=mysqli_connect($serverName,$username,'',$DBname);
	if($link==false)
	{
		die("error:not connected" .mysqli_connect_error());
	}
	
	$sql="SELECT * FROM emp LIMIT 5 OFFSET 0";
	$result=mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($result))
	{
		echo $row['eid']; 
		echo $row['ename'];
		echo $row['companyName'];
		echo $row['email'];?><br><?php
	}
	mysqli_close($link);
	
	?>

 
</body>
</html>
