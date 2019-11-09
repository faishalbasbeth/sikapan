
<!DOCTYPE html>
<html>
<head>
  <title>BPPBD JEMBER</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="home/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="home/css/dashboard.css" rel="stylesheet">
  <script src="home/Chart.js/Chart.bundle.js"></script>
  <style type="text/css">.container {
                width: 100%;
                margin: 0px auto;
            }
  </style>

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
              <font class="navbar-brand" size="4" color="blue"><a href="">PENCEGAHAN & KESIAPSIAGAAN</a></font>
            </li>
            <li><a class="navbar-brand" href="logout.php ?>" onclick="return confirm('Apakah Anda Yakin Untuk Menutup Sistem?')">
              <img src="home/images/logout15.png" alt="logout" height="25px" align="right"/></a>
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
              <a href="">Beranda
              <img src="home/images/beranda.png" alt="tambah surat" height="30px" align="left"/>
              </a>
            </li>
            <br>
            <li class="">
              <a href="?controller=s_masuk&action=s_masukPK">Surat Masuk
                <img src="home/images/surat.png" alt="tambah surat" height="30px" align="left"/>
              </a>
            </li>
            <br>
          <li class=""><a href="?controller=s_keluar&action=s_keluarPK">Surat Keluar
            <img src="home/images/sk.png" alt="tambah surat" height="30px" align="left"/>
            </a>
          </li>
          <br>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <center><h1 class="page-header"><img src="home/images/file.png" alt="logout" height="50px">Beranda</h1></center>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Total Surat Pertahun<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="?controller=beranda&action=berandaPK">Grafik Total</a></li>
                  <li class="divider"></li>
                  <li><a href="?controller=s_masuk&action=grafik_sm_pk">Grafik Surat Masuk</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Grafik Surat Keluar</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="container">
            <canvas id="myChart" width="50" height="20"></canvas>
            <canvas id="myChart1" width="60" height="20" style="margin: 0 auto"></canvas>
          </div>
        <script>
            var ctx = document.getElementById("myChart");
            var ctx1 = document.getElementById("myChart1");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php foreach ($posts as $post) { ?>
                      <?php echo $post->tahun_k.','; ?>
                      <?php } ?>],
                    datasets: [{
                            label: 'Data Surat Keluar',
                            data: [<?php foreach ($posts as $post) { ?>
                              <?php echo $post->jumlah_tahunan_k.','; ?>
                              <?php } ?>],

                            borderColor : 'rgba(247,70,74,1)',
                            backgroundColor:'rgba(247,70,74,1)',
                            fill:true,
                            borderWidth: 1
                        }

                        ],
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>

        </div>
      </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/docs.min.js"></script>

</body>
</html>