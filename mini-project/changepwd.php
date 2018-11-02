<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<style>
	#container{
		width: 100%;
		float: left;
		}
	#uppercontainer{
		width:25%;
		margin: 5px;
		float: left;
	}
	#downcontainer{
		width: 50%;
        float: left;
		margin-left: 240px;
	}
	input[type=number] {
    width: 50%;
    padding: 12px 20px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: red;
}

div {
    border-radius: 5px;
   
    padding: 20px;
	}
	#log{
		background-color: deepskyblue;
		color:brown;
		padding:12px 15px;
		margin-left:120px;
		border-radius: 6px;
		cursor:grab;
	} 
</style>
</head>

<body style="background-color: #f2f2f2;">

	<div id="container">
	<div id="uppercontainer">
	     <img src="Images/passwordimage.jpg">
		
	</div>
	<div id="downcontainer">
	<h3 style="margin-left: 55px;">Change the Password</h3>
	<form method="post">
		<span id="errorSpan" style="color: red; display: none;">Error!!!!</span>
		
		<div>
			<input type="text" name="oldPwd" placeholder="OldPassword">
		</div>
		<div>
			<input type="text" name="newPwd" placeholder="NewPassword">
		</div>
		
		<div>
			<input type="submit" value="SetPwd" name="changePWD">
			
		</div>
		
	</form>
	</div>
	</div>
	
	<?php
	$serverName="localhost";
	$username="root";
	$DBname="myDB";
	$link=mysqli_connect($serverName,$username,'',$DBname);
	if($link===false)
	{
		die("error:not a connected".mysqli_connect_error());
		}
	if(isset($_REQUEST['changePWD']))
	{
		?>
		<script>
			$('#errorSpan').show();
			window.setTimeout(function(){
				$('#errorSpan').hide();
			}, 4000);
		</script>
		<?php
		
		
		$oldpwd=$_POST['oldPwd'];
		$newpwd=$_POST['newPwd'];
		
		    $sql="UPDATE freshemp SET pwd='$newpwd' WHERE pwd='$oldpwd'";
			$row=mysqli_query($link,$sql);
		    if($row==true)
			{
			echo "<script> alert('update sucessfully'); window.location='loginPage.php';</script>";
			}else{
				echo "<script> alert('update unsucessfylly');</script>";
			}
			
	
	
	}
	mysqli_close($link);
	?>

</body>
</html>
