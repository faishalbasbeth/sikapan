
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
              <font class="navbar-brand" size="4" color="blue"><a href="">REHABILITASI & REKONSTRUKSI</a></font>
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
              <a href="?controller=beranda&action=berandaRR">
                <img src="home/images/beranda.png" alt="tambah surat" height="30px" align="left"/>Beranda
              </a>
            </li>
            <br>
            <li class="">
              <a href="?controller=s_masuk&action=s_masukRR">Surat Masuk
                <img src="home/images/surat.png" alt="tambah surat" height="30px" align="left"/>
              </a>
            </li>
            <br>
            <li class="active">
              <a href="?controller=s_keluar&action=s_keluarRR">Surat Keluar
                <img src="home/images/sk.png" alt="tambah surat" height="30px" align="left"/>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <center><h1 class="page-header"><img src="home/images/file.png" alt="logout" height="50px">Data Surat Keluar</h1></center>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-13 col-md-offset-0">
        <form class="navbar-form navbar-right" method="GET">
                <input class="hidden" name="controller" value="s_keluar">
                <input class="hidden" name="action" value="search_RR">
                <input type="text" class="form-control" id="id_s_keluar" name="id_s_keluar" value="" placeholder="Cari" >
                <img src="home/images/search.png" alt="search" height="30px" align="left"/>
                <button class="hidden" type="submit"></button> 
        </form>
      <br><br>

      <table class="table table-striped table-bordered">
        <thead class="danger">
          
          <th style="text-align: center;">No</th>
          <th style="text-align: center;">Tgl Surat</th>
          <th style="text-align: center;">Tujuan Surat</th>
          <th style="text-align: center;">No Surat</th>
          <th style="text-align: center;">Perihal</th>
          <th style="text-align: center;">Staf</th>
          <th style="text-align: center;">Penerima Surat</th>
          <th style="text-align: center;">Status</th>
          <th style="text-align: center;">Foto</th>
          <th style="text-align: center; width: 8em width="190px;">Aksi</th>
          <?php $i=1; ?>
          <?php foreach ($posts as $post) {
            ?>
        </thead>

        <tr>
          <td style="text-align: center;"><?php echo $i; ?></td>
          <td style="text-align: center;"><?php echo $post->tgl_s; ?></td>
          <td style="text-align: center;"><?php echo $post->tujuan_s; ?></td>
          <td style="text-align: center;"><?php echo $post->no_s; ?></td>
          <td style="text-align: center;"><?php echo $post->perihal; ?></td>
          <td style="text-align: center;"><?php echo $post->staf; ?></td>
          <td style="text-align: center;"><?php echo $post->penerima_s; ?></td>
          <td style="text-align: center;"><?php echo $post->status; ?></td>
          <td align="center"><img src="<?php echo $post->foto; ?>" width="50" height="50" "><br></td>
          <td class="text-center">
            <div class="btn-group" role="group">
                <a href="?controller=s_keluar&action=editStatus_RR&id_s_keluar=<?=$post->id_s_keluar?>" onclick="return confirm('Apakah Anda Yakin Untuk Mengubah Status?')" name ="status" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></a>
            </div>
          </td>
        </tr> <?php $i++;} ?>
        </table>
    <br>

    </div>
  </div>
</div>
</div>
      </body>

    <script src="home/js/bootstrap.min.js"></script>

</html>