const int LED = 12;
const int BUTTON = 10;
int data = 0;
char object = ' ';
bool pressed = false;

void setup(){
    pinMode(BUTTON, INPUT_PULLUP);
    Serial.begin(9600);
}

void loop(){

    while (Serial.available > 0) {
        data = Serial.read();
    }

    switch (data) {
        case 'l':
         object = 'l';
         break;
        case '1':
         if (object == 'l') {
             digitalWrite(LED, HIGH);
         }
         break;
        case '0':
        if (object == 'l') {
            digitalWrite(LED, LOW);
        }
        break;

    }

    if(!digitalRead(BUTTON)) {
        delay(10);
        if (!digitalRead(BUTTON)) {
            if (!pressed){
            pressed = true;
            Serial.println('b');
            }
        }
    } else{
        pressed = false;
    }

}
