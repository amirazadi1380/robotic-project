<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>FormValue</title><link rel="shortcut icon" href="Arduinautomotion.ico" type="image/x-icon"></link>

<?php
$_SESSION['Airpump'] = $_POST["pump"];

$_SESSION['Lamp'] = $_POST["lamp"];

$_SESSION['Feeding'] = $_POST["feed"];

$_SESSION['Heater'] = $_POST["heater"];

$_SESSION['Filterex'] = $_POST["filterexternal"];

$_SESSION['Filterin'] = $_POST["filterinternal"];

$_SESSION['Irrigation'] = $_POST["irrigationsystem"];
?>

<style>

html{
	background-color:black;
}

div.serverpage{
	background-color:green;
	width:1300px;
	height:100px;
	text-align:center;
}

p{
	color:green;
	text-align:center;
	font-size:25px;
}

input.subMit{

position:absolute;
left:525px;
border:5px solid green;
width:300px;
height:50px;
font-size:20px;
color:white;
background-color:transparent;
cursor:pointer;
}
</style>

</head>

<body >

<div class="serverpage">
<h1 style="font-size:40px;color:black;">Server has received the data from Arduinautomotion.</h1> </div>

<p>Airpump= <?php echo $_SESSION['Airpump'];?></p><br>

<p>Lamp=<?php echo $_SESSION['Lamp'];?></p> <br> 

<p>Feeding=<?php echo $_SESSION['Feeding'];?></p> <br>

<p>Heater=<?php echo $_SESSION['Heater'];?></p> <br>

<p>Filterex=<?php echo $_SESSION['Filterex'] ;?></p> <br>

<p>Filterin=<?php echo $_SESSION['Filterin'] ;?></p> <br>

<p>Irrigation=<?php echo $_SESSION['Irrigation'];?></p> <br>

<form action="http://192.168.1.21/" method="get"  target="_blank">
<input type="hidden" value="<?php echo $_SESSION['Airpump'];?>" name="airpump">
<input type="hidden" value="<?php echo $_SESSION['Lamp'];?>" name="lamp">
<input type="hidden" value="<?php echo $_SESSION['Feeding'];?>" name="feed">
<input type="hidden" value="<?php echo $_SESSION['Heater'];?>" name="heater">
<input type="hidden" value="<?php echo $_SESSION['Filterex'];?>" name="filterex">
<input type="hidden" value="<?php echo $_SESSION['Filterin'];?>" name="filterin">
<input type="hidden" value="<?php echo $_SESSION['Irrigation'];?>" name="irrigation">
<input type="submit" value="Send and Get Data" class="subMit">
</form> 

</body>
</html>