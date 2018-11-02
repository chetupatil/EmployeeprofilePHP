<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	table,td,th{
		border:2px solid black;
	}
	
	
</style>
</head>

<body>
<?php 
	$serverName="localhost";
	$username="root";
	$DBname="myDB3";
	$link=mysqli_connect($serverName,$username,'',$DBname);
	$sql="SELECT * FROM emp";
	$result=mysqli_query($link,$sql);
	?>
	
<form>
	<table>
		<tr>
			<th>CheckBox</th>
			<th>Eid</th>
			<th>Ename</th>
			<th>CompanyName</th>
			<th>Email</th><br>
		</tr>
	
			<?php while($row=mysqli_fetch_assoc($result)):?>
			<tr>
			<td></td>
			<td><?php echo ' '.$row['eid'].''?> </td>
            <td><?php echo ' '.$row['ename'].''?> </td>
            <td><?php echo ' '.$row['companyName'].''?> </td>
			<td><?php echo ' '.$row['email'].''?> </td>
		</tr>
	        <?php endwhile;?>
		
	</table>
</form>
</body>
</html>
