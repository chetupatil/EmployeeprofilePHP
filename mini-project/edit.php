<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	 input[type=hidden] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	input[type=email] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: red;
}
	body{
		background-image:url(Images/downloadedit.jpg);
		background-repeat: no-repeat;
		background-size:1400px 1400px;
	}
	img{
		width: 150px;
		height: 150px;
		border-radius: 50%;
	}
	#outerContainer{
		width:100%;
		float: left;
	}
	#innerContainer1{
		width: 25%;
		float: left;
	}
	#innerContainer2{
		width:75%;
		float:left;
		padding-bottom: 5px;
	}
	.formContainer{
		margin-left:150px;
		margin-top: 10px;
		padding-bottom: 5px;
	}
</style>
</head>

<body>
<?php
	$serverName="localhost";
	$username="root";
	$DBname="myDB3";
	$link=mysqli_connect($serverName,$username,'',$DBname);
	if($link===false)
	{
		die("error:not connected");
	}
	?>
	<?php
	if(isset($_GET['edit']))
	{
	$eid=$_GET['edit'];
	$res=mysqli_query($link,"SELECT * FROM emp WHERE eid= $eid");
	//echo $res;
	//print_r($res);
	$row=mysqli_fetch_array($res);
	}
	?>
	
	
	<?php
	header("url=formFill.php");
	mysqli_close($link);
	
	?>
	<div id="outerContainer">
	<div id="innerContainer1">
    <img src="Images/download.png">
	</div>
	<div id="innerContainer2">
    <form action="edit2.php" method="post">
    
	<div class="formContainer">
	<input type="hidden" align="center" name="eid" placeholder="ID" value="<?php echo  $row['eid']?>">
	</div>
	<div class="formContainer">
	<input type="text" name="Newname" align="center" placeholder="Name" value="<?php echo $row['ename']?>">
	</div>
	<div class="formContainer">
     <input type="text" name="Newcname" align="center" placeholder="CompanyName" value="<?php echo $row['companyName']?>">
	</div>
	<div class="formContainer">
	<input type="email" name="email"  align="center" placeholder="Email" value="<?php echo $row['email']?>">
	</div>
	<div class="formContainer">
	<input type="submit" value=" Update" name="submit">
	</div>
	</div>
	</div>
</form>
</body>
</html>
