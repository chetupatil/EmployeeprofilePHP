<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script>
$(function(){
	$("#registered-form").validate({
		rules:{
			    firstname:"required",
			    password:{
				  required:true,
				  minlength:"5"
			     },
			    email:"required",
			 
		},
		messages:{
			firstname:"enter the valid firstname",
			password:{
                     required:"enter required password",
				     minlength:"enter the minlength must be 5 digit long",
			         },
			email:"enter a valid email id",
			
		},
		submitHandler:function(form){
			form.submit();
		},
		
	});
});	
	
</script>
</head>

<body>
<?php
	$serverName="localhost";
	$username="root";
	$DBname="myDB1";
	$link=mysqli_connect($serverName,$username,'',$DBname);
	if($link==false)
	{
		die("connection failed" .mysqli_connect_error());
	}
	if(isset($_POST['submit']))
	{
		echo "hi";
	$f_name=$_POST['firstname'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$sql="insert into students value('$f_name','$pass','$email')";
	$row=mysqli_query($link,$sql);
		echo $row;
	if($row==1)
	{
		echo "record s updated";
	}else
	{
		echo " failed to updated";
	}
	}
	?>
<form action="" id="registered-form" method="post" novalidate="novalidate">
<div class="label">	<input type="text"  id="firstname"name="firstname" placeholder="FirstName"></div>
<div class="label">	<input type="password" id="password" name="password" placeholder="PassWord"></div>
	<div class="label">	<input type="email"  id="email" name="email" placeholder="Email"></div>
	<div class="label"><input type="submit" name="submit" value="submit"></div>
	
</form>

</body>
</html>
