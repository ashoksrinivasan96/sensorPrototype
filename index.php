<!DOCTYPE html>
<head>
<title>
sensor prototype
</title>
</head>
<body>
<?php
session_start();
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

}

$_SESSION['randomString'] = generateRandomString();

?>
<table align="center" bgcolor="grey" >
<form action ="sensordata.php" method="post">
<th>
<td><h2>Sensor Data <h2></td>
</th>
</br></br></br>
<tr>
<td align="center">Sensor 1</td>
<td align="center">Sensor 2</td>
<td align="center">Sensor 3</td>
</tr>
<tr>
<td><input type="number" name="sensor1"></td>
<td><input type="number" name="sensor2" step="0.0001"></td>
<td><input type="number" name="sensor3"></td>
</tr>
<tr><td></td></tr>
<tr><td></td></tr>

<tr><td><input type="submit" value="submit" align="center"></td></tr>


</form>
</table>
</body>
</html>