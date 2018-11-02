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
	$DBname="myDB";
	$link=mysqli_connect($serverName,$username,'',$DBname);
	if($link===false)
	{
		die("error:connection is field" .mysqli_connect_error());
	}

     if(isset($_REQUEST['Submit']))
	{
		$name=$_POST['username'];
		$pwd=$_POST['password'];
        $sql="SELECT * FROM freshemp WHERE fename='$name' AND pwd='$pwd'";
		$row=mysqli_query($link,$sql);
	
		
		if($result=mysqli_num_rows($row)>0)
		{
			
			header("refresh:1;url=formFill.php");
		}else
		{
			header("refresh:1;url=loginPage.php");
		}
	}
	
	mysqli_close($link);
	?>
	
</body>
</html>
