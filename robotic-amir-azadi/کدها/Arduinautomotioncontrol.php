<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>Arduinautomotion</title><link rel="shortcut icon" href="Arduinautomotion.ico" type="image/x-icon"></link>

<?php

$temperatureCelsiusValue = $_SESSION['TemperatureCelsius'];
$temperatureFahrenheitValue = $_SESSION['TemperatureFahrenheit'];
$humidityValue = $_SESSION['Humidity'];
$flamesensorValue = $_SESSION['Flame'];
$MQ4sensorValue = $_SESSION['MQ4Sensor'];
$LdrValue = $_SESSION['LDRSensor'];


$pumpValue= $_SESSION['Airpump'];
$lampValue = $_SESSION['Lamp'];
$feedingValue = $_SESSION['Feeding'];
$heaterValue = $_SESSION['Heater'];
$filterexValue = $_SESSION['Filterex'];
$filterinValue = $_SESSION['Filterin'];

$plant1Value = $_SESSION['Plant1H'];
$plant2Value = $_SESSION['Plant2H'];
$plant3Value = $_SESSION['Plant3H'];
$irrigationValue = $_SESSION['Irrigation'];

?>

</head>
</html>