<!DOCTYPE html>
<head>
<title>
sensor prototype
</title>
</head>
<body>
<?php
	include 'db_connection.php';
	
	$sens1 = $_POST['sensor1'];
	$sens2 = $_POST['sensor2'];
	$sens3 = $_POST['sensor3'];
	$ranstring = $_SESSION['randomString'];
	$visited = isset($_SESSION['visited']);
	
	OpenCon();
	if($visited == FALSE) 
	{
		$sql = "INSERT INTO sensor(sensor1, sensor2, sensor3, randomkey) VALUES ('$sens1', '$sens2', '$sens3', '$ranstring')";
		if ($_SESSION['conn']->query($sql) === TRUE) {
    echo "New record created successfully";	
	}
	else {
    echo "Error: " . $sql . "<br>" .$_SESSION['conn']->error;}
	}

 else {
	$sql = "UPDATE sensor SET sensor1 ='$sens1', sensor2='$sens2', sensor3 = '$sens3' WHERE randomkey ='$ranstring'" ;
	if ($_SESSION['conn']->query($sql) === TRUE) {
    echo "Record updated successfully";	
	}
	else {
    echo "Error: " . $sql . "<br>" .$_SESSION['conn']->error;}
 }
	?>



<form action ="sensordata.php" method="post">
<table align="center" bgcolor="grey" >

<th align="center">
<td><h2>Sensor Data <h2></td>
</th>
</br></br></br>
<tr>
<td align="center" bgcolor="darkgrey">Sensor 1</td>
<td align="center" bgcolor="darkgrey">Sensor 2</td>
<td align="center" bgcolor="darkgrey">Sensor 3</td>
<td align="center" bgcolor="darkgrey">RandomKey</td>
</tr>
<tr>
<td align="center" bgcolor="white"><input type="number" style = "border:none; text-align:center;" name="sensor1"  value="<?php echo $sens1?>"></td>
<td align="center" bgcolor="white"><input type="number" style = "border:none; text-align:center;" name="sensor2" step="0.0001" value="<?php echo $sens2?>"></td>
<td align="center" bgcolor="white"><input type="number" style = "border:none; text-align:center;" name ="sensor3" value="<?php echo $sens3?>"></td>
<td align="center" bgcolor="white"><?php echo $ranstring?></td>
<td align="center" bgcolor="white"><input type="submit" value="Update"></td>
<?php $_SESSION['visited'] = TRUE;?>
</tr>
</form>
<form action="index.php" method="post">
<tr><td><input type="submit" value="Insert Another Record"></td></tr>
</form>






</table>

</body>
</html>

