<?php
	if(isset($method)):
		date_default_timezone_set('Asia/Makassar');
		$aksi_tanah = ROOT."controllers/input_tanah_control.php?model=tanah&method=";
		$aksi_peralatan = ROOT."controllers/input_peralatan_control.php?model=peralatan&method=";
		$aksi_gedung = ROOT."controllers/input_gedung_control.php?model=gedung&method=";
		$aksi_jalan = ROOT."controllers/input_jalan_control.php?model=jalan&method=";
		$aksi_asetlain = ROOT."controllers/input_asetlain_control.php?model=asetlain&method=";
		$aksi_konstruksi = ROOT."controllers/input_konstruksi_control.php?model=konstruksi&method=";

		$tanah_tab = (isset($_GET['tab']) AND $_GET['tab'] == "tanah")? 'active':'';
		$peralatan_tab = (isset($_GET['tab']) AND $_GET['tab'] == "peralatan")? 'active':'';
		$gedung_tab = (isset($_GET['tab']) AND $_GET['tab'] == "gedung")? 'active':'';
		$jalan_tab = (isset($_GET['tab']) AND $_GET['tab'] == "jalan")? 'active':'';
		$asetlain_tab = (isset($_GET['tab']) AND $_GET['tab'] == "asetlain")? 'active':'';
		$konstruksi_tab = (isset($_GET['tab']) AND $_GET['tab'] == "konstruksi")? 'active':'';

		if (!isset($_GET['tab'])) $tanah_tab = 'active';

		switch($method) {
			default:
				include "404.php";
				break;

			case '':
				echo '

					<div class="content-header">
						<h2 class="content-header-title">Laporan Inventaris</h2>
						<ol class="breadcrumb">
							<li><a href="'.ROOT.'">Beranda</a></li>
							<li><a href="javascript:;">Laporan</a></li>
							<li class="active">Laporan Inventaris Aset</li>
						</ol>
					</div> <!-- /.content-header -->
				';

				if (isset($_GET['act'])) {
					$libs->notifikasi($_GET['act']);
				}

				echo '

					<div class="row">
						<div class="col-md-12">
							<h4 class="heading">Tabel Rekapitulasi</h4>
							<ul id="myTab1" class="nav nav-tabs">
								<li class="'.$tanah_tab.'"><a href="#tanah" data-toggle="tab">Tanah</a></li>
								<li class="'.$peralatan_tab.'"><a href="#peralatan" data-toggle="tab">Peralatan dan Mesin</a></li>
								<li class="'.$gedung_tab.'"><a href="#gedung" data-toggle="tab">Gedung dan Bangunan</a></li>
								<li class="'.$jalan_tab.'"><a href="#jalan" data-toggle="tab">Jalan, Irigasi, dan Jaringan</a></li>
								<li class="'.$asetlain_tab.'"><a href="#asetlain" data-toggle="tab">Aset Tetap Lainnya</a></li>
								<li class="'.$konstruksi_tab.'"><a href="#konstruksi" data-toggle="tab">Konstruksi dalam Pengerjaan</a></li>
							</ul>

							<div id="myTab1Content" class="tab-content">
								<div class="tab-pane fade in '.$tanah_tab.'" id="tanah">
									<div class="tabellaporan"> <!--Tabel Laporan (tanah)-->
									<hr/>

										<form id="hapusSubmit" action="'.$aksi_tanah.'hapus" method="POST">
											<input type="hidden" id="hapus_id" name="id" value="">
										</form>

										<table class="table table-bordered table-highlight">
											<thead>
												<tr>
													<th rowspan="3">No.</th>
													<th rowspan="3">Jenis/Nama Barang</th>
													<th colspan="2">Nomor</th>
													<th rowspan="3">Luas (m<sup>2</sup>)</th>
													<th rowspan="3" style="width: 90px;">Tahun Pengadaan</th>
													<th rowspan="3">Letak/Alamat</th>
													<th colspan="3">Status Tanah</th>
													<th rowspan="3">Penggunaan</th>
													<th rowspan="3">Asal-Usul</th>
													<th rowspan="3">Harga</th>
													<th rowspan="3">Keterangan</th>
													<th rowspan="3">Tindakan</th>
												</tr>
												<tr class="headingtable2">
													<th rowspan="2">Kode Barang</th>                       
													<th rowspan="2">Register</th>
													<th rowspan="2">Hak</th>
													<th colspan="2">Sertifikat</th>
												</tr>
												<tr class="headingtable2">
													<th style="width: 90px;">Tanggal</th>
													<th>Nomor</th>
												</tr>
												<tr class="headingtable3">
													<td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td>
													<td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>&nbsp;</td>
												</tr>
											</thead>
											<tbody>
				';

				$i = 1;
				$total = 0;
				$data_tanah = $tanah->getDataLengkap();
				foreach ($data_tanah as $data_tanah) {
					echo '
												<tr>
													<td style="text-align: center;">'.$i.'</td>
													<td>'.$data_tanah['jenis_barang'].'</td>
													<td>'.$data_tanah['kode_barang'].'</td>
													<td>'.$data_tanah['register'].'</td>
													<td>'.$data_tanah['luas_tanah'].'</td>
													<td>'.$data_tanah['tanggal_beli'].'</td>
													<td>'.$data_tanah['alamat'].'</td>
													<td>'.$data_tanah['hak'].'</td>
													<td>'.$data_tanah['tanggal_sertifikat'].'</td>
													<td>'.$data_tanah['no_sertifikat'].'</td>
													<td>'.$data_tanah['penggunaan'].'</td>
													<td>'.$data_tanah['asal_usul'].'</td>
													<td>'.$data_tanah['harga'].'</td>
													<td>'.$data_tanah['keterangan'].'</td>
													<td><a href="'.ROOT.'edit/tanah/'.$data_tanah['id'].'">Edit</a> | <a href="#" onclick="hapusData(\''.$data_tanah['id'].'\')">X</a></td>
												</tr>
					';
					$i++;
					$total += $data_tanah['harga'];
				}

				echo '
												<tr class="jumlahtabel">
													<td colspan="12" style="text-align: center;">JUMLAH ASET TETAP (TANAH)</td>
													<td>'.$total.'</td>
													<td></td><td></td>
												</tr>
											</tbody>
										</table>
									</div > <!--Tabel Laporan (Tanah)-->
								</div>

								<div class="tab-pane fade in '.$peralatan_tab.'" id="peralatan">
									<div class="tabellaporan "> <!--Tabel Laporan (Peralatan dan Mesin)-->
										<hr/>

										<form id="hapusSubmit" action="'.$aksi_peralatan.'hapus" method="POST">
											<input type="hidden" id="hapus_id" name="id" value="">
										</form>

										<table class="table table-bordered table-highlight">
											<thead>
												<tr>
													<th rowspan="2">No.</th>
													<th rowspan="2">Kode Barang</th>
													<th rowspan="2">Jenis/Nama Barang</th>
													<th rowspan="2">No. Register</th>
													<th rowspan="2">Merek/Tipe</th>
													<th rowspan="2">Ukuran/CC</th>
													<th rowspan="2">Bahan</th>
													<th rowspan="2">Tahun Pembelian</th>
													<th colspan="5">Nomor</th>
													<th rowspan="2">Asal-Usul</th>
													<th rowspan="2">Harga</th>
													<th rowspan="2">Keterangan</th>
													<th rowspan="2">Jumlah Barang</th>
													<th rowspan="2">Tindakan</th>
												</tr>
												<tr class="headingtable2">
													<th>Pabrik</th>
													<th>Rangka</th>
													<th>Mesin</th>
													<th>Polisi</th>
													<th>BPKB</th>
												</tr>
												<tr class="headingtable3">
													<td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
													<td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>&nbsp;</td>
													<td>&nbsp;</td>
												</tr>
											</thead>
											<tbody>
				';

				$i = 1;
				$total = 0;
				$data_peralatan = $peralatan->getDataLengkap();
				foreach ($data_peralatan as $data_peralatan) {
					echo '
												<tr>
													<td style="text-align: center;">'.$i.'</td>
													<td>'.$data_peralatan['kode_barang'].'</td>
													<td>'.$data_peralatan['jenis_barang'].'</td>
													<td>'.$data_peralatan['register'].'</td>
													<td>'.$data_peralatan['merek'].'</td>
													<td>'.$data_peralatan['ukuran'].'</td>
													<td>'.$data_peralatan['bahan'].'</td>
													<td>'.$data_peralatan['tanggal_beli'].'</td>
													<td>'.$data_peralatan['no_pabrik'].'</td>
													<td>'.$data_peralatan['no_rangka'].'</td>
													<td>'.$data_peralatan['no_mesin'].'</td>
													<td>'.$data_peralatan['no_polisi'].'</td>
													<td>&nbsp;</td>
													<td>APBD</td>
													<td> 7.800.000 </td>
													<td>Dikuasai Pemda</td>
													<td>&nbsp;</td>
													<td><a href="">Edit</a></td>
												</tr>
					';
					$i++;
					$total += $data_peralatan['harga'];
				}

				echo '

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
							</div>

							<div class="tab-pane fade in '.$gedung_tab.'" id="gedung">
									<div class="tabellaporan "> <!--Tabel Laporan (Gedung dan Bangunan)-->
									
										<h4 class="heading">Gedung dan Bangunan</h4>

										<form id="hapusSubmit" action="'.$aksi_gedung.'hapus" method="POST">
											<input type="hidden" id="hapus_id" name="id" value="">
										</form>

										<table class="table table-bordered table-highlight ">
											<thead >
												<tr >
													<th rowspan="2">No</th>
													<th rowspan="2">Jenis/Nama Barang</th>
													<th colspan="2" style="text-align: center;">Nomor</th>
													<th rowspan="2"> Kondisi Bangunan</th>
													<th colspan="2" style="text-align: center;">Konstruksi Bangunan</th>
													<th rowspan="2">Luas Lantai </th>
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
												 <td colspan="14" style="text-align: right;">JUMLAH TOTAL ASET TETAP (Gedung dan Bangunan)</td>
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
							</div>

							<div class="tab-pane fade in '.$jalan_tab.'" id="jalan">
									<div class="tabellaporan "> <!--Tabel Laporan (JALAN, IRIGASI DAN JARINGAN)-->
										<h4 class="heading">
											JALAN, IRIGASI DAN JARINGAN
										</h4>

										<form id="hapusSubmit" action="'.$aksi_jalan.'hapus" method="POST">
											<input type="hidden" id="hapus_id" name="id" value="">
										</form>

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
							</div>

							<div class="tab-pane fade in '.$asetlain_tab.'" id="asetlain">
										<div class="tabellaporan "> <!--Tabel Laporan (ASET TETAP LAINNYA)-->
											<h4 class="heading">
												ASET TETAP LAINNYA
											</h4>

										<form id="hapusSubmit" action="'.$aksi_asetlain.'hapus" method="POST">
											<input type="hidden" id="hapus_id" name="id" value="">
										</form>

											<table class="table table-bordered table-highlight ">
												<thead >
													<tr >
														<th rowspan="2">No</th>
														<th rowspan="2">Jenis/Nama Barang</th>
														<th colspan="2" style="text-align: center;">Nomor</th>
													 
														<th colspan="2" style="text-align: center;">Buku Perpustakaan</th>
														<th colspan="3" style="text-align: center;">Barang Bercorak Kesenian/ Kebudayaan</th>
														<th colspan="2" style="text-align: center;">Hewan/Ternak dan Tumbuhan</th>
														<th rowspan="2">Tahun Cetak / Pembelian</th>
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
													 <td colspan="13" style="text-align: right;">JUMLAH TOTAL ASET Lain </td>
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
							</div>

							<div class="tab-pane fade in '.$konstruksi_tab.'" id="konstruksi">
									<div class="tabellaporan "> <!--Tabel Laporan (KONSTRUKSI DALAM PENGERJAAN)-->
									

											<h4 class="heading">
												Konstruksi Dalam Pengerjaan
											</h4>

										<form id="hapusSubmit" action="'.$aksi_konstruksi.'hapus" method="POST">
											<input type="hidden" id="hapus_id" name="id" value="">
										</form>

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
		 
				';
				break;
		}
?>

<link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/laporan.css">

<?php endif; ?>
