
#include "SevenSegmentTM1637.h"

#define bt_dn 10
#define bt_up 9
int data = 0;
char object = ' ';
const int LED = 11;
const int LEDG = 12;
bool Raan = false;
const int SENSORPIN = A0; 
int sensorValue = 0;


const int DISPLAY_CLK = 3;
const int DISPLAY_DIO = 2;


SevenSegmentTM1637 display(DISPLAY_CLK, DISPLAY_DIO);

int num = 930;

void setup() {
  display.begin();
  display.setBacklight(100);
  display.clear();
  pinMode(bt_dn, INPUT);
  pinMode(bt_up, INPUT);
  pinMode(LED, OUTPUT);
  pinMode(LEDG,OUTPUT);
  Serial.begin(9600);

}

void loop() {
  sensorValue = analogRead(SENSORPIN);

  while (Serial.available() > 0) {
    data = Serial.read();
  }


  switch (data) {
    case 'l':
      object = 'l';
      break;
    case '1':
      if (object == 'l') {
        /*Raan = false;*/
        digitalWrite(LED, HIGH);
        digitalWrite(LEDG, LOW);
        delay(sensorValue);
      }
      break;
    case '0':
      if (object == 'l') {
        /*Raan = true;*/
        digitalWrite(LED, LOW);
        digitalWrite(LEDG, HIGH);
        delay(sensorValue);
        
      }
      break;

  }

 /* if (Raan == true) {
    digitalWrite(LED, HIGH);
    digitalWrite(LEDG, LOW);
  } else {
    digitalWrite(LED, LOW);
    digitalWrite(LEDG, HIGH);
  }
  */

  display.print(num);
  // increment 'num'
  if (num > 1700) {
    num = 1700;
  }
  if (num < 900) {
    num = 900;
  }


  if ( digitalRead(bt_dn) == HIGH)
  { // if the DN button is presses
    num -= 5;
    Serial.println(num);
    delay(400);

  }



  if ( digitalRead(bt_up) == HIGH)
  { // if the DN button is presses
    num += 5;
    Serial.println(num);
    delay(400);
  }
  // decrement 'num'
  if(num == 960){
     num = 1000;}
     if(num == 1060){
     num = 1100;}
     if(num == 1160){
     num = 1200;} 
     if(num == 1260){
     num = 1300;} 
     if(num == 1360){
     num = 1400;} 
     if(num == 1460){
     num = 1500;} 
     if(num == 1560){
     num = 1600;}
     if(num == 1660){
     num = 1700;}

     
     if (num == 995) {
     num = 955;
     display.clear();
     }
     if (num == 1095) {
     num = 1055;
     } 
     if (num == 1195) {
     num = 1155;
     }  
     if (num == 1295) {
     num = 1255;
     }
     if (num == 1395) {
     num = 1355;
     } 
     if (num == 1495) {
     num = 1455;
     }  
     if (num == 1595) {
     num = 1555;
     }
     if (num == 1695) {
     num = 1655;
     } 

}
