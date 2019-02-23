<?php
	session_start();
	
	function OpenCon(){
		$db_host = "localhost";
		$db_user = "root";
		$db_pass = "";
		$db = "sensor";
	
	
	$conn = new mysqli($db_host, $db_user, $db_pass, $db) or die("Connection failed: %s\n". $conn -> error);
	$_SESSION['conn'] = $conn;
	return $conn;
	}
	
	function CloseCon($conn)
	{
		$conn -> close();
	}
	?>
	}