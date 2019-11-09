
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
            <li><a class="navbar-brand"  href="logout.php ?>" onclick="return confirm('Apakah Anda Yakin Untuk Menutup Sistem?')">
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
            <li class="">
              <a href="?controller=beranda&action=beranda">Beranda
                <img src="home/images/beranda.png" alt="search" height="30px" align="left"/>
              </a>
            </li>
            <br>
            <li class="">
              <a href="?controller=s_masuk&action=s_masuk">Surat Masuk
                <img src="home/images/surat.png" alt="search" height="30px" align="left"/>
              </a>
            </li>
            <br>
            <li class="">
              <a href="?controller=s_keluar&action=s_keluar">Surat Keluar
                <img src="home/images/sk.png" alt="search" height="30px" align="left"/>
              </a>
            </li>
            <br>
            <li class="">
              <a href="?controller=instansi&action=instansi">Instansi
                <img src="home/images/instansi.png" alt="search" height="30px" align="left"/>
              </a>
            </li>
            <br>
            <li class="active">
              <a href="">Akun
                <img src="home/images/client.png" alt="search" height="30px" align="left"/>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <center><h1 class="page-header"><img src="home/images/file.png" alt="logout" height="50px">Data Akun</h1></center>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-13 col-md-offset-0">
        <a href="?controller=akun&action=tampilAddAkun">
          <button class="btn btn-primary bold">
            <img src="home/images/client.png" alt="tambah surat" height="30px" align="left"/>
          Tambah Akun</button>
        </a>

      <br><br>

      <table class="table table-striped table-bordered">
        <thead class="danger">
          
          <th style="text-align: center;">No</th>
          <th style="text-align: center;">Nama</th>
          <th style="text-align: center;">Hak Akses</th>
          <th style="text-align: center;">Password</th>
          <th style="text-align: center; width: 8em width="190px;">Aksi</th>
          <?php $i=1; ?>
          <?php foreach ($posts as $post) {
            ?>
        </thead>

        <tr>
          <td style="text-align: center;"><?php echo $i; ?></td>
          <td style="text-align: center;"><?php echo $post->nama; ?></td>
          <td style="text-align: center;"><?php echo $post->hak_akses; ?></td>
          <td style="text-align: center;"><?php echo md5($post->password); ?></td>
          <td class="text-center">
            <a href="?controller=akun&action=deleteAkun&id_user=<?php echo $post->id_user ?>" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data?')"><button class="btn btn-danger bold">Hapus</button></a>
          </td>
        </tr> <?php $i++;} ?>
        </table>

    </div>
  </div>
</div>
</div>
      </body>

    <script src="home/js/bootstrap.min.js"></script>

</html>