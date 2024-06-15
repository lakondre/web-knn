import mysql.connector

def get_db_connection():
    connection = mysql.connector.connect(
        host='localhost',
        user='root',
        password='',  # Sesuaikan dengan password MySQL Anda
        database='user_management'
    )
    return connection
