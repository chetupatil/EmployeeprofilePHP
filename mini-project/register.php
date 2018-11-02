<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
 input[type=password] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	input[type=text] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	input[type=email] {
    width: 25%;
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
	#back{
		background-color:yellowgreen;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 2px;
    cursor: pointer;
		border-radius: 5px;
		
	}
</style>
</head>

<body>
<?php
	$serverName="localhost";
	$username="root";
	$DBname="myDB";
	$link=mysqli_connect($serverName,$username,'',$DBname);
	if($link===false)
	{
		die("error:filed to connect" .mysqli_connect_error());
	}
	if(isset($_POST['submit']))
	{
		
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		$gender=$_POST['gender'];
		$sql="INSERT INTO freshemp(fename,email,pwd,gender) VALUES ('$name','$email','$pwd','$gender')";
		$row=mysqli_query($link,$sql);
		
	}
	?>
    <?php
	   
		mysqli_close($link);

	?>
	<h1>Create an ACcount</h1>
<form method="post">
<div>
	<input type="text" name="fname" placeholder="Name">
</div>
<div>
	<input type="email" name="email" placeholder="Email">
</div>
<div>
	<input type="password" name="pwd" placeholder="SET Password">
</div>
<div>
	<input type="radio" name="gender" value="male" >male
	<input type="radio" name="gender" value="female">female
</div>
<div>
	<input type="submit" name="submit" value="createAccount">
	</div>
	<div>
	<a href="loginPage.php"><button type="button" name="back"  id="back">Back</button></a>
	</div>
</form>
</body>
</html>
