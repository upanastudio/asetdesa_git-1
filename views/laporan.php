<?php include "../libs/path.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Beranda - Aset Desa </title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/select2/select2.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/fullcalendar/fullcalendar.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/target-admin.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/custom.css">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="./index.html">
      <br>
        <p >Aset Desa Terpadu</p>
        
        <!--<img src="./img/logo.png" alt="Site Logo">-->
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">

      

      <ul class="nav navbar-nav noticebar navbar-left">

        <li class="dropdown">
          <a href="./page-notifications.html" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell"></i>
            <span class="navbar-visible-collapsed">&nbsp;Notifications&nbsp;</span>
            <span class="badge">3</span>
          </a>

          <ul class="dropdown-menu noticebar-menu" role="menu">
            <li class="nav-header">
              <div class="pull-left">
                Pemberitahuan
              </div>

              
            </li>

            <li>
              <a href="./page-notifications.html" class="noticebar-item">
                <span class="noticebar-item-image">
                  <i class="fa fa-cloud-upload text-success"></i>
                </span>
                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title">Data Telah Terkirim</strong>
                  <span class="noticebar-item-text">20 Templates have been synced to the Mashon Demo instance.</span>
                  <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 minutes ago</span>
                </span>
              </a>
            </li>


            <li class="noticebar-menu-view-all">
              <a href="./page-notifications.html">Lihat seluruh pemberitahuan</a>
            </li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="./page-notifications.html" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope"></i>
            <span class="navbar-visible-collapsed">&nbsp;Messages&nbsp;</span>
          </a>

          <ul class="dropdown-menu noticebar-menu" role="menu">                
            <li class="nav-header">
              <div class="pull-left">
                Messages
              </div>

              <div class="pull-right">
                <a href="javascript:;">New Message</a>
              </div>
            </li>

            <li>
              <a href="./page-notifications.html" class="noticebar-item">
                <span class="noticebar-item-image">
                  <img src="./img/avatars/avatar-1-md.jpg" style="width: 50px" alt="">
                </span>

                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title">New Message</strong>
                  <span class="noticebar-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                  <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>
                </span>
              </a>
            </li>

            <li>
              <a href="./page-notifications.html" class="noticebar-item">
                <span class="noticebar-item-image">
                  <img src="./img/avatars/avatar-2-md.jpg" style="width: 50px" alt="">
                </span>

                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title">New Message</strong>
                  <span class="noticebar-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                  <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 5 hours ago</span>
                </span>
              </a>
            </li>

            <li class="noticebar-menu-view-all">
              <a href="./page-notifications.html">View All Messages</a>
            </li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-exclamation-triangle"></i>
            <span class="navbar-visible-collapsed">&nbsp;Alerts&nbsp;</span>
          </a>

          <ul class="dropdown-menu noticebar-menu noticebar-hoverable" role="menu">                
            <li class="nav-header">
              <div class="pull-left">
                Alerts
              </div>
            </li>

            <li class="noticebar-empty">                  
              <h4 class="noticebar-empty-title">No alerts here.</h4>
              <p class="noticebar-empty-text">Check out what other makers are doing on Explore!</p>                
            </li>
          </ul>
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">   

        <li>
          <a href="javascript:;">Panduan Aplikasi</a>
        </li>    
          
  

        <li class="dropdown navbar-profile">
          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
            <img src="./img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
            <span class="navbar-profile-label">sid@mydesa.co.id &nbsp;</span>
            <i class="fa fa-caret-down"></i>
          </a>

          <ul class="dropdown-menu" role="menu">

            <li>
              <a href="./page-profile.html">
                <i class="fa fa-user"></i> 
                &nbsp;&nbsp;Profil Admin
              </a>
            </li>

            <li>
              <a href="./page-settings.html">
                <i class="fa fa-cogs"></i> 
                &nbsp;&nbsp;Settings
              </a>
            </li>

            <li class="divider"></li>

            <li>
              <a href="./account-login.html">
                <i class="fa fa-sign-out"></i> 
                &nbsp;&nbsp;Logout
              </a>
            </li>

          </ul>

        </li>

      </ul>

       



       

    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

  <div class="mainbar">

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li class="active">
          <a href="./index.html">
            <i class="fa fa-dashboard"></i>
            Rekap
          </a>
        </li>

        <li class="dropdown ">
          <a href="#about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-desktop"></i>
            Pengadaan dan  Pendataan
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">   
            <li><a href="./inputtanah.html"><i class="fa fa-user nav-icon"></i> Tanah</a></li>
            <li><a href="./inputtanah.html"><i class="fa fa-bars nav-icon"></i> Peralatan dan Mesin</a></li>
            <li><a href="./inputtanah.html"><i class="fa fa-asterisk nav-icon"></i> Gedung dan Bangunan</a></li>
            <li><a href="./inputtanah.html"><i class="fa fa-tasks nav-icon"></i> Jalan, Irigasi Dan Jaringan</a></li>
            <li><a href="./inputtanah.html"><i class="fa fa-font nav-icon"></i> Aset Tetap Lainnya</a></li>
            <li><a href="./inputtanah.html"><i class="fa fa-list-alt nav-icon"></i> Konstruksi dalam Pengerjaan</a></li>
            
            
          </ul>
        </li>

        <li class="dropdown ">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
          <i class="fa fa-align-left"></i> 
          Laporan 
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li class="dropdown-header">Laporan </li>

            <li>
              <a href="./laporan.html">
              <i class="fa fa-location-arrow nav-icon"></i> 
              Laporan Penyusutan Nilai
              </a>
            </li>

            <li>
              <a href="./laporan.html">
              <i class="fa fa-location-arrow nav-icon"></i> 
              Laporan Inventaris Barang
              </a>
            </li>
            <li>
              <a href="laporan.html">
              <i class="fa fa-location-arrow nav-icon"></i> 
              Mutasi Aset Desa
              </a>
            </li>

            <li class="divider"></li>

            <li class="dropdown-header">Neraca </li>

            <li>
              <a href="./neraca.html">
              <i class="fa fa-table"></i> 
              &nbsp;&nbsp;Pertanggung Jawaban
              </a>
            </li>

            
          </ul>
        </li>

        <li class="dropdown ">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-files-o"></i>
            Kirim Data
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li><a href="./kirim.html"><i class="fa fa-user nav-icon"></i> Pengiriman Laporan</a></li>
            
          </ul>
        </li>  

      

      </ul>

    </div> <!-- /.navbar-collapse -->   

  </div> <!-- /.container --> 

</div> <!-- /.mainbar -->


<div class="container">

  <div class="content">

    <div class="content-container">


      <div class="content-header">
        <h2 class="content-header-title">Laporan Inventaris</h2>
        <ol class="breadcrumb">
          <li><a href="./index.html">Beranda</a></li>
          <li><a href="javascript:;">Laporan</a></li>
          <li class="active">Laporan Inventaris Aset </li>
        </ol>
      </div> <!-- /.content-header -->

      <div class="row">

        <div class="col-md-8">
      
        </div>

        <div class="col-md-4 col-sidebar-right">

          <p><a href="javascript:;" class="btn btn-jumbo btn-primary btn-block">Tambah / Edit Data <br /></a></p>

        </div>

      </div>

      <!--Edit / Tambah data-->


      <div class="row">
        <div class="col-md-12">

           <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Aset Tetap</h3>
                <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
              </div>
              <div class="panel-body">

                <div class="tabellaporan"> <!--Tabel Laporan (tanah)-->
                

                  <h4 class="heading">
                    Tanah
                  </h4>

                  <table class="table table-bordered table-highlight">
                    <thead>
                      <tr >
                        <th rowspan="3">No</th>
                        <th rowspan="3">Jenis/Nama Barang</th>
                        <th colspan="2" style="text-align: center;">Nomor</th>
                        <th rowspan="3">Luas (m2)</th>
                        <th rowspan="3">Tahun Pengadaan</th
                        >
                        <th rowspan="3">Letak/ Alamat</th>
                        <th colspan="3" style="text-align: center;">Status Tanah</th>
                        <th rowspan="3">Penggunaan</th>
                        <th rowspan="3">Asal-Usul</th>
                        <th rowspan="3">Harga</th>
                        <th rowspan="3"> Keterangan</th>
                        <th rowspan="3">aksi</th>
                      </tr>

                       <tr class="headingtable2">
                         
                         <td rowspan="2">Kode Barang</td>                       
                         <td rowspan="2">Register</td>
                         
                         <td rowspan="2">Hak</td>
                         <td colspan="2" style="text-align: center;">Sertifikat</td>
                         
                       </tr>


                       <tr class="headingtable2">
                         
                         <td>Tanggal</td>                       
                         <td>Nomor</td>
                        
                         
                       </tr>
                       
                       <tr class="headingtable3" >
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>&nbsp;</td>
                       </tr>

                    </thead>
                    <tbody>
                      <tr>
                       <td>1</td>
                       <td>Tanah Bangunan Kantor </td>
                       <td>0101110401</td>                     
                       <td>0001</td>
                       <td> 250 </td>
                       <td>2006</td>
                       <td>Pincara</td>
                       <td>Milik</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td>Kantor</td>
                       <td>APBD</td>
                       <td> 7.800.000 </td>
                       <td>Dikuasai Pemda</td>
                       <td><a href="#" role="button" data-toggle="modal" data-target="#editdata">Edit</a></td>
                     </tr>

                      <tr class="jumlahtabel">
                       <td>&nbsp;</td>
                       <td colspan="11" style="text-align: center;">JUMLAH ASET TETAP (TANAH)</td>
                       <td> 7.800.000 </td>
                       <td></td>
                       <td></td>
                        
                      </tr>
                      <tr>
                       
                      </tr>
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>

                  
                </div > <!--Tabel Laporan (Tanah)-->

                <br><br>

                <div class="tabellaporan "> <!--Tabel Laporan (Peralatan dan Mesin)-->
                

                  <h4 class="heading">
                    Peralatan dan Mesin
                  </h4>

                  <table class="table table-bordered table-highlight ">
                    <thead >
                      <tr >
                        <th rowspan="2">No</th>
                        <th rowspan="2">Kode Barang</th>
                        <th rowspan="2">Jenis/Nama Barang</th>
                        <th rowspan="2">No. Register</th>
                        <th rowspan="2">Merek/Tipe</th
                        ><th rowspan="2">Ukuran/CC</th>
                        <th rowspan="2">Bahan</th>
                        <th rowspan="2">Tahun Pembelian</th>
                        <th colspan="5" style="text-align: center;">Nomor</th>
                        <th rowspan="2">Asal-Usul</th>
                        <th rowspan="2">Harga</th>
                        <th rowspan="2">Keterangan</th>
                        <th rowspan="2">Jumlah Barang</th>
                        <th rowspan="2">Aksi</t
                          h>
                      </tr>

                       <tr class="headingtable2">
                         <td>Pabrik</td>
                         <td>Rangka</td>
                         <td>Mesin</td>
                         <td>Polisi</td>
                         <td>BPKB</td>
                       </tr>
                       <tr class="headingtable3" >
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                       </tr>

                    </thead>
                    <tbody>
                      <tr>
                       <td>1</td>
                       <td>0206020128</td>                     
                       <td>Kursi Tamu</td>
                       <td>0001</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td>Campuran</td>
                       <td>2008</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td>APBD</td>
                       <td> 7.800.000 </td>
                       <td>Dikuasai Pemda</td>
                       <td>&nbsp;</td>
                       <td><a href="">Edit</a></td>
                     </tr>

                      <tr class="jumlahtabel">
                       <td>&nbsp;</td>
                       <td colspan="13" style="text-align: center;">JUMLAH TOTAL ASET TETAP (PERALATAN DAN MESIN)</td>
                       <td> 7.800.000 </td>
                       <td></td>
                       <td>&nbsp;</td>
                       <td></td>
                        
                      </tr>
                      <tr>
                       
                      </tr>
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>

                  
                </div> <!--Tabel Laporan (Peralatan dan Mesin)-->

                <br><br>

                <div class="tabellaporan "> <!--Tabel Laporan (Gedung dan Bangunan)-->
                

                  <h4 class="heading">
                    Gedung dan Bangunan
                  </h4>

                  <table class="table table-bordered table-highlight ">
                    <thead >
                      <tr >
                        <th rowspan="2">No</th>
                        <th rowspan="2">Jenis/Nama Barang</th>
                        <th colspan="2" style="text-align: center;">Nomor</th>
                        
                        <th rowspan="2"> Kondisi Bangunan</th>
                        <th colspan="2" style="text-align: center;">Konstruksi Bangunan</th
                        ><th rowspan="2">Luas Lantai </th>
                        <th rowspan="2">Alamat</th>
                        <th colspan="2" style="text-align: center;">Dokumen</th>
                        <th rowspan="2">Luas M2</th>
                        <th rowspan="2">Status Tanah</th>
                        <th rowspan="2">No. Kode Tanah</th>
                        <th rowspan="2">Asal-Usul</th>
                        <th rowspan="2">Harga</th>
                        <th rowspan="2">Keterangan</th>
                        <th rowspan="2">Aksi</th>
                      </tr>

                       <tr class="headingtable2">
                         <td>Kode Barang</td>
                         <td>Register</td>
                         <td>Bertingkat/ Tidak</td>
                         <td>Beton/ Tidak</td>
                         <td>Tanggal</td>
                         <td>nomor</td>
                         
                       </tr>
                       <tr class="headingtable3" >
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td></td>
                       </tr>

                    </thead>
                    <tbody>
                      <tr>
                       <td>1</td>
                       <td>Bangunan Kantor Desa</td>                     
                       <td>0311010101</td>
                       <td>0001</td>
                       <td>KB</td>
                       <td>Tidak</td>
                       <td>Beton</td>
                       <td>70</td>
                       <td>Pincara</td>
                       <td>2008</td>
                       <td>APBD</td>
                       <td>&nbsp;</td>
                       <td>70</td>
                       <td>Milik</td>
                       <td>APBD</td>
                       <td>133000000</td>
                       <td>&nbsp;</td>
                       <td><a href="">Edit</a></td>
                     </tr>

                      <tr class="jumlahtabel">
                       <td>&nbsp;</td>
                       <td colspan="14" style="text-align: right;">JUMLAH TOTAL ASET TETAP (PERALATAN DAN MESIN)</td>
                       <td> 7.800.000 </td>
                       
                       <td></td>
                       <td>&nbsp;</td>
                      </tr>
                      <tr>
                       
                      </tr>
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>

                </div> <!--Tabel Laporan (Gedung dan Bangunan)-->

                <br><br>

                <div class="tabellaporan "> <!--Tabel Laporan (JALAN, IRIGASI DAN JARINGAN)-->
                

                  <h4 class="heading">
                    JALAN, IRIGASI DAN JARINGAN
                  </h4>

                  <table class="table table-bordered table-highlight ">
                    <thead >
                      <tr >
                        <th rowspan="2">No</th>
                        <th rowspan="2">Jenis/Nama Barang</th>
                        <th colspan="2" style="text-align: center;">Nomor</th>
                        
                        <th rowspan="2"> Konstruksi</th>
                        <th rowspan="2">Panjang</th>
                        <th rowspan="2">Lebar </th>
                        <th rowspan="2">Luas</th>
                        <th rowspan="2">Lokasi</th>
                        <th colspan="2" style="text-align: center;">Dokumen</th>
                        <th rowspan="2">Status Tanah</th>
                        <th rowspan="2">No. Kode Tanah</th>
                        <th rowspan="2">Asal-Usul</th>
                        <th rowspan="2">Harga</th>
                        <th rowspan="2">Kondisi</th>
                        <th rowspan="2">Keterangan</th>
                        <th rowspan="2">Aksi</th>
                      </tr>

                       <tr class="headingtable2">
                         <td>Kode Barang</td>
                         <td>Register</td>
                         <td>Tanggal</td>
                         <td>nomor</td>
                         
                       </tr>
                       <tr class="headingtable3" >
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td></td>
                       </tr>

                    </thead>
                    <tbody>
                      <tr>
                       <td>1</td>
                       <td>Bangunan Kantor Desa</td>                     
                       <td>0311010101</td>
                       <td>0001</td>
                       <td>KB</td>
                       <td>200 km</td>
                       <td>3 m</td>
                       <td>70 m</td>
                       <td>Pincara</td>
                       <td>2008</td>
                       <td>APBD</td>
                       <td>&nbsp;</td>
                       <td>70</td>
                       <td>Milik</td>
                       <td>APBD</td>
                       <td>133000000</td>
                       <td>&nbsp;</td>
                       <td><a href="">Edit</a></td>
                     </tr>

                      <tr class="jumlahtabel">
                       <td>&nbsp;</td>
                       <td colspan="14" style="text-align: right;">JUMLAH TOTAL ASET TETAP (JALAN, IRIGASI, DAN JARINGAN)</td>
                       <td> 133000000 </td>
                       <td>&nbsp;</td>
                       
                       <td></td>
                        
                      </tr>
                      <tr>
                       
                      </tr>
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>

                  
                </div> <!--Tabel Laporan (JALAN, IRIGASI DAN JARINGAN)-->

                <br><br>

                <div class="tabellaporan "> <!--Tabel Laporan (ASET TETAP LAINNYA)-->
                

                  <h4 class="heading">
                    ASET TETAP LAINNYA
                  </h4>

                  <table class="table table-bordered table-highlight ">
                    <thead >
                      <tr >
                        <th rowspan="2">No</th>
                        <th rowspan="2">Jenis/Nama Barang</th>
                        <th colspan="2" style="text-align: center;">Nomor</th>
                       
                        <th colspan="2" style="text-align: center;">Buku Perpustakaan</th>
                        <th colspan="3" style="text-align: center;">Barang Bercorak Kesenian/ Kebudayaan</th>
                        <th colspan="2" style="text-align: center;">Hewan/Ternak dan Tumbuhan</th>
                        <th rowspan="2">Tahun Cetak /
                           Pembelian</th>
                        <th rowspan="2">Jumlah</th>
                        <th rowspan="2">Asal-Usul</th>
                        <th rowspan="2">Harga</th>
                        <th rowspan="2">Keterangan</th>
                        <th rowspan="2">Aksi</th>
                      </tr>

                       <tr class="headingtable2">
                         <td>Kode Barang</td>
                         <td>Register</td>
                         <td>Judul/Pencipta</td>
                         <td>Spesifikasi</td>
                         <td>Asal Daerah</td>
                         <td>Pencipta</td>
                         <td>Bahan</td>
                         <td>Jenis</td>
                         <td>ukuran</td>
                         
                       </tr>
                       <tr class="headingtable3" >
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                       </tr>

                    </thead>
                    <tbody>
                      <tr>
                       <td>1</td>
                       <td>Buku </td>                     
                       <td>0311010101</td>
                       <td>0001</td>
                       <td>Aku ?</td>
                       <td>Baru</td>
                       <td>Makassar</td>
                       <td>Dg. Gaga</td>
                       <td>Kertas</td>
                       <td>Jilid</td>
                       <td>30x20</td>
                       <td>2015</td>
                       <td>5</td>
                       <td>Donasi</td>
                       <td>150000</td>
                       <td>&nbsp;</td>
                       <td><a href="">Edit</a></td>
                     </tr>

                      <tr class="jumlahtabel">
                       <td>&nbsp;</td>
                       <td colspan="13" style="text-align: right;">JUMLAH TOTAL ASET TETAP (JALAN, IRIGASI, DAN JARINGAN)</td>
                       <td> 133000000 </td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                      
                        
                      </tr>
                      <tr>
                       
                      </tr>
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>

                  
                </div> <!--Tabel Laporan (ASET TETAP LAINNYA)-->

                <br><br>

                <div class="tabellaporan "> <!--Tabel Laporan (KONSTRUKSI DALAM PENGERJAAN)-->
                

                  <h4 class="heading">
                    ASET TETAP LAINNYA
                  </h4>

                  <table class="table table-bordered table-highlight ">
                    <thead >
                      <tr >
                        <th rowspan="2">No</th>
                        <th rowspan="2">Jenis/Nama Barang</th>
                        <th rowspan="2">Bangunan</th>
                        <th colspan="2" style="text-align: center;">Konstruksi Bangunan</th>

                        <th rowspan="2">Luas</th>
                        <th rowspan="2">Lokasi</th>

                       
                        <th colspan="2" style="text-align: center;">Dokumen</th>
                        <th rowspan="2">Tanggal Mulai</th>
                        <th rowspan="2">Status Tanah</th>
                        <th rowspan="2">No. Kode Tanah</th>
                        <th rowspan="2">Asal-Usul</th>
                        <th rowspan="2">Nilai Kontrak</th>
                        <th rowspan="2">Keterangan</th>
                        <th rowspan="2">Aksi</th>
                      </tr>

                       <tr class="headingtable2">
                         <td>Bertingkat/ Tidak</td>
                         <td>Beton/ Tidak</td>
                         <td>Tanggal</td>
                         <td>Nomor</td>
                         
                         
                       </tr>
                       <tr class="headingtable3" >
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                       </tr>

                    </thead>
                    <tbody>
                      <tr>
                       <td>1</td>
                       <td>Bangunan Kantor Desa</td>                     
                      
                       <td>P</td>
                       
                       <td>Tidak</td>
                       <td>Beton</td>
                       <td>70</td>
                       <td>Pincara</td>
                       <td>12/6/2016</td>
                       <td>002</td>
                       <td>12/6/2016</td>
                       <td>Milik</td>
                       <td>90</td>
                       <td>APBD</td>
                       <td>133000000</td>
                       <td>&nbsp;</td>
                       <td><a href="">Edit</a></td>
                     </tr>

                      <tr class="jumlahtabel">
                       <td>&nbsp;</td>
                       <td colspan="12" style="text-align: right;">JUMLAH KONSTRUKSI DALAM PENGERJAAN</td>
                       <td> 133000000 </td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                      
                        
                      </tr>
                      <tr>
                       
                      </tr>
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>

                  
                </div> <!--Tabel Laporan (KONSTRUKSI DALAM PENGERJAAN)-->




                



                
                          
              </div>
           </div>





      </div>





            <h4>Laporan Rekap Desa </h4>
            <hr />
            <div class="list-group">

              <a href="javascript:;" class="list-group-item">
                <i class="fa fa-envelope"></i> 
                &nbsp;&nbsp;<strong>Kirim</strong> Rekapitulasi
              </a>

              

              <a href="javascript:;" class="list-group-item">
                <i class="fa fa-print"></i>
                &nbsp;&nbsp;<strong>Print</strong> Rekapitulasi
              </a>

              <a href="javascript:;" class="list-group-item">
                <i class="fa fa-copy"></i>
                &nbsp;&nbsp;<strong>Simpan</strong> Rekapitulasi
              </a>

              <a href="javascript:;" class="list-group-item">
                <i class="fa fa-times"></i>
                &nbsp;&nbsp;<strong>Hapus</strong> Rekapitulasi
              </a>

            </div>
      





    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->


<footer class="footer">

  <div class="container">

    <div class="row">

      <div class="col-sm-3">

        <h4>Tentang Aset Desa Terpadu </h4>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>  

        <hr>    

        <p>&copy; 2014 Jumpstart Themes.</p>

      </div> <!-- /.col -->

      <div class="col-sm-3"> 

        <h4>Bantuan</h4>

        <br>

        <ul class="icons-list">
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Panduan</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Ajukan Pertanyaan</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Video Pelatihan</a>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Saran dan kritik</a>
          </li>
        </ul>          

      </div> <!-- /.col -->

  

    </div> <!-- /.row -->

  </div> <!-- /.container -->
  
</footer>

<div id="editdata" class="modal modal-styled fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">Edit Data Tanah xxxxxxx</h3>
      </div>
      <div class="modal-body">
       <h4 class="heading"> Judul / Nama Barang</h4>
        </br>
         <form action="./page-settings.html" class="form-horizontal">

                <div class="form-group">

             

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Jenis/Nama Barang</label>


                  <div class="col-sm-7">

                
                    <select id="s4_basic" class="form-control" >                    
                      <optgroup label=" Bangunan Gedung">
                        <option value="01010000000" >BANGUNAN GEDUNG TEMPAT KERJA</option>
                      </optgroup>

                      <optgroup label=" Bangunan Gedung Kantor">
                        <option value="01010000000">Bangunan Gedung Kantor Permanen</option>
                        <option value="01010000000">Bangunan Gedung Kantor Semi Permanen</option>
                        <option value="01010000000">Bangunan Gedung Kantor Darurat</option>
                        <option value="01010000000">Lain-lain</option>
                      </optgroup>

                      <optgroup label="Bangunan Monumen">
                        <option value="01010100000">Istana Peninggalan</option>
                        <option value="01010000000">Rumah Adat n</option>
                        <option value="01010000000">Rumah Peninggalan Sejarah</option>
                        <option value="01010000000">Makam Bersejarah</option>
                        <option value="01010000000">Mesjid Bersejarah</option>
                        <option value="01010000000">Lain-lain</option>
                      </optgroup>
                     

                      </optgroup>
                     
                    </select>

                  </div> <!-- /.col -->


                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Kode Barang</label>

                  <div class="col-md-7">
                    <input type="number" name="kode-barang" value="01010000000" class="form-control" disabled/>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Register</label>
                  <div class="col-md-7">
                    <input type="number" name="register" placeholder="Nomor Register" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Kondisi Bangunan</label>

                  <div class="col-md-7">

                    <label class="radio-inline">
                      <input type="radio" name="kondisiG1" class="" value="Baru" checked> Baru
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="kondisiG1" class="" value="KB"> KB
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="kondisiG1" class="" value="Renovasi Baru"> Renovasi Baru
                    </label>

                  </div> <!-- /.col -->
                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3">Konstruksi Bangunan</label>

                  <div class="col-md-7">

                    <label class="checkbox-inline">
                       <input type="checkbox" id="inlineCheckbox1" class="" value="Bertingkat"> Bertingkat
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="" value="Beton"> Beton
                    </label>
               

                  </div> <!-- /.col -->
                </div> <!-- /.form-group -->




                <div class="form-group">

                  <label class="col-md-3">Luas Lantai</label>

                  <div class="col-md-7">
                    <div class="input-group">
                  <input type="text" name="luaslantai" placeholder="Luas Lantai" class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3">Letak/Alamat</label>

                  <div class="col-md-7">
                    <input type="text" name="alamat" placeholder="Jalan/Alamat Lokasi Gedung" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <br>
                <div class="form-group">

                  <label class="col-md-12">Dokumen Gedung</label>

                  <label class="col-md-3"> &nbsp;&nbsp;1. Tanggal</label>


                  <div class="col-md-7">
                    <div id="dp-ex-4" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                    <input class="form-control" type="text" name="tanggalbeli" placeholder="00-00-0000">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  <span class="help-block">dd-mm-yyyy</span>

                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">&nbsp;&nbsp;2. Nomor</label>
                  <div class="col-md-7">
                    <input type="number" name="register" value="0001" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <br>


                

                <div class="form-group">

                  <label class="col-md-3">Luas Lahan</label>

                  <div class="col-md-7">
                    <div class="input-group">
                    <input type="number" placeholder="Luas Lahan" name="luaslahan"  class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                     <div class="form-group">

                  <label class="col-md-3">Status Tanah </label>

                  <div class="col-md-7">
                    <input type="text" name="hak" placeholder="Status Kepemilikan Tanah Gedung" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Nomor Kode Tanah </label>

                  <div class="col-md-7">
                    <input type="text" name="nosertifikat" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3">Asal Usul </label>

                  <div class="col-md-7">
                    <input type="text" name="asal" placeholder="Asal Usul Dana Gedung"class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Harga </label>

                  <div class="col-md-7">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input class="form-control" id="harga" type="number">
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Keterangan </label>

                  <div class="col-md-7">
                    <input type="text" name="keterangan" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <br />

                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Masukkan Data</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Batalkan</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan Data</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


  <style>
  .panel-heading span {
      margin-top: -20px;
      font-size: 15px;
  }
  .row {
      margin-top: 40px;
      padding: 0 10px;
  }
  .clickable {
      cursor: pointer;
  }

  .headingtable2{
    font-weight: bold;
    font-size: 11px;
    border-color: #eee;    
    background-color: rgba(224, 209, 209, 0.48) !important;
  }

  .headingtable3{
    text-align: center;
    font-size: 9px;
  }

  .jumlahtabel{
    text-align: center;
    font-size: 16px;
    font-style: bold;
  }

  .tabellaporan{
    overflow: auto;
    zoom:80%;
  }


  </style>

  <script src="<?php echo ROOT; ?>assets/js/libs/jquery-1.10.1.min.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/libs/bootstrap.min.js"></script>


  <!-- App JS -->
  <script src="<?php echo ROOT; ?>assets/js/target-admin.js"></script>
  
  <!-- Page  JS -->
  <script src="<?php echo ROOT; ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    jQuery(function ($) {
        $('.panel-heading span.clickable').on("click", function (e) {
            if ($(this).hasClass('panel-collapsed')) {
                // expand the panel
                $(this).parents('.panel').find('.panel-body').slideDown();
                $(this).removeClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            }
            else {
                // collapse the panel
                $(this).parents('.panel').find('.panel-body').slideUp();
                $(this).addClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            }
        });
    });
</script>

  


  
</body>
</html>
