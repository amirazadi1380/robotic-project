       /////////////////////////////////////////////////////////////////
      //                                                             //
     //                    -ARDUINAUTOMOTON-                       //
    //        Creating a professional website to communicate       //
   //                         with Arduino                        // 
  //               (Compatible with Android system)              //
 //                        by Kutluhan Aktar.                   //
/////////////////////////////////////////////////////////////////

 //
 // Creating a professional website to control my aquarium and my irrigation system in my home and 
 // to receive the information about the home when I am not at the home is the main aspect of this project.
 // To achive that goal I created the Arduinautmotion project that includes 4 different HTML pages in my Apache localhost.
 // Also, the Arduino Ethernet Shield hosts another HTML web page which can be reached with the chosen IPAddress, to communicate with the Arduinautomotion website. 
 // The Arduinautomotion website has an easy interface to get and send data about the home from Arduino.
 // All things the Arduinautomotion website does is explained on my Hackster.io page.(For instance, how Arduino communicates with the website using PHP Forms.)  
 // I programmed the Arduinautomotion website and its components with HTML,CSS,JavaScript and PHP so that it is just a showcase for Arduino side. 
 // If you know these languages, please check my Hackster.io page to see whole project's details and the Arduinautmotion website codes.
 // The Arduino code is basically similar to the WebServer code which is in the Ethernet library examples folder.
 // I only added some codes to control sensors and to run commands which came from the Arduinautomotion website.
 // I used a DHT11 module, a LDR, a Flame sensor and a MQ4 sensor for measuring the variables.
 // And I used four 2 way relay to control the aquarium's parts and the irrigation system.
 // The tricky part is that you  can not use  10,11,12,13 pins when using the Arduino Ethernet Shield so I used the analog pins instead of the digital pins to fulfill the project.
 // After the Arduino code is run, the Arduinautomotion website sends and gets data from Arduino through LAN over W-F.
 // 
 // Connections:
 //
 // Arduino 
 //
 //                                   DHT11 Module
 // Pin 2   -------------------------
 //
 //                                   2 Way Relay (1)
 // Pin 3   -------------------------
 // Pin 4   -------------------------
 //
 //                                   2 Way Relay (2)
 // Pin 5   -------------------------
 // Pin 6   -------------------------
 //
 //                                   2 Way Relay (3)
 // Pin 7   -------------------------
 // Pin 8   -------------------------
 //
 //                                   2 Way Relay (4)
 // Pin 9   -------------------------
 //                                   Arduno Ethernet Shield
 // Pin 10  --------------------------
 // Pin 11  --------------------------
 // Pin 12  --------------------------
 // Pin 13  --------------------------
 //
 //                                   LDR
 // AO      -------------------------- 
 //                             
 //                                   Flame Sensor 
 // A1      --------------------------
 //
 //                                   MQ4   Sensor
 // A2      --------------------------
 //
 //                                   Hygrometer Module (1)
 // A3      --------------------------
 //
 //                                   Hygrometer Module (2)
 // A4      --------------------------
 //
 //                                   Hygrometer Module (3)
 // A5      --------------------------
 //
 //
 
#include <SPI.h>
#include <Ethernet.h>
//Initial DHT11 library and create an object named dht to communicate with the sensor.
#include "DHT.h"

DHT dht;
// Enter a MAC address and IP address for your controller below.
// The IP address will be dependent on your local network:
byte mac[] = {
  0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED  // Your MAC address has to be here.
};
IPAddress ip(192, 168, 1, 21);

// Initialize the Ethernet server library
// with the IP address and port you want to use
// (port 80 is default for HTTP):
EthernetServer server(80);
// Define which pin connects to which object such as a air pump in your aquarium.
int pump = 3;
int lamp = 4;
int feed = 5;
int heater = 6;
int filterex =7;
int filterin =8;
int irrigation =9;
// Determine a string to collect the commands came from Arduiaautomotion.php.
String readString ;

void setup() {
  // Open serial communications and wait for port to open:
  Serial.begin(9600);
  // Determine the relay module's pins.
   pinMode(pump,OUTPUT);
   pinMode(lamp,OUTPUT);
   pinMode(feed,OUTPUT);
   pinMode(heater,OUTPUT);
   pinMode(filterex,OUTPUT);
   pinMode(filterin,OUTPUT);
   pinMode(irrigation,OUTPUT);
   // Give HIGH value for the default.
   digitalWrite(pump,HIGH);
   digitalWrite(lamp,HIGH);
   digitalWrite(feed,HIGH);
   digitalWrite(heater,HIGH);
   digitalWrite(filterex,HIGH);
   digitalWrite(filterin,HIGH);
   digitalWrite(irrigation,HIGH);
   //Connect Dht11 to data pin 2.
   dht.setup(2); 

  // Start the Ethernet connection and the server:
  Ethernet.begin(mac, ip);
  server.begin();
  Serial.print("server is at ");
  Serial.println(Ethernet.localIP());
}

void loop() {
 // This makes Arduino board to wait until the temperature and the humidity values are accurate.
 delay(dht.getMinimumSamplingPeriod());
 // The datas from DHT11 Sensor.
  float humidity = dht.getHumidity();
  
  float temperature = dht.getTemperature();
  
  float fahrenheit = dht.toFahrenheit(temperature);
  // Integer values of analog pins'readings.
  int ldrValue=analogRead(A0);

  int flameValue=analogRead(A1); 

  int MQ4Value=analogRead(A2); 

  int HygValueA=analogRead(A3);
  
  int HygValueB=analogRead(A4);

  int HygValueC=analogRead(A5);
   
  // Listen for incoming clients
  EthernetClient client = server.available();
  if (client) {
    Serial.println("new client");
    // An http request ends with a blank line
    boolean currentLineIsBlank = true;
    while (client.connected()) {
      if (client.available()) {
        char c = client.read();
        // Add each data came from Arduinautomotion.php to String named readString.
        if (readString.length() < 135) {
          
          readString += c;
          //Serial.print(c);
         }
        Serial.println(readString);

        // If the line ends, initial a HTTP Request.
        if (c == '\n') {
          // send a standard http response header
          client.println("HTTP/1.1 200 OK");
          client.println("Content-Type:text/html");
          client.println("Connection: close");  // the connection will be closed after completion of the response
          client.println();
          client.println("<!DOCTYPE HTML>");
          client.println("<html style=""background-color:black;"">");
          client.println("<head>");
          client.println("<title>ArduinoSide</title>"); // Header for the web page.
          client.println("<link rel=""icon"" href=""http://www.clker.com/cliparts/D/W/n/h/n/W/house-logo-hi.png""></link>"); // Describe the icon of the web page.
          client.println("</head>");
          client.println("<body>");
          // http://your IPAddress/your site? is the way to access the server.
          client.println("<form action=""http://192.168.1.20/Arduinautomotioncommunication.php?"" method=""get""  target=""_blank"">"); // The hidden HTML form for sending the information.
                    client.println("<input type=""hidden""  name=""temperatureCelsius"" "); // The easiest way to send data to the server is to use the Get Method, but it is not secure.However, the Post Method can be used for security.
          client.println("value=");
          client.println(temperature);
          client.println(">");
                    client.println("<input type=""hidden""  name=""temperatureFahrenheit"" ");
          client.println("value=");
          client.println(fahrenheit);
          client.println(">");
                    client.println("<input type=""hidden""  name=""humidity"" ");
          client.println("value=");
          client.println(humidity);
          client.println(">");
                    client.println("<input type=""hidden""  name=""flame"" ");
          client.println("value=");
          client.println(flameValue);
          client.println(">");
                    client.println("<input type=""hidden""  name=""MQ4sensor"" ");
          client.println("value=");
          client.println(MQ4Value);
          client.println(">");
                    client.println("<input type=""hidden""  name=""LDRsensor"" ");
          client.println("value=");
          client.println(ldrValue);
          client.println(">");
                    client.println("<input type=""hidden""  name=""plant1H"" ");
          client.println("value=");
          client.println(HygValueA);
          client.println(">");
                    client.println("<input type=""hidden""  name=""plant2H"" ");
          client.println("value=");
          client.println(HygValueB);
          client.println(">");
                    client.println("<input type=""hidden""  name=""plant3H"" ");
          client.println("value=");
          client.println(HygValueC);
          client.println(">");
          client.println("<input type=""submit"" value=""Communication"" style=""width:500px;height:200px;font-weight:bold;background-color:black;color:green;"">"); // When the Communication button is clicked, the information is sent to the server from the chosen IPAddress. 
          client.println("</form>");
          client.println("</body>");
          client.println("</html>");
          
          break;
        }

      }
    }
    // Give the web browser time to receive the data.
    delay(1);
    // Close the connection:
    client.stop();
    // Open the objects which are selected by Arduinautomotion.php (such as  internal filter or external filter in the Aquarium or irrigation system in the Plant).
           if (readString.indexOf("?airpump=pumpIsOn") >0){
               digitalWrite(pump, LOW);
           }
           else if (readString.indexOf("?airpump=pumpIsOff") >0){
               digitalWrite(pump, HIGH);
           }
           if (readString.indexOf("&lamp=lampIsOn") >0){
               digitalWrite(lamp, LOW);
           }
           else if (readString.indexOf("&lamp=lampIsOff") >0){
               digitalWrite(lamp, HIGH);
           }
           if (readString.indexOf("&feed=feedIsOn") >0){
               digitalWrite(feed, LOW);
           }
           else if (readString.indexOf("&feed=feedIsOff") >0){
               digitalWrite(feed, HIGH);
           }
           if (readString.indexOf("&heater=heaterIsOn") >0){
               digitalWrite(heater, LOW);
           }
           else if (readString.indexOf("&heater=heaterIsOff") >0){
               digitalWrite(heater, HIGH);
           }
            if (readString.indexOf("&filterex=exIsOn") >0){
               digitalWrite(filterex, LOW);
           }
           else if (readString.indexOf("&filterex=exIsOff") >0){
               digitalWrite(filterex, HIGH);
           }
           if (readString.indexOf("&filterin=inIsOn") >0){
               digitalWrite(filterin, LOW);
           }
           else if (readString.indexOf("&filterin=inIsOff") >0){
               digitalWrite(filterin, HIGH);
           }
           if (readString.indexOf("&irrigation=start") >0){
               digitalWrite(irrigation, LOW);
           }
           else if (readString.indexOf("&irrigation=stop") >0){
               digitalWrite(irrigation, HIGH);
           }
           readString="";
    Serial.println("client disconnected");
  }
}