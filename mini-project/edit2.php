<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>

<body>
	<?php
	$serverName = "localhost";
	$username = "root";
	$DBname = "myDB3";
	$link = mysqli_connect( $serverName, $username, '', $DBname );
	if ( $link === false ) {
		die( "error:not connected" );
	}
	?>
	<?php

	if ( isset( $_REQUEST[ 'submit' ] ) ) {
		$Newname = $_POST[ 'Newname' ];
		$Newcname = $_POST[ 'Newcname' ];
		$email = $_POST[ 'email' ];
		$Eid = $_POST[ 'eid' ];
		$sql = "UPDATE emp SET ename='$Newname',companyName='$Newcname',email='$email' WHERE eid='$Eid'";
		$res = mysqli_query( $link, $sql );
		if ( $res == true ) {
			echo " Record will updated";
		} else {
			echo " Record not updated";
		}
	}
	header("refresh:1;url=formFill.php" );
	mysqli_close( $link );
	?>
	
</body>

</html>