
#include<ESP8266WiFi.h>

#include<ESP8266HTTPClient.h>

const char* ssid = "saswat";
const char* password = "1234567890";

void setup() {
  // put your setup code here, to run once:
WiFi.begin(ssid,password);
Serial.begin(115200);
while(WiFi.status()!=WL_CONNECTED)
{
  Serial.print(".");
  delay(500);
}
Serial.println("Wifi Connected");
}

void loop() {
  // put your main code here, to run repeatedly:
if (WiFi.status() == WL_CONNECTED)
{
  int flag=1;
  double point=6.1;

  HTTPClient http;
  String url ="http://192.168.137.1/hack/insert.php?Flag=";
  url.concat(flag);
  url.concat("&Point=");
  url.concat(point);
  Serial.println(url.c_str());
  http.begin(url);
  int httpCode=http.GET();
  if(httpCode)
  {
    String payload=http.getString();
    Serial.println(payload);
  }
  http.end();
}
delay(1000);
} 
