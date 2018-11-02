<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	header("refresh:1; url=delete.php");
	if(isset($_POST['Submit']))
	{
	$box=$_POST['num'];
			while(list($key,$val)=@each($box))
			{
				$sql1="DELETE FROM emp WHERE eid=$val";
			    mysqli_query($link,$sql1);
			
			}
	}	
	?>
</body>
</html>
