
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
              <font class="navbar-brand" size="5" color="blue"><a href="">AGENDARIS</a></font>
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
              <a href="">Tambah Surat Keluar
                <img src="home/images/tambah.png" alt="search" height="30px" align="left"/>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Surat Keluar</h1>

          <form class="form-horizontal" method="GET">
            <input type="hidden" name="controller" value="s_keluar">
            <input type="hidden" name="action" value="addDataS_keluar">
          <div class="row">
              <div class="col-lg-3">
                <div class="input-group">
                  <span class="input-group-addon" id="tgl_s">Tanggal Surat</span>
                  <input type="date" class="form-control" name="tgl_s" placeholder="2018-10-24" aria-describedby="tgl_s" required="">
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="no_s">Tujuan Surat</span>
                  <input type="text" class="form-control" name="tujuan_s" placeholder="Yth. Ilham Purnama" aria-describedby="tujuan_s" required="">
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3">
                <div class="input-group">
                  <span class="input-group-addon" id="no_s">No. Surat</span>
                  <input type="text" class="form-control" name="no_s" placeholder="517" aria-describedby="no_s" required="">
                </div>
              </div>
            </div>
          <br>
          <div class="row">
              <div class="col-lg-8">
                <div class="input-group">
                  <span class="input-group-addon" id="perihal">Perihal</span>
                  <input type="text" class="form-control" name="perihal" placeholder="Pengiriman Nama Anggota" aria-describedby="perihal" required="">
                </div>
              </div>
            </div>
          <br>
          <div class="input-group">
              <label for="staf">Staf Yang Bersangkutan &nbsp : &nbsp</label>
                <select name="staf">
                    <option name="staf" value="SEKRETARIS">SEKRETARIS</option>
                    <option name="staf" value="KABID. PENCEGAHAN & KESIAPSIAGAAN">KABID. PENCEGAHAN & KESIAPSIAGAAN</option>
                    <option name="staf" value="KABID. KEDARURATAN & LOGISTIK">KABID. KEDARURATAN & LOGISTIK</option>
                    <option name="staf" value="KABID. REHABILITASI & REKONSTRUKSI">KABID. REHABILITASI & REKONSTRUKSI</option>
                </select>
            </div>
          <br>
          <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="penerima_s">Penerima Surat</span>
                  <input type="text" class="form-control" name="penerima_s" placeholder="Faishal Basbeth" aria-describedby="penerima_s" required="">
                </div>
              </div>
            </div>
          <br>
          <div class="row">
              <div class="col-lg-3">
                <div class="input-group">
                  <label for="foto">Foto &nbsp : &nbsp</label>
                  <input type="File" name="foto" id="foto" required="">
                </div>
              </div>
            </div>
            <br>
          <br>
        <br>

              <button class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Untuk Menyimpan Data?')">Simpan</button>
              <a href="?controller=s_keluar&action=s_keluar"  onclick="return confirm('Apakah Anda Yakin Untuk Membatalkan Inputan?')" class="btn btn-danger">Batal</a>
          </form>

</div>
      </body>

    <script src="home/js/bootstrap.min.js"></script>

</html>