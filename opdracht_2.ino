
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

  /*hier word gechecked of er data binnenkomt van main.py. als main.py namelijk een lege plek heeft dan word l1 
  geschrevn en dat word hier opgevangen. in het geval van l1 oftewel een lege plek dan gaat het eene ledje branden
  en de andere niet en als er een 0 binnenkomt dan worden de ledjes omgedraait om aan te geven dat die vol is. */
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
/*dit was mijn idee om te checken welk ledje wanneer moet branden maar omdat ik geen toegang had tot de hardware
kon ik mijn deze code niet testen en debuggen dus heeft Niels Lusink de code wat aangepast zodat het voor hem werkte */
 /* if (Raan == true) {
    digitalWrite(LED, HIGH);
    digitalWrite(LEDG, LOW);
  } else {
    digitalWrite(LED, LOW);
    digitalWrite(LEDG, HIGH);
  }
  */
/*deze code zorgt ervoor dat je niet hoger dan 1800 of lager dan 900 kan, hier zou ik bijvoorbeeld willen zorgen 
dat als je bij 1800 nog hoger gaat dat je dan bij 900 uitkomt maar omdat ik de code zelf niet kan testen 
blijf ik er maar vanaf */
  display.print(num);
  // increment 'num'
  if (num > 1800) {
    num = 1800;
  }
  if (num < 900) {
    num = 900;
  }

/*hier worden de knoppen uitgelezen en word er 5 bij of afgetelt bij num afhankelijk van welke knop is ingedrukt */
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

  /*en nu komen we bij de reden voor mijn verboze comments, deze travesty. Ik hoef hier niet uit te leggen hoe dit 
  werkt want het spreekt voor zich maar de manier waarop het gedaan is is wel een beetje jammer. Eerst had ik hier
  een zelfde soort if loop getypt als bij de timetableseeder maar wederom omdat ik de code zelf niet kon testen
  heeft Niels Lusink het op zijn eigen manier gedaan en ookal typ ik dit allemaal, het werkt wel tenminste 
  en omdat het een klein programma is is er geen hele erge slowdown dus voor nu is dit goed genoeg. */
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
     if(num == 1760){
       num = 1800;}

     
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
     if (num == 1795) {
       num == 1755;
     }

}
