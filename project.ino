#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
const char* ssid = "SABARNA PC";
const char* password = "sabarna@97";
int a=D2;
int b=D4;
int c=D6;
void setup () {
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.print("Connecting..");
  }
  pinMode(a,OUTPUT);
  pinMode(b,OUTPUT);
  pinMode(c,OUTPUT);
}
void loop() {
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    String api="http://sabarna.000webhostapp.com/project_php2.php?state=";
    int a=analogRead(A0);
    api=api+String(a,DEC);
    http.begin(api);
    Serial.println(api);
    delay(1000);
    int httpCode = http.GET();
    String response = "";
 
    if (httpCode > 0) {
      // start of fetching get process
      response = http.getString();
      Serial.println(response);   
    }
    else
      Serial.println(httpCode);
    http.end();
    // end of fetching get process
  }
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient cttp;
    cttp.begin("http://sabarna.000webhostapp.com/data");
    Serial.println();
    int httpCode = cttp.GET();
    String response = "";
 
    if (httpCode > 0) {
      // start of fetching get process
      response = cttp.getString();
      Serial.println(response);  
      switch(response[0]){
        case '1':
          digitalWrite(a,1);
          digitalWrite(b,0);
          digitalWrite(c,0);
          break;
        case '2': 
          digitalWrite(a,0);
          digitalWrite(b,1);
          digitalWrite(c,0);
          break;
        case '3':
          digitalWrite(a,0);
          digitalWrite(b,0);
          digitalWrite(c,1);
          break;  
    }
    }
    else
      Serial.println(httpCode);
    cttp.end();
    // end of fetching get process
    delay(500);
  }
  
}
