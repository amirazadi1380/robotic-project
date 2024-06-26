<?php
session_start();
?>
<!DOCTYPE html>
<html>

<?php include 'Arduinautomotioncontrol.php'; ?>

<head>

<link rel="shortcut icon" href="Arduinautomotion.ico" type="image/x-icon"></link>

<style>
html{
background-color:rgb(0, 0, 0);
}

button{
cursor:pointer;
user-select:none;
}
form{
user-select:none;
}

iframe{
	user-select:none;
}

p{
cursor:default;
user-select:none;
}

#guideText{
position:absolute;
top:400px;
font-size:20px;
color:white;
height:420px;
width:1000px;
overflow:auto;
}

img.icon{
user-select:none;

cursor:crosshair;
}
.icon:hover{opacity:0.5}

div.home{
background-color:rgb(25, 25, 25);
height:100px;
width:1320px;
position:sticky;
top:530px;
left:10px;
border:10px solid;
border-radius:20px;
border-color:rgb(35, 35, 35);
}

div.homeselector{
background-color:rgb(17, 17, 17);
height:60px;
width:220px;
border:2px solid;
border-radius:5px;
border-color:rgb(35, 35, 35);
transition:height width 0.5s;
cursor:pointer;
}.homeselector:hover{height:70px;width:240px;}

div.infopanel{
background-color:rgb(25, 25, 25);
position:absolute;
top:680px;
left:700px;
height:300px;
width:600px;
border:10px solid;
border-radius:20px;
border-color:rgb(35, 35, 35);
}

div.color{
position:absolute;
height:50px;
width:100px;
transition:height width 0.5s;
border:0.5px solid;
border-radius:100px;
border-color:transparent;
cursor:pointer;
}.color:hover{height:60px;width:110px;}

section.menuselector{
background-color:rgb(99, 99, 99);
height:150px;
width:200px;
padding:10px;
border:10px solid;
border-radius:20px;
border-color:rgb(35, 35, 35);
transition:border-color 0.5s,width 0.5s,height 0.5s;
}.menuselector:hover{border-color:red;height:160px;width:210px;}

svg.svg{
position:absolute;
top:680px;
left:10px;
background-color:transparent;
}

summary{
user-select:none;
}

iframe.guide{
position:absolute;
height:200px;
width:250px;
resize:both;
overflow:auto;
border:5px solid transparent;
transition:border-color 2s,height width 2s;
}.guide:hover{height:220px;width:270px;border-color:red;}
	
footer{
position:absolute;
top:2000px;
left:20px;
width:1300px;
height:200px;
border-width:5px;
border-radius:10px;
border-style:dashed;
border-color:black;
background-color:rgb(51, 51, 51);
}

div.animationbox{
background-color:white;
position:absolute;
top:5px;
left:10px;
width:10px;
height:10px;
border:5px solid black;
border-radius:50px;
animation:move 10s infinite;
}
@keyframes move{
 0%   {top: 5px;left:10px;background-color:white;border-color:black;}
 16%  {top: 5px;left:650px;background-color:black;border-color:white;}
 32%  {top: 5px;left:1275px;background-color:white;border-color:black;}
 48%  {top: 170px;left:1275px;background-color:black;border-color:white;}
 64%  {top: 170px;left:650px;background-color:white;border-color:black;}
 80%  {top: 170px;left:10px;background-color:black;border-color:white;}
}

a.openNewTab{
color:white;
position:absolute;
top:30px;
left:500px;
text-decoration:none;
font-size:30px;
transition:color 0.1s;
}.openNewTab:hover{color:green;}

select{
	cursor:pointer;
}

input.activateinput{
      cursor:pointer;
      position:absolute;
      top:270px;
      left:410px;
      color:white;
      border-color:transparent;
      background-color:transparent;
      font-weight:bold;
      font-size:40px;
      transition:color 0.1s;
}.activateinput:hover{color:red;}

img.spidey{
    position:absolute;
    top:400px;
    height:300px;
    width:350px;
    border:5px solid black;
}

#refresh{
    user-select:none;
    position:absolute;
    top:120px;
    left:600px;
    width:250px;
    height:250px;
    cursor:pointer;
    transition: border 0.5;
}#refresh:hover{border:5px solid green;}

#spideyVideo{
    position:absolute;
    top:0px;
    left:5px;
    width:250px;
    height:250px;
}

#BoxBackGround{
	display:none;
	background-color:rgb(214, 8, 8);
	position:fixed;
	top:0px;
	left:0px;
	opacity:0.7;
	width:0px;
	height:0px;
	
}
#Box{
	display:none;
	position:fixed;
	top:10px;
    background: url("https://media.giphy.com/media/3o7qDNfxtNRtLVv8qs/giphy.gif");
	background-color:black;
    background-repeat: no-repeat;
	background-size: 600px 200px;
	width:600px;
	height:200px;
	border: 5px solid black;
	border-radius:20px;
}

#times{
	position:absolute;
	color:white;
	top:0px;
	left:550px;
    font-weight: bold;
	font-size:40px;
    cursor:pointer;
	transition: color 0.5s;
	user-select:none;
}#times:hover{color:red;}

#BoxText{
	position:absolute;
	top:150px;
	left:300px;
	color:white;
	font-size:25px;
	user-select:none;
	cursor:default;
}

li.colorfulLi{
	user-select:none;
	transition:color 0.1s ;
}.colorfulLi:hover{color:green;}

a{
	user-select:none;
}

#StartInputText{
    position:absolute;
	top:90px;
	left:30px;
    color:white;
    border-color:transparent;
    background-color:transparent;
    font-weight:bold;
    font-size:20px;

}

#StopInputText{
	position:absolute;
	top:90px;
	left:130px;
    color:white;
    border-color:transparent;
    background-color:transparent;
    font-weight:bold;
    font-size:20px;

}
	
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $("#roomshome").click(function(){
         $(this).css("border-color", "red");
         $(aquariumshome).css("border-color", "rgb(35, 35, 35)");
		 $(plantshome).css("border-color", "rgb(35, 35, 35)");
		 $(guideshome).css("border-color", "rgb(35, 35, 35)");
    });
	    $("#aquariumshome").click(function(){
         $(roomshome).css("border-color", "rgb(35, 35, 35)");
         $(this).css("border-color", "red");
		 $(plantshome).css("border-color", "rgb(35, 35, 35)");
		 $(guideshome).css("border-color", "rgb(35, 35, 35)");
    });
	    $("#plantshome").click(function(){
         $(roomshome).css("border-color", "rgb(35, 35, 35)");
         $(aquariumshome).css("border-color", "rgb(35, 35, 35)");
		 $(this).css("border-color", "red");
		 $(guideshome).css("border-color", "rgb(35, 35, 35)");
    });
	    $("#guideshome").click(function(){
         $(roomshome).css("border-color", "rgb(35, 35, 35)");
         $(aquariumshome).css("border-color", "rgb(35, 35, 35)");
		 $(plantshome).css("border-color", "rgb(35, 35, 35)");
		 $(this).css("border-color", "red");
    });
    $("#iframeform").mouseenter(function(){
		$(this).css("position","absolute");
		$(this).css("top","60px");
		$(this).css("left","0px");
        $(this).css("height", "600px");
        $(this).css("width","1050px");
		$(this).css("border-color","green");
    });
    $("#iframeform").mouseleave(function(){
		$(this).css("position","absolute");
		$(this).css("top","60px");
		$(this).css("left","0px");
        $(this).css("height", "300px");
        $(this).css("width","350px");
		$(this).css("border-color","green");
    });	
});
</script>



<script>

function openAlert(){
var winW = window.innerWidth;
var winH = window.innerHeight;
var Saudio=document.getElementById("spideyAudio");
var Svideo=document.getElementById("spideyVideo");
document.getElementById("BoxBackGround").style.display = ("block");
document.getElementById("BoxBackGround").style.height = (winH+"px");
document.getElementById("BoxBackGround").style.width = (winW+"px");
document.getElementById("Box").style.display = ("block");
document.getElementById("Box").style.top = ("50px");
document.getElementById("Box").style.left = (winW/2-300+"px");
Saudio.play();
Saudio.loop=true;
Svideo.play();
Svideo.loop=true;
}

function closeAlert(){
var Saudio=document.getElementById("spideyAudio");
var Svideo=document.getElementById("spideyVideo");
document.getElementById("BoxBackGround").style.display = ("none");	
document.getElementById("Box").style.display = ("none");
Saudio.pause();
Saudio.loop=false;
Svideo.pause();
Svideo.loop=false;
}


function getDataFromArduino(){

var temperatureCelsiusValue = <?php echo $temperatureCelsiusValue?>;
var temperatureFahrenheitValue = <?php echo $temperatureFahrenheitValue?>;
var humidityValue = <?php echo $humidityValue?>;
var flamesensorValue = <?php echo $flamesensorValue ?>;
var MQ4sensorValue = <?php echo $MQ4sensorValue ?>;
var LdrValue = <?php echo $LdrValue?>;

var pumpValue = "<?php echo $pumpValue?>";
var lampValue = "<?php echo $lampValue ?>";
var feedingValue = "<?php echo $feedingValue?>";
var heaterValue = "<?php echo $heaterValue?>";
var filterexValue = "<?php echo $filterexValue?>";
var filterinValue = "<?php echo $filterinValue?>";

var plant1Value = <?php echo $plant1Value?>;
var plant2Value = <?php echo $plant2Value?>;
var plant3Value = <?php echo $plant3Value?>;
var irrigationValue = "<?php echo $irrigationValue?>";

var a = document.getElementById("temperaturecircle");
var b = document.getElementById("humiditycircle");
var c = document.getElementById("flamecircle");
var d = document.getElementById("gascircle");
var e = document.getElementById("lightcircle");

var f = document.getElementById("pumpcircle");
var g = document.getElementById("lampcircle");
var h = document.getElementById("feedcircle");
var j = document.getElementById("heatercircle");
var k = document.getElementById("filterexcircle");
var l = document.getElementById("filterincircle");

var n = document.getElementById("plant1circle");
var o = document.getElementById("plant2circle");
var p = document.getElementById("plant3circle");
var r = document.getElementById("irrigationcircle");

var t = document.getElementById("temperatureText");
var m = document.getElementById("temperatureMeter");
var t1 = document.getElementById("humidityText");
var m1 = document.getElementById("humidityMeter");
var t2 = document.getElementById("flameText");
var m2 = document.getElementById("flameMeter");
var t3 = document.getElementById("gasText");
var m3 = document.getElementById("gasMeter");
var t4 = document.getElementById("lightText");
var m4 = document.getElementById("lightMeter");
var t5 = document.getElementById("plant1Text");
var m5 = document.getElementById("plant1Meter");
var t6 = document.getElementById("plant2Text");
var m6 = document.getElementById("plant2Meter");
var t7 = document.getElementById("plant3Text");
var m7 = document.getElementById("plant3Meter");


t.innerHTML=temperatureCelsiusValue+'C'+'  '+temperatureFahrenheitValue+'F';
m.value=(temperatureCelsiusValue);
if(temperatureCelsiusValue<15||temperatureCelsiusValue>=40){
a.style.fill=("red");
openAlert();
}
if(temperatureCelsiusValue==15){
a.style.fill=("rgb(255, 93, 0)");
}
if(temperatureCelsiusValue>15&&temperatureCelsiusValue<40){
a.style.fill=("green");
}

t1.innerHTML=humidityValue+'%';
m1.value=(humidityValue);
if(humidityValue<20||humidityValue>=75){
b.style.fill=("red");
openAlert();
}
if(humidityValue==20){
b.style.fill=("rgb(255, 93, 0)");
}
if(humidityValue>20&&humidityValue<75){
b.style.fill=("green");
}

t2.innerHTML='Sensor value ='+flamesensorValue;
m2.value=(flamesensorValue);
if(flamesensorValue<500){
c.style.fill=("red");
openAlert();
}
if(flamesensorValue==500){
c.style.fill=("rgb(255, 93, 0)");
}
if(flamesensorValue>500){
c.style.fill=("green");
}

t3.innerHTML='Sensor value ='+MQ4sensorValue;
m3.value=(MQ4sensorValue);
if(MQ4sensorValue<0||MQ4sensorValue>=700){
d.style.fill=("red");
openAlert();
}
if(MQ4sensorValue==0){
d.style.fill=("rgb(255, 93, 0)");
}
if(MQ4sensorValue>0&&MQ4sensorValue<700){
d.style.fill=("green");
}

t4.innerHTML='Sensor value ='+LdrValue;
m4.value=(LdrValue);
if(LdrValue<0||LdrValue>=700){
e.style.fill=("red");
openAlert();
}
if(LdrValue==0){
e.style.fill=("rgb(255, 93, 0)");
}
if(LdrValue>0&&LdrValue<700){
e.style.fill=("green");
}

t5.innerHTML='Sensor value ='+plant1Value;
m5.value=(plant1Value);
if(plant1Value>501){
n.style.fill=("red");
openAlert();
}
if(plant1Value==499){
n.style.fill=("rgb(255, 93, 0)");
}
if(plant1Value<500){
n.style.fill=("green");
}

t6.innerHTML='Sensor value ='+plant2Value;
m6.value=(plant2Value);
if(plant2Value>501){
o.style.fill=("red");
openAlert();
}
if(plant2Value==499){
o.style.fill=("rgb(255, 93, 0)");
}
if(plant2Value<500){
o.style.fill=("green");
}

t7.innerHTML='Sensor value ='+plant3Value;
m7.value=(plant3Value);
if(plant3Value>=501){
p.style.fill=("red");
openAlert();
}
if(plant3Value==499){
p.style.fill=("rgb(255, 93, 0)");
}
if(plant3Value<500){
p.style.fill=("green");
}

if(pumpValue=='pumpIsOn'){
f.style.fill=("yellow");
}
if(pumpValue=='pumpIsOff'){
f.style.fill=("white");
}

if(lampValue=='lampIsOn'){
g.style.fill=("yellow");
}
if(lampValue=='lampIsOff'){
g.style.fill=("white");
}

if(feedingValue=='feedIsOn'){
h.style.fill=("yellow");
}
if(feedingValue=='feedIsOff'){
h.style.fill=("white");
}

if(heaterValue=='heaterIsOn'){
j.style.fill=("yellow");
}
if(heaterValue=='heaterIsOff'){
j.style.fill=("white");
}

if(filterexValue=='exIsOn'){
k.style.fill=("yellow");
}
if(filterexValue=='exIsOff'){
k.style.fill=("white");
}

if(filterinValue=='inIsOn'){
l.style.fill=("yellow");
}
if(filterinValue=='inIsOff'){
l.style.fill=("white");
}

if(irrigationValue=='start'){
r.style.fill=("yellow");
}
if(irrigationValue=='stop'){
r.style.fill=("white");
}

}

</script>

</head>

<body onpageshow="getDataFromArduino()">

<img class="icon" src="https://sites.psu.edu/gayborhood/files/2016/05/Black-and-White-City-at-Night-V.png" 
style="border:10px solid;border-radius:20px;border-color:rgb(35, 35, 35);height:500px;width:1320px;">

<p style="font-size:20px;position:absolute;top:1700px;left:700px;color:white;"><strong>Guidelines for managing to adjustments of the objects.</strong></p>

<iframe class="guide" src ="http://www.geekstips.com/mq4-sensor-natural-gas-methane-arduino/" style="top:1490px;left:1050px;"></iframe>
<iframe class="guide" src ="https://playground.arduino.cc/Learning/PhotoResistor"  style="top:1490px;left:700px;"></iframe>
<iframe class="guide" src ="https://www.arduino.cc/en/Guide/ArduinoEthernetShield" style="top:1270px;left:1050px;"></iframe>
<iframe class="guide" src ="https://www.dfrobot.com/wiki/index.php/DHT11_Temperature_and_Humidity_Sensor_(SKU:_DFR0067)" style="top:1270px;left:700px;"></iframe>
<iframe class="guide" src="http://www.wikihow.com/Grow-Healthy-Plants" style="top:1050px;left:1050px;"></iframe>
<iframe class="guide" src ="http://www.tetra-fish.com/aquarium-information/how-to-set-up-an-aquarium-fish-tank-setup.aspx"style="top:1050px;left:700px;"></iframe>

<div class="infopanel">

<div onclick="low()" class="color" style="top:20px;left:10px;background-color:green;">
<script>
function low(){
var color=document.getElementById("colorinfo");
color.style.color=("green");
document.getElementById("colorinfo").innerHTML = "The green circle shows that the selected element's sensor reading is under the risk level. ";
}
</script>
</div>
<div onclick="optimum()"class="color" style="top:20px;left:250px;background-color:rgb(255, 93, 0);">
<script>
function optimum(){
var color=document.getElementById("colorinfo");
color.style.color=("rgb(255, 93, 0)");
document.getElementById("colorinfo").innerHTML = "The orange circle shows that the selected element's sensor reading is the optimum level. ";
}
</script>
</div>
<div onclick="hgh()" class="color" style="top:20px;left:490px;background-color:red;">
<script>
function hgh(){
var color=document.getElementById("colorinfo");
color.style.color=("red");
document.getElementById("colorinfo").innerHTML = "The red circle shows that the selected element's sensor reading is top the risk level. ";
}
</script>
</div>
<div onclick="opens()" class="color" style="top:150px;left:125px;background-color:yellow;">
<script>
function opens(){
var color=document.getElementById("colorinfo");
color.style.color=("yellow");
document.getElementById("colorinfo").innerHTML = "The yellow circle shows that the selected element is on. ";
}
</script>
</div>
<div onclick="off()"class="color" style="top:150px;left:375px;background-color:white;">
<script>
function off(){
var color=document.getElementById("colorinfo");
color.style.color=("white");
document.getElementById("colorinfo").innerHTML = "The white circle which is default shows that the selected element is off. ";
}
</script>
</div>
<button onclick="sensorreadings()"style="color:white;background-color:transparent;border-color:transparent;height:50px;width:100px;position:absolute;top:100px;left:250px;"><strong>Sensors</strong></button>
<script>
function sensorreadings(){

var p= document.getElementById("temperatureline");
p.style.stroke=("rgb(4, 155, 163)");
var p1= document.getElementById("temperaturecircle");
p1.style.stroke=("rgb(4, 155, 163)");
var o= document.getElementById("humidityline");
o.style.stroke=("rgb(4, 155, 163)");
var o1= document.getElementById("humiditycircle");
o1.style.stroke=("rgb(4, 155, 163)");
var u= document.getElementById("flameline");
u.style.stroke=("rgb(4, 155, 163)");
var u1= document.getElementById("flamecircle");
u1.style.stroke=("rgb(4, 155, 163)");
var y= document.getElementById("gasline");
y.style.stroke=("rgb(4, 155, 163)");
var y1= document.getElementById("gascircle");
y1.style.stroke=("rgb(4, 155, 163)");
var t= document.getElementById("lightline");
t.style.stroke=("rgb(4, 155, 163)");
var t1= document.getElementById("lightcircle");
t1.style.stroke=("rgb(4, 155, 163)");
var x= document.getElementById("pumpline");
x.style.stroke=("rgb(58, 58, 58)");
var x1= document.getElementById("pumpcircle");
x1.style.stroke=("rgb(58, 58, 58)");
var a= document.getElementById("lampline");
a.style.stroke=("rgb(58, 58, 58)");
var a1= document.getElementById("lampcircle");
a1.style.stroke=("rgb(58, 58, 58)");
var s= document.getElementById("feedline");
s.style.stroke=("rgb(58, 58, 58)");
var s1= document.getElementById("feedcircle");
s1.style.stroke=("rgb(58, 58, 58)");
var d= document.getElementById("heaterline");
d.style.stroke=("rgb(58, 58, 58)");
var d1= document.getElementById("heatercircle");
d1.style.stroke=("rgb(58, 58, 58)");
var f= document.getElementById("filterexline");
f.style.stroke=("rgb(58, 58, 58)");
var f1= document.getElementById("filterexcircle");
f1.style.stroke=("rgb(58, 58, 58)");
var f= document.getElementById("filterinline");
f.style.stroke=("rgb(58, 58, 58)");
var f1= document.getElementById("filterincircle");
f1.style.stroke=("rgb(58, 58, 58)");
var h= document.getElementById("plant1line");
h.style.stroke=("rgb(4, 155, 163)");
var h1= document.getElementById("plant1circle");
h1.style.stroke=("rgb(4, 155, 163)");
var j= document.getElementById("plant2line");
j.style.stroke=("rgb(4, 155, 163)");
var j1= document.getElementById("plant2circle");
j1.style.stroke=("rgb(4, 155, 163)");
var k= document.getElementById("plant3line");
k.style.stroke=("rgb(4, 155, 163)");
var k1= document.getElementById("plant3circle");
k1.style.stroke=("rgb(4, 155, 163)");
var l= document.getElementById("irrigationline");
l.style.stroke=("rgb(58, 58, 58)");
var l1= document.getElementById("irrigationcircle");
l1.style.stroke=("rgb(58, 58, 58)");
var color=document.getElementById("colorinfo");
color.style.color=("rgb(4, 155, 163)");
document.getElementById("colorinfo").innerHTML = "The changing bars show that the rate of the selected object's sensor readings.";
}
</script>
<button onclick="onoffdata()" style="color:white;background-color:transparent;border-color:transparent;height:20px;width:100px;position:absolute;top:200px;left:250px;"><strong>Objects</strong></button>

<script>
function onoffdata(){

var p= document.getElementById("temperatureline");
p.style.stroke=("rgb(58, 58, 58)");
var p1= document.getElementById("temperaturecircle");
p1.style.stroke=("rgb(58, 58, 58)");
var o= document.getElementById("humidityline");
o.style.stroke=("rgb(58, 58, 58)");
var o1= document.getElementById("humiditycircle");
o1.style.stroke=("rgb(58, 58, 58)");
var u= document.getElementById("flameline");
u.style.stroke=("rgb(58, 58, 58)");
var u1= document.getElementById("flamecircle");
u1.style.stroke=("rgb(58, 58, 58)");
var y= document.getElementById("gasline");
y.style.stroke=("rgb(58, 58, 58)");
var y1= document.getElementById("gascircle");
y1.style.stroke=("rgb(58, 58, 58)");
var t= document.getElementById("lightline");
t.style.stroke=("rgb(58, 58, 58)");
var t1= document.getElementById("lightcircle");
t1.style.stroke=("rgb(58, 58, 58)");
var x= document.getElementById("pumpline");
x.style.stroke=("rgb(199, 0, 255)");
var x1= document.getElementById("pumpcircle");
x1.style.stroke=("rgb(199, 0, 255)");
var a= document.getElementById("lampline");
a.style.stroke=("rgb(199, 0, 255)");
var a1= document.getElementById("lampcircle");
a1.style.stroke=("rgb(199, 0, 255)");
var s= document.getElementById("feedline");
s.style.stroke=("rgb(199, 0, 255)");
var s1= document.getElementById("feedcircle");
s1.style.stroke=("rgb(199, 0, 255)");
var d= document.getElementById("heaterline");
d.style.stroke=("rgb(199, 0, 255)");
var d1= document.getElementById("heatercircle");
d1.style.stroke=("rgb(199, 0, 255)");
var f= document.getElementById("filterexline");
f.style.stroke=("rgb(199, 0, 255)");
var f1= document.getElementById("filterexcircle");
f1.style.stroke=("rgb(199, 0, 255)");
var f= document.getElementById("filterinline");
f.style.stroke=("rgb(199, 0, 255)");
var f1= document.getElementById("filterincircle");
f1.style.stroke=("rgb(199, 0, 255)");
var h= document.getElementById("plant1line");
h.style.stroke=("rgb(58, 58, 58)");
var h1= document.getElementById("plant1circle");
h1.style.stroke=("rgb(58, 58, 58)");
var j= document.getElementById("plant2line");
j.style.stroke=("rgb(58, 58, 58)");
var j1= document.getElementById("plant2circle");
j1.style.stroke=("rgb(58, 58, 58)");
var k= document.getElementById("plant3line");
k.style.stroke=("rgb(58, 58, 58)");
var k1= document.getElementById("plant3circle");
k1.style.stroke=("rgb(58, 58, 58)");
var l= document.getElementById("irrigationline");
l.style.stroke=("rgb(199, 0, 255)");
var l1= document.getElementById("irrigationcircle");
l1.style.stroke=("rgb(199, 0, 255)");
var color=document.getElementById("colorinfo");
color.style.color=("rgb(199, 0, 255)");
document.getElementById("colorinfo").innerHTML = "The changing bars show you that the selected object is on or off.";
}
</script>

<p id="colorinfo" style="position:absolute;top:250px;left:10px;color:white;">Please click the buttons and the color bars to learn the info about colors.</p>

</div>


<svg class="svg" height="1200px" width="600px">
<polyline id="temperatureline" points="50,50,300,200" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="humidityline" points="300,50,300,200" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="flameline"    points="550,50,300,200" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="gasline"      points="50,350,300,200" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="lightline"    points="550,350,300,200" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />

<polyline id="pumpline" points="50,450,300,600" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="lampline" points="300,450,300,600" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="feedline"points="550,450,300,600" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="heaterline" points="50,750,300,600" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="filterexline"points="300,750,300,600" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="filterinline" points="550,750,300,600" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />

<polyline id="plant1line" points="50,850,300,1000" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="plant2line" points="300,850,300,1000" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="plant3line" points="550,850,300,1000" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />
<polyline id="irrigationline" points="300,1150,300,1000" style="fill:none;stroke:rgb(58, 58, 58);stroke-width:5" />

<circle id="temperaturecircle" cx="50" cy="50" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="humiditycircle" cx="300" cy="50" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="flamecircle" cx="550" cy="50" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="gascircle" cx="50" cy="350" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="lightcircle" cx="550" cy="350" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />

<circle id="pumpcircle" cx="50" cy="450" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="lampcircle" cx="300" cy="450" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="feedcircle" cx="550" cy="450" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="heatercircle" cx="50" cy="750" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="filterexcircle" cx="300" cy="750" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="filterincircle" cx="550" cy="750" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />

<circle id="plant1circle" cx="50" cy="850" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="plant2circle" cx="300" cy="850" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="plant3circle" cx="550" cy="850" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />
<circle id="irrigationcircle" cx="300" cy="1150" r="40"  stroke-width="5" style="fill:white;stroke:rgb(58, 58, 58);" />

<ellipse cx="300" cy="200" rx="200" ry="50" style="fill:rgb(99, 99, 99);stroke:rgb(58, 58, 58);stroke-width:5" />
<ellipse cx="300" cy="600" rx="200" ry="50" style="fill:rgb(99, 99, 99);stroke:rgb(58, 58, 58);stroke-width:5" />
<ellipse cx="300" cy="1000" rx="200" ry="50" style="fill:rgb(99, 99, 99);stroke:rgb(58, 58, 58);stroke-width:5" />

</svg>

<p style="font-size:40px;position:absolute;top:815px;left:235px;color:white;"><strong>ROOM</strong></p>
<p style="font-size:40px;position:absolute;top:1215px;left:195px;color:white;"><strong>AQUARUM</strong></p>
<p style="font-size:40px;position:absolute;top:1615px;left:235px;color:white;"><strong>PLANT</strong></p>


<div class="home">

<div id="guideshome"class="homeselector" style="position:absolute;top:20px;left:910px;">
<details>
<summary style="font-size:30px;text-align:center;color:white;"><strong>GUDE</strong></summary>
<div style="cursor:default;height:850px;width:1050px;background-color:rgb(25, 25, 25);position:absolute;left:-700px;">

<a href="http://localhost/Arduinautomotionformvalue.php" target="_blank" class="openNewTab">Open FormValue In New Tab</a>

<ul id="guideText">
  <li class="colorfulLi">When a form is sent to the FormValue page, form values are revealed in the iframe which named newsite in Guide.</li><br>
  <li class="colorfulLi">Form values are the saved data which give Arduino an ability to determine the adjustments of the aquarium and the plants. </li><br>
  <li class="colorfulLi">And all of the data go through the ArduinoSide page that is hosted by Arduino Ethernet Shield with the IP address you choose.</li><br>
  <li class="colorfulLi">After that, the Communication button in the ArduinoSide page has to be pushed to open the Communication page and to change the $_Session values.</li><br>
  <li class="colorfulLi">Lastly, the Arduinautomotion page has to refresh or the Reload button has to pushed to get the new data from Arduino.</li><br>
  <li class="colorfulLi">If the information about the room is in the dangerous range, the homepage notifies you with a voice alert box which includes a Spider-man video and audio file that are in the www folder in Apache localhost furthermore the related information circle changes its colour to red.</li><br>
  <img id="Graphics" src="http://192.168.1.20/ArduinautomotionGraphics.jpg" style="width:1000px;">
  </ul>

<img id="refresh" src="https://pbs.twimg.com/profile_images/521160118671384576/1pv-cwfk_400x400.jpeg" onclick="reload()">
<script>
function reload(){
location.reload();
}
</script>

<iframe id="iframeform" srcdoc="<p>FormValue page will be shown in here after sending the forms with the data.</p><br><p>Click the Activate button to open FormValue page." style="position:absolute;top:60px;height:300px;width:350px;overflow:auto;border:5px solid green;" name="newsite"></iframe>
</div>
</details>
</div>

<div id="plantshome"class="homeselector" style="position:absolute;top:20px;left:650px;">
<details>
<summary style="font-size:30px;text-align:center;color:white;"><strong>PLANT</strong></summary>

<div style="cursor:default;height:550px;width:1050px;background-color:rgb(25, 25, 25);position:absolute;left:-400px;">

<section class="menuselector"style="position:absolute;top:350px;left:380px;">
<button onclick="cirrigation()"style="font-size:30px;text-align:left;border-color:transparent;background-color:transparent;height:60px;width:200px;position:absolute;top:0px;left:5px;color:white;"><strong>Irrigation system</strong></button>

<input  style="	cursor:pointer;position:absolute;top:90px;left:10px;"form="ActivationForm" type="radio" name="irrigationsystem" value="start" onclick="StartInput()"/><span id="StartInputText">Start</span>
<script>
function StartInput(){
	var x=document.getElementById("StartInputText");
	var y=document.getElementById("StopInputText");
	x.style.color=("red");
	y.style.color=("white");
}
</script>

<input  style="	cursor:pointer;position:absolute;top:90px;left:110px;" form="ActivationForm" type="radio" name="irrigationsystem" value="stop" onclick="StopInput()"/><span id="StopInputText">Stop</span>
<script>
function StopInput(){
	var x=document.getElementById("StartInputText");
	var y=document.getElementById("StopInputText");
	x.style.color=("white");
	y.style.color=("red");
}
</script>

<input class="activateinput" form="ActivationForm" type="submit" value="Activate" style="font-size:25px;position:absolute;top:130px;left:15px;"/>

</section>

<script>
function cirrigation(){
var x= document.getElementById("irrigationline");
x.style.stroke=("red");
var y= document.getElementById("irrigationcircle");
y.style.stroke=("red");
}
</script>

<section class="menuselector"style="position:absolute;top:50px;left:770px;">
<button onclick="cplant3()"style="font-size:30px;text-align:left;border-color:transparent;background-color:transparent;height:60px;width:200px;position:absolute;top:0px;left:5px;color:white;"><strong>Plant3</strong></button>
<p id="plant3Text" style="color:white;position:absolute;top:50px;left:15px;font-size:20px;font-weight:bold;">default</p>
<meter id="plant3Meter" style="width:150px;height:20px;position:absolute;top:120px;left:15px;" value="0" low="200" high="700" min="0" max="1023"></meter>
</section>

<script>
function cplant3(){
var x= document.getElementById("plant3line");
x.style.stroke=("red");
var y= document.getElementById("plant3circle");
y.style.stroke=("red");
}
</script>

<section class="menuselector"style="position:absolute;top:50px;left:380px;">
<button onclick="cplant2()"style="font-size:30px;text-align:left;border-color:transparent;background-color:transparent;height:60px;width:200px;position:absolute;top:0px;left:5px;color:white;"><strong>Plant2</strong></button>
<p id="plant2Text"style="color:white;position:absolute;top:50px;left:15px;font-size:20px;font-weight:bold;">default</p>
<meter id="plant2Meter" style="width:150px;height:20px;position:absolute;top:120px;left:15px;" value="0" low="200" high="700" min="0" max="1023"></meter>
</section>

<script>
function cplant2(){
var x= document.getElementById("plant2line");
x.style.stroke=("red");
var y= document.getElementById("plant2circle");
y.style.stroke=("red");
}
</script>

<section class="menuselector"style="position:absolute;top:50px;left:10px;">
<button onclick="cplant1()"style="font-size:30px;text-align:left;border-color:transparent;background-color:transparent;height:60px;width:200px;position:absolute;top:0px;left:5px;color:white;"><strong>Plant1</strong></button>
<p id="plant1Text"style="color:white;position:absolute;top:50px;left:15px;font-size:20px;font-weight:bold;">default</p>
<meter id="plant1Meter"style="width:150px;height:20px;position:absolute;top:120px;left:15px;" value="0" low="200" high="700" min="0" max="1023"></meter>
</section>

<script>
function cplant1(){
var x= document.getElementById("plant1line");
x.style.stroke=("red");
var y= document.getElementById("plant1circle");
y.style.stroke=("red");
}
</script>

</div>
</details>
</div>

<div id="aquariumshome"class="homeselector" style="position:absolute;top:20px;left:390px;">
<details>
<summary style="font-size:30px;text-align:center;color:white;"><strong>AQUARUM</strong></summary>
<div style="cursor:default;height:550px;width:1050px;background-color:rgb(25, 25, 25);position:absolute;left:-200px;">

<section class="menuselector"style="position:absolute;top:350px;left:770px;">
<button onclick="cfilterin()" style="font-size:30px;text-align:left;border-color:transparent;background-color:transparent;height:60px;width:200px;position:absolute;top:0px;left:5px;color:white;"><strong>Filter (internal)</strong></button>
</section>

<script>
function cfilterin(){
var x= document.getElementById("filterinline");
x.style.stroke=("red");
var y= document.getElementById("filterincircle");
y.style.stroke=("red");
}
</script>

<section class="menuselector"style="position:absolute;top:350px;left:380px;">
<button onclick="cfilterex()" style="font-size:30px;text-align:left;border-color:transparent;background-color:transparent;height:60px;width:200px;position:absolute;top:0px;left:5px;color:white;"><strong>Filter (external)</strong></button>
</section>

<script>
function cfilterex(){
var x= document.getElementById("filterexline");
x.style.stroke=("red");
var y= document.getElementById("filterexcircle");
y.style.stroke=("red");
}
</script>

...

This file has been truncated, please download it to see its full contents.