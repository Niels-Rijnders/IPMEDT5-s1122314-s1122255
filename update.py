import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="radiot12",
    database="laravel"

)

mycursor = mydb.cursor()

mycursor.execute("UPDATE count SET amount = amount + 1;")
mydb.commit()
