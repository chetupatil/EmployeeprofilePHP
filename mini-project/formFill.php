<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

-->
<style>
	.button{
	 background-color:chocolate;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
	.button1{
	 background-color:mediumvioletred;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;

	}
	#content{
		
		padding:5px 5px 5px 5px;
		background-color: none;
		margin: 5px 10px 5px 10px;
		background-image: url("Images/stirred-logo.png");
		background-repeat: no-repeat;
		width: 50%;
		height:150px;
	}
	
	th,td{
		
		border: 0px solid black;
		padding: 9px;
		margin: 100px;
		/*order-collapse: collapse;*/
		
	}
	table{
		margin: 2px;
		padding: 5px;
		width: 50%;
	}
	th{
		background-color: green;
		color:white;
	}

	#innerLeft{
		width:50%;
		height:400px;
		overflow-x: hidden;
		overflow-y: scroll;
		float:left;
		background-color:aliceblue;
		
	}
	#outerDiv{
		width:100%;
		height:500px;
	}
	#innerRight{
		width:50%;
		height: 400px;
		float: left;
		background-color: bisque;
	}
	img{
		margin-left: 150px;
	}
	.left-button{
		font-size: 17px;
	
		background-color: green;
		padding: 5px;
		width:10px;
		height: 2px;
		margin-left:80px;
		margin-top:450px;
	}
	.right-button{
		font-size: 17px;

		background-color: white;
		padding:5px;
		width:10px;
		margin-left: 1000px;
		height: 2px;
		color:black;
		margin-top:450px;
	}
	#divInsideDiv{
		margin-left:160px;
		margin-top: 20px;
		
	}
	
	tr:hover{background-color: coral;}
	tr:nth-child(even){background-color:cadetblue;}

</style>

</head>

<body>
<link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<div id="content">
	

	</div>
<div id="outerDiv">
	
<?php 
	$serverName="localhost";
	$username="root";
	$DBname="myDB3";
	$link=mysqli_connect($serverName,$username,'',$DBname);
		
		if(isset($_POST['pageNo'])){
			$i = $_POST['pageNo'];
		} else {
			$i = 0;
		}
	$sql="SELECT * FROM emp LIMIT 5 OFFSET $i";	
	
	$result=mysqli_query($link,$sql);
	
	?>
	<form id="submitForm" action="formFill.php" method="post">
		<input type="hidden" name="pageNo" id="pageNumber">		
	</form>
	<form action="dataDelete.php" method="post" >
	<div id="innerLeft">
	
		<h1>Digital Team Employee Details</h1>

<table class="table table-striped">
		    <tr>
			<th>CheckBox</th>
			<th>Eid</th>
			<th>Ename</th>
			<th>CompanyName</th>
			<th>Email</th>
	        <th>Edit</th>
	        </tr>
	       
			<?php while($row=mysqli_fetch_assoc($result)):?>
			<tr>
			<td><input type="checkbox" name="num[]" value="<?php echo $row['eid']?>"></td>
			<td><?php echo ' '.$row['eid'].''?> </td>
            <td><?php echo ' '.$row['ename'].''?> </td>
            <td><?php echo ' '.$row['companyName'].''?> </td>
			<td><?php echo ' '.$row['email'].''?> </td>
	        <td><a href="edit.php?edit=<?php echo $row['eid'];?>">edit</a></td>
	        </tr>
	        <?php endwhile;?>
	
	</table>
		
</div>
 <div id="innerRight">
	 <h1 style="margin-left:180px;">Digital TEAM</h1>
	 <img src="Images/team.jpg"></br>
	 <div id="divInsideDiv">
   
     <!--<a href="table2.html"><input type="button" name="add" value="ADD" class="button"></a>-->
     <div>
     	<button type="button" name="add" class="btn btn-success button"><a href="table2.html">ADD</a></button>
     	<button type="submit" class="btn btn-danger button1">DEL</button>
     </div>
    <!-- <input type="submit" value="Delete" class="button1"></a>-->
     
	</div>
</div> 		
<div class="container">                
  <ul class="pagination">
   <li class="" data-lp="1">
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
  
    <li class="active" data-lp="1"><a href="#" name="set" value="0" onclick="submitData(this)">1<span><span class="sr-only">(current)</span></span></span></a></li>
    <li data-lp="2"><a href="#" name="set" value="5" onclick="submitData(this)">2<span><span class="sr-only">(current)</span></span></span></a></li>
    <li data-lp="3"><a href="#" name="set" value="10" onclick="submitData(this)">3<span><span class="sr-only">(current)</span></span></a></li>
    <li data-lp="2">
    <a href="#" aria-label="Next">
    <span aria-hidden="true">&raquo;</span>
    </a>
    </li>
    
</ul>
</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
  <script>
	  
 function submitData(data) {
	 $('#pageNumber').val($(data).attr('value'));
	 $('#submitForm').submit();
 }	
</script>

</body>
</html>
