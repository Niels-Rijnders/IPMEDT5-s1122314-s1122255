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
    string = "SELECT * FROM timetable WHERE time = "
    p = string + rcv
    if(rcv != ""):
        mycursor.execute(p)
        for x in mycursor:
            if x[2] == 0:
                print("leeg")
                port.write("l1")
                time.sleep(1)
            else:
                print("vol")
                port.write("l0")
                time.sleep(1)
            
  #  rcv = port.readline().strip()
  #  if (rcv == 'b'):
   #     os.system("python update.py")
   # time.sleep(1)
   # mydb.commit()

mydb.close()
