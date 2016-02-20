<?php
	if(isset($method)):
		date_default_timezone_set('Asia/Jakarta');
		$aksi = ROOT."controllers/home_control.php?model=home&method="; // halaman untuk eksekusi

		switch($method) {
			default:
				include "404.php";
				break;

			case '':
				echo '

					<div class="content-header">
						<h2 class="content-header-title">Beranda</h2>
					</div> <!-- /.content-header -->
					<div class="row">
						<center><h1>SELAMAT DATANG DI APLIKASI ASET DESA</h1></center>
					</div>

				';
				break;
		}

	endif;
?>
