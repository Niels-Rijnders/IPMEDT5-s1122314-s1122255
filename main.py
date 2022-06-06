import mysql.connector

import serial
import os
import time
mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="radiot12",
    database="laravel"
)
port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=3.0)

mycursor = mydb.cursor()
while True:
    rcv = port.readline().strip()
    rcv = str(rcv)
    #wat we hier doen is uitlezen wat we van de arduino binnenkrijgen, als je met de arduino een tijd van 900 
    #selecteert dan word die ook geprint naar de serial monitor. hierboven word die uitgelezen en gestrip en 
    #daarna naar een string geconverteert.
    string = "SELECT * FROM timetable WHERE time = "
    p = string + rcv
    #de reden dat het een string word is zodat we het mee kunnen geven aan deze string hierboven, een sql commando
    #en doordat beide een string zijn kan de gecombineerde string naar sql gestuurd worden die dan de specifieke tijd
    #opvraagd die de arduino naar de seriele monitor printe.
    if(rcv != ""):
    #De seriele monitor print een lege regel als er niks gestuurd word dus eerst checken we of er wel wat binnenkomt
    #en daarna maken we de string met het getal en kan er in de database gecheked worden.
        mycursor.execute(p)
        for x in mycursor:
            if x[2] == 0:
            #omdat de tabel 3 kolommen heeft kijken we hier specifiek naar x[2] want dit is waar het telefoonnummer in 
            #staat en ook zoals bij de javascript of de tabelcontroller checken we of het een 0 is want dan is die leeg.
                print("leeg")
                port.write("l1")
                time.sleep(1)
            #als hij leeg is dan word leeg geprint zodat we kunnen checken of het programma runt en word er met 
            #port write een van de twee lampjes op de arduino aangestuurd, in dit geval de groene.
            else:
                print("vol")
                port.write("l0")
                time.sleep(1)
        

mydb.close()
