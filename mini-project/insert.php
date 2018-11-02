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
        $Eid=$_POST['eid'];
        $Ename=$_POST['name'];
        $CompanyName=$_POST['cname'];
        $Email=$_POST['email'];
        $sql="insert into emp(eid, ename,companyName,email) VALUES ('$Eid','$Ename','$CompanyName','$Email')";
        $row=mysqli_query($link,$sql);
	   if($row)
	   {
		echo $row;
	   echo "Record created sucessfully";
	   header("refresh:1;url=formFill.php");
	   }
	  else
	  {
	  echo $row;
      echo "Record not created sucessfully";
	  header("refresh:5;url=table2.html");
	 }
	  mysqli_close($link);
	
?>
	

</body>
</html>
