<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>Communication</title><link rel="shortcut icon" href="Arduinautomotion.ico" type="image/x-icon"></link>

<style>
body{
    background-image: url("https://i.ytimg.com/vi/kkVGBn-haDo/maxresdefault.jpg");
}
</style>
<body>
<?php 
$_SESSION['TemperatureCelsius']=$_GET["temperatureCelsius"];
$_SESSION['TemperatureFahrenheit']=$_GET["temperatureFahrenheit"];
$_SESSION['Humidity']=$_GET["humidity"];
$_SESSION['Flame']=$_GET["flame"];
$_SESSION['MQ4Sensor']=$_GET["MQ4sensor"];
$_SESSION['LDRSensor']=$_GET["LDRsensor"];
$_SESSION['Plant1H']=$_GET["plant1H"];
$_SESSION['Plant2H']=$_GET["plant2H"];
$_SESSION['Plant3H']=$_GET["plant3H"];
?>
</head>
<body>
</body>
</html>