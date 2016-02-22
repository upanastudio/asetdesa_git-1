<?php
	if(isset($method)):
		date_default_timezone_set('Asia/Makassar');
		$aksi = ROOT."controllers/home_control.php?model=home&method="; // halaman untuk eksekusi

		switch($method) {
			default:
				include "404.php";
				break;

			case '':
				$jumlah_unit_aset = $tanah->countData() + $peralatan->countData() + $gedung->countData() + $jalan->countData() + $asetlain->countData() + $konstruksi->countData();
				echo '

					<div class="content-header">
						<!-- <h2 class="content-header-title">Beranda</h2> -->
						<div><a href="'.ROOT.'rekap" class="btn btn-small btn-primary">Rekap Data</a></div>
					</div> <!-- /.content-header -->

					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="row-stat text-center">
								<p class="row-stat-label">Jumlah Unit Aset Desa</p>
								<h3 class="row-stat-value">'.$jumlah_unit_aset.' <span>Unit</span></h3>
							</div> <!-- /.row-stat -->
						</div> <!-- /.col -->

						<div class="col-sm-6 col-md-3 text-center">
							<div class="row-stat">
								<p class="row-stat-label">Jumlah Nilai Aset Desa</p>
								<h3 class="row-stat-value"><span>Rp</span> 100.000</h3>
							</div> <!-- /.row-stat -->
						</div> <!-- /.col -->

						<div class="col-sm-6 col-md-3 text-center">
							<div class="row-stat">
								<p class="row-stat-label">Aset Ekstra </p>
								<h3 class="row-stat-value">100 <span>Unit</span></h3>
							</div> <!-- /.row-stat -->
						</div> <!-- /.col -->

						<div class="col-sm-6 col-md-3 text-center">
							<div class="row-stat">
								<p class="row-stat-label">Usulan Penghapusan</p>
								<h3 class="row-stat-value">19 <span>Unit</span></h3>
							</div> <!-- /.row-stat -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->

					<div class="row">
						<div class="col-md-8">
							<div class="portlet">
								<div class="portlet-header">
									<h3>
										<i class="fa fa-bar-chart-o"></i>
										Statistik Aset Desa '.$desa['kode_lokasi'].'
									</h3>
								</div> <!-- /.portlet-header -->
								<div class="portlet-content">
									<div class="pull-left">
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-sm btn-default">
												<input type="radio" name="pilihan" id="option1" autocomplete="off" /> Bulan
											</label>
											<label class="btn btn-sm btn-default active">
												<input type="radio" name="pilihan" id="option2" autocomplete="off" checked /> Tahun
											</label>
										</div>
									</div> <!-- /.pull-left -->
									<div class="clear"></div>
									<div id="statistiktahun" class="chart-holder"></div>
								</div> <!-- /.portlet-content -->
							</div> <!-- /.portlet -->
						</div> <!-- /.col -->

						<div class="col-md-4">
							<div class="portlet">
								<div class="portlet-header">
									<h3>
										<i class="fa fa-sitemap"></i>
										Profil Desa
									</h3>
								</div> <!-- /.portlet-header -->
								<div class="portlet-content">
									<h3 class="text-center heading">
										Selamat Datang Desa '.$desa['kode_lokasi'].'
									</h3>
									<div class="img text-center .media-body ">
										<img src="'.ROOT.'assets/img/'.$desa['logo'].'" style="width: 150px;" />
									</div>
									</br>
									<div class="text-left">
										<p>Kepala Desa <strong style="margin-left:94px"> : '.$desa['nama_kepala'].'</strong></p>
										<p class="strong">Penanggung Jawab Barang <strong > : '.$desa['nama_pengurus'].' </strong></p>
										<p class="strong">Pengguna Barang  <strong style="margin-left:58px"> : '.$desa['nama_pengguna'].'</strong></p>
									</div>
								</div> <!-- /.portlet-content -->
							</div> <!-- /.portlet -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->

				';
				break;
		}

	endif;
?>
