from flask import Flask, request, render_template
from werkzeug.utils import secure_filename
import os
from knn_module import predict_image
import mysql.connector


app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = 'static/uploads/'

@app.route("/", methods=['GET', 'POST'])
def login():
    return render_template('/admin/beranda.php')

@app.route("/classification", methods=['GET', 'POST'])
def classification():
    return render_template("/admin/screening.php")

@app.route("/tambahpasien", methods=['GET', 'POST'])
def tambahpasien():
    return render_template("/admin/tambahpasien.php")

@app.route("/pasien", methods=['GET', 'POST'])
def pasien():
    return render_template("/admin/pasien.php")

@app.route("/user", methods=['GET', 'POST'])
def pengguna():
    return render_template("/admin/pengguna.php")

@app.route("/tambahpengguna", methods=['GET', 'POST'])
def tambahpengguna():
    return render_template("/admin/tambahpengguna.php")

@app.route("/riwayat", methods=['GET', 'POST'])
def logout():
    return render_template("/admin/riwayat.php")

@app.route("/riwayat", methods=['GET', 'POST'])
def riwayat():
    return render_template("/admin/logout.php")

@app.route("/koneksi", methods=['GET', 'POST'])
def koneksi():
    return render_template("/admin/koneksi.php")

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
