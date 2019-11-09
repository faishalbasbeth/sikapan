
<!DOCTYPE html>
<html>
<head>
  <title>BPPBD JEMBER</title>

  <link href="home/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/css/dashboard.css" rel="stylesheet">

</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">
            <img src="home/images/sip.png" alt="logo bpbd" height="30px" align="left"/>  
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <font class="navbar-brand" size="4" color="blue"><a href="">AGENDARIS</a></font>
            </li>
            <li><a class="navbar-brand" href="logout.php ?>" onclick="return confirm('Apakah Anda Yakin Untuk Menutup Sistem?')">
              <img src="home/images/logout15.png" alt="logout" height="25px" align="left"/></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active">
              <a href="">Tambah Akun
                <img src="home/images/tambah.png" alt="logout" height="30px" align="left"/>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <center><h1 class="page-header"><img src="home/images/file.png" alt="logout" height="50px">Data Akun</h1></center>

          <form class="form-horizontal" method="GET">
            <input type="hidden" name="controller" value="akun">
            <input type="hidden" name="action" value="addDataAkun">
            <div class="row">
              <div class="nyoba">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="nama">Nama</span>
                  <input type="text" class="form-control" name="nama" placeholder="Admin" aria-describedby="nama">
                </div>
              </div>
              </div>
            </div>
          <br>
          <div class="input-group">
              <label for="hak_akses">Hak Akses &nbsp : &nbsp</label>
                <select name="level">
                    <option name="level" id="level" value="1">AGENDARIS</option>
                    <option name="level" id="level" value="2">SEKRETARIS</option>
                    <option name="level" id="level" value="3">KABID. PENCEGAHAN & KESIAPSIAGAAN</option>
                    <option name="level" id="level" value="4">KABID. KEDARURATAN & LOGISTIK</option>
                    <option name="level" id="level" value="5">KABID. REHABILITASI & REKONSTRUKSI</option>
                </select>
            </div>
          <br>
          <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="password">Password</span>
                  <input type="password" class="form-control" name="password" placeholder="897Uij" aria-describedby="password">
                </div>
              </div>
            </div>
          <br>
        <br>

              <button class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Untuk Menyimpan data?')">Simpan</button>
              <a href="?controller=akun&action=akun" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkan Inputan?')" class="btn btn-danger">Batal</a>
          </form>

</div>
      </body>

    <script src="home/js/bootstrap.min.js"></script>

</html>