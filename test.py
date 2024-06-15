from flask import Flask, request, render_template
from werkzeug.utils import secure_filename
import os
from knn_module import predict_image
import mysql.connector
from flask import jsonify
import pdb

# MySQL database connection settings
username = 'root'
password = ''
host = 'localhost'
database = 'db_mata'
port = '3306'

# Create a MySQL connection
cnx = mysql.connector.connect(
    user=username,
    password=password,
    host=host,
    database=database,
    port=port,
)

cursor = cnx.cursor()

def my_function(x):
    cursor.execute("SELECT * FROM user")
    users = cursor.fetchall()
    print(users)  # print the result set
    cursor.execute("SELECT * FROM user")

my_function(5)