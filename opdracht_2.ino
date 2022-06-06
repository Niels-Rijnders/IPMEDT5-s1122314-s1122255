
#include "SevenSegmentTM1637.h"

#define bt_dn 10
#define bt_up 9
int data = 0;
char object = ' ';

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
  Serial.begin(9600);

}

void loop() {

  
  
    display.print(num);
// increment 'num'
    if(num > 9999){
      num = 0;} 

 
  if( digitalRead(bt_dn) == HIGH)
  { // if the DN button is presses
   num -= 5;
   Serial.println(num);
   delay(400);

   }


  
  if( digitalRead(bt_up) == HIGH)
  { // if the DN button is presses
   num += 5;
   Serial.println(num); 
   delay(400);}  
    // decrement 'num'
   /* if(num == 960){
      num = 1000;}
      if(num == 960){
      num = 1100;}
      if(num == 1060){
      num = 1100;} */
     
  }
  
