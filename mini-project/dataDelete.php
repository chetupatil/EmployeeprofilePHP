<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p id="demo"></p>
<script>
	//document.getElementById("demo").innerHTML=window.location.href;	
</script>
<?php
	
     $serverName="localhost";
	 $username="root";
	 $DBname="myDB3";
	$link=mysqli_connect($serverName, $username,'',$DBname);
	if($link===false)
	{
		die("error:not connected" .mysqli_connect_error());
	}
	if(isset($_POST['num']))
	{
		$eid=$_POST['num'];
		
		$a=count($eid);
		
		for($i=0; $i<$a;$i++)
		{
		$eid1=$eid[$i];
		$row=mysqli_query($link,"DELETE FROM emp WHERE eid=$eid1");
	   }
	    // $row=mysqli_query($link,"DELETE FROM emp WHERE eid=$eid");
		if($row==true)
		{
			echo "<script>alert('record are deleted');</script>";
		}else{
			echo "<script>alert('record not deleted');</script>";
		}
 }
	
     else{
		 echo $a1;
		 echo "hello";
	 }
	header("refresh:1;url=formFill.php");
	mysqli_close($link);
	?>
	
</body>
</html>`
