<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	</script>
<script>
	$(document).ready(function(){
		$("button").click(function(){
			$("img").fadeToggle();
		});
	});
	
</script>
<style>
	img{
		width:100px;
		height:50px;
	}
	
	
	</style>
</head>

<body>
<h1>Thank you for using my comapny <mark>WEBsite</mark></h1>
<img src="Images/news and media.jpg">
<button>Press</button>

<?php
	header("refresh:10; url=loginPage.php");
	?>
</body>
</html>
