
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
              <a href="">Edit Instansi
                <img src="home/images/edit.png" alt="logout" height="30px" align="left"/>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Instansi</h1>

          <form class="form-horizontal" method="GET">
            <?php foreach ($posts as $post){

                ?>
            <input type="hidden" name="controller" value="instansi">
            <input type="hidden" name="action" value="editDataInstansi">
            <input type="hidden" name="id_instansi" value="<?php echo $post->id_instansi; ?>">

            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="instansi">Nama Instansi</span>
                  <input type="text" class="form-control" name="instansi" placeholder="BPBD JEMBER" aria-describedby="instansi" required="" value="<?php echo $post->instansi ?>">
                </div>
              </div>
            </div>
          <br>
          <div class="row">
              <div class="col-lg-10">
                <div class="input-group">
                  <span class="input-group-addon" id="alamat">Alamat Instansi</span>
                  <input type="text" class="form-control" name="alamat" placeholder="Jl. Danau Toba No.16, Lingkungan Panji, Tegalgede, Sumbersari, Kabupaten Jember, Jawa Timur 68124" aria-describedby="alamat" required="" value="<?php echo $post->alamat ?>">
                </div>
              </div>
            </div>
          <br>
        <br>

              <button class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Untuk Menyimpan Data?')">Simpan</button>
              <a href="?controller=instansi&action=instansi" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkan Inputan?')" class="btn btn-danger">Batal</a>
              <?php } ?>
          </form>

</div>
      </body>

    <script src="home/js/bootstrap.min.js"></script>

</html>