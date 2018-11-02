<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Untitled Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	</script>
	<script>
		$(document).ready(function(){
			$("input").focus(function(){
				$(this).css("background-color","grey");
			});
		});
	</script>
<style>
	#container{
		width: 100%;
		float:left;
	}
	#leftcontainer{
		width: 50%;
		float: left;
	}
	#rightcontainer{
		widows: 50%;
		float: left;
	}
	input[type=text] {
    width:50%;
    padding: 12px 20px;
    margin-left: 500px;
	margin-bottom: 10px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 20px;
}

input[type=password] {
      width:50%;
    padding: 12px 20px;
    margin-left:500px;
	margin-bottom: 10px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-size: 20px;
}
	input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
		margin-left: 650px;
	}
input[type=submit]:hover {
    background-color: red;
	}
	body{
	background-image:url(Images/login.jpg);
	background-repeat: no-repeat;
    background-size:1400px;
	/*background-attachment:scroll;*/
		opacity: 1;
	}
	#h1{
		text-align: center;
		color: black;
		position: relative;
		margin-left: 560px;
	}
a:link {
    color: red;
}
a:visited {
    color: darkblue;
}
a:hover {
    color: hotpink;
}
a:active {
    color: blue;
	}

</style>
<script>
function validation()
	{
		var x=document.forms["form2"]["username"].value;
		var y=document.forms["form2"]["password"].value;
		if(x==null||x==""||y==null||y=="")
			{
			   alert("both field must filled it");
			}
		 else
		   {
			   alert("both field are filled");
		   }
			
	}
	
</script>
</head>

<body>
<div id="container">
	<div id="leftcontainer">
    <img src="Images/about-icon.png" id="circle">
	</div>
<div id="rightcontainer">
<form method="post" name="form2" action="example.php"> 
 <div>
<h3 id="h1">DIGITAL-TEAM LOGIN</h3>
 </div>
<div>
<input type="text" name="username" placeholder="UserName" maxlength="10" required>
</div>
 <div>
 <input type="password" name="password" placeholder="PassWord" maxlength="10" required>
</div>
 <div>
	<a href="formFill.php"> <input type="submit" value="Sign-in" onClick="validation()" name="Submit"></a>
 </div>
 <div>
 	<a href="changepwd.php" style="margin-left:550px;">ChangePassword?</a>
 	<a href="register.php" style="margin=left:550px;">CreateAccount</a>
 </div>
</form>
</div>
	</div>
</body>
</html>
