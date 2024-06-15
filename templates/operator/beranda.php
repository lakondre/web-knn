
<!DOCTYPE htaml>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Simple Header - CodeWith Random</title>
        <link rel="stylesheet" type="text/css" href="../static/assets/css/style.css">       
	    <link rel="website icon" type="png" href="../static/assets/img/cropped-icon-RSAW-270x270.png">
    </head>
    <body>
        <header class="site-header">
            <div class="site-identity">
                <h1><a href="../admin/beranda.html"><img src="../static/assets/img/logo.png" alt="HTML tutorial" style="width: 258px;height:42px;"></a></h1>
            </div>
            <nav class="site-navigation">
                <ul class="nav">
                    <li><a href="{{ url_for('pengguna') }}">Data Pengguna</a></li>
                    <li><a href="{{ url_for('pasien') }}">Data Pasien</a></li>
                    <li><a href="{{ url_for('riwayat') }}">Data Riwayat</a></li>
                    <li><a href="{{ url_for('classification') }}">Screening Sistem</a></li>
                    <li><a href="{{ url_for('logout') }}">Logout</a></li>
                </ul>
            </nav>
        </header>
    <h1>Beranda Operator</h1>

    </body>
</html>