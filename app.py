from flask import Flask, request, render_template, jsonify, redirect, url_for, session
from werkzeug.utils import secure_filename
import os
from knn_module import predict_image
import mysql.connector
import json
from flask_mysqldb import MySQL
import MySQLdb.cursors
import re


app = Flask(__name__)
app.secret_key = 'andre12'
app.config['UPLOAD_FOLDER'] = 'static/uploads/'

# Connect to the database
cnx = mysql.connector.connect(user='root', password='', host='localhost', database='db_mata')
cursor = cnx.cursor()

app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'db_mata'

mysql = MySQL(app)

@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']
        cursor = cnx.cursor()
        cursor.execute("SELECT * FROM user WHERE username = %s AND pass = %s", (username, password))
        user = cursor.fetchone()
        if user:
            session['username'] = username
            session['level'] = user[3]  # level pengguna (admin, operator, dokter)
            if session['level'] == 'Admin':
                return redirect(url_for('admin_beranda'))
            elif session['level'] == 'Operator':
                return redirect(url_for('operator_beranda'))
            elif session['level'] == 'Dokter':
                return redirect(url_for('dokter_beranda'))
        else:
            return 'Username atau password salah'
    return render_template('login.html')

@app.route('/admin/beranda')
def admin_beranda():
    return render_template('/admin/beranda.php')

@app.route('/operator/beranda')
def operator_beranda():
    return render_template('/operator/beranda.php')

@app.route('/dokter/beranda')
def dokter_beranda():
    return render_template('/dokter/beranda.php')

@app.route("/classification", methods=['GET', 'POST'])
def classification():
    return render_template("/admin/screening.php")

@app.route("/tambahpasien", methods=['GET', 'POST'])
def tambahpasien():
    return render_template("/admin/tambahpasien.php")

@app.route("/pasien", methods=['GET', 'POST'])
def pasien():
    try :
        cursor.execute("SELECT * FROM pasien")
        pasiens = cursor.fetchall()
        output = []
        for pasien in pasiens:
            output.append({
                'id_pasien': pasien[0],
                'nama': pasien[1],
                'alamat': pasien[2],
                'nohp': pasien[3],
                'tlahir': pasien[4]
            })  # Check if data is being processed correctly
        return render_template("/admin/pasien.php", pasiens=output)
    except mysql.connector.Error as err:
            print("Error:", err)  # Check for database errors
            return "Error fetching data"


@app.route("/pengguna", methods=['GET', 'POST'])
def pengguna():
    try :
        cursor.execute("SELECT * FROM user")
        users = cursor.fetchall()
        output = []
        for user in users:
            output.append({
                'id_user': user[0],
                'nm_user': user[1],
                'username': user[2],
                'nohp': user[3],
                'level': user[4]
            })  # Check if data is being processed correctly
        return render_template("/admin/pengguna.php", users=output)
    except mysql.connector.Error as err:
        print("Error:", err)  # Check for database errors
        return "Error fetching data"

@app.route("/tambahpengguna", methods=['GET', 'POST'])
def tambahpengguna():
    return render_template("/admin/tambahpengguna.php")

@app.route("/riwayat", methods=['GET', 'POST'])
def logout():
    return render_template("/admin/riwayat.php")

@app.route("/riwayat", methods=['GET', 'POST'])
def riwayat():
    return render_template("/admin/logout.php")


@app.route('/upload', methods=['POST'])
def upload_file():
    if 'file' not in request.files:
        return 'No file part'
    file = request.files['file']
    if file.filename == '':
        return 'No selected file'
    if file:
        filename = secure_filename(file.filename)
        file_path = os.path.join(app.config['UPLOAD_FOLDER'], filename)
        file.save(file_path)
        result = predict_image(file_path)
        return render_template('/admin/screening.php', result=result, image_url=file_path)

if __name__ == '__main__':
    app.run(host='127.0.0.1', port=5001, debug=True)
