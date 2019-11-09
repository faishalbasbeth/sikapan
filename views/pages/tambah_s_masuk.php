
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
              <a href="">Tambah Surat Masuk
                <img src="home/images/tambah.png" alt="logout" height="30px" align="left"/>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <center><h1 class="page-header"><img src="home/images/file.png" alt="logout" height="50px">Data Surat Masuk</h1></center>

          <form class="form-horizontal" method="GET">
            <input type="hidden" name="controller" value="s_masuk">
            <input type="hidden" name="action" value="addDataS_masuk">
            <div class="input-group">
              <label for="surat_dari">Surat Dari &nbsp : &nbsp</label>
                  <select name="surat_dari" id="surat_dari">
                    <?php foreach ($posts as $post) { ?>
                      <option><?php echo $post->instansi; ?></option>
                    <?php } ?>
                  </select>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3">
                <div class="input-group">
                  <span class="input-group-addon" id="tgl_terima">Tanggal Terima</span>
                  <input type="date" class="form-control" name="tgl_terima" placeholder="2018-10-24" aria-describedby="alamatInstansi" required="">
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3">
                <div class="input-group">
                  <span class="input-group-addon" id="no_agenda">No. Agenda</span>
                  <input type="text" class="form-control" name="no_agenda" placeholder="517" aria-describedby="no_agenda" required="">
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
              <label for="disposisi">Disposisi &nbsp : &nbsp</label>
                <select name="disposisi">
                    <option name="disposisi" value="SEKRETARIS">SEKRETARIS</option>
                    <option name="disposisi" value="KABID. PENCEGAHAN & KESIAPSIAGAAN">KABID. PENCEGAHAN & KESIAPSIAGAAN</option>
                    <option name="disposisi" value="KABID. KEDARURATAN & LOGISTIK">KABID. KEDARURATAN & LOGISTIK</option>
                    <option name="disposisi" value="KABID. REHABILITASI & REKONSTRUKSI">KABID. REHABILITASI & REKONSTRUKSI</option>
                </select>
            </div>
          <br>
          <div class="row">
              <div class="col-lg-8">
                <div class="input-group">
                  <span class="input-group-addon" id="ket">Keterangan</span>
                  <input type="text" class="form-control" name="ket" placeholder="Di cukupi" aria-describedby="ket" required="">
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
              <a href="?controller=s_masuk&action=s_masuk" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkan Inputan?')" 
              class="btn btn-danger">Batal</a>
          </form>

</div>
      </body>

    <script src="home/js/bootstrap.min.js"></script>

</html>