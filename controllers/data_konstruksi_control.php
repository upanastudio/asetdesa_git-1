<?php
	session_start();
	if(isset($_GET['model'])): // for secure
		ob_start();
		date_default_timezone_set('Asia/Makassar');
		require "../libs/path.php";
		require "../models/class.php";

		$model = $_GET['model'];
		$method = $_GET['method'];
		$model;

		if($model == 'konstruksi' AND $method == 'tambah') {
			if(isset($_POST['tambah'])) {
				
				// Inisiasi Value pada tiap input di Tab Jalur
				$jenis_barang 		='';
				$bangunan	 		='';
				$alamat				='';
				$konstruk			='';
				$luas_konstruksi	='';
				$tanggal_dokumen	='';
				$no_dokumen			='';
				$tanggal_mulai		='';
				$status_tanah		='';
				$no_tanah			='';
				$asal_usul			='';
				$harga				='';
				$keterangan			='';


				$kode_barang			= $_POST['jenis_barang'];
				if (empty($kode_barang)) {
					header("location:".ROOT."input?tab=konstruksi&act=err");
				}else{

					$jb						= $data_barang->getNamaBarangByKB($kode_barang);
					$jenis_barang			= $jb['nama_barang'];
					$kon 					= $_POST['konstruksi'];

					if (!empty($kon)) {
						$N = count($kon);
						for ($i=0; $i < $N ; $i++) { 
							$konstruk .= $kon[$i].", ";
						}
					}

					$luas_konstruksi 			= $_POST['luas_konstruksi'];
					$alamat 					= $_POST['alamat'];
					$bangunan					= $_POST['bangunan'];
					$tanggal_dokumen 			= $_POST['tanggal_dokumen'];
					$no_dokumen 				= $_POST['no_dokumen'];
					$tanggal_mulai 				= $_POST['tanggal_mulai'];
					$status_tanah 				= $_POST['status_tanah'];
					$no_tanah 					= $_POST['no_tanah'];
					$asal_usul 					= $_POST['asal_usul'];
					$harga 						= $_POST['harga'];
					$keterangan 				= $_POST['keterangan'];

					$konstruksi->insertData($kode_barang, $jenis_barang, $bangunan, $konstruk, $luas_konstruksi, $alamat, 
						$tanggal_dokumen, $no_dokumen, $tanggal_mulai, $status_tanah, $no_tanah, $asal_usul, $harga, $keterangan);

					header("location:".ROOT."inventaris?tab=konstruksi&act=add");
				}
			}
		}

		if($model == 'konstruksi' AND $method == 'edit') {
			if(isset($_POST['edit'])) {

				// Inisiasi Value pada tiap input di Tab Jalur
				$jenis_barang 		='';
				$bangunan	 		='';
				$alamat				='';
				$konstruk			='';
				$luas_konstruksi	='';
				$tanggal_dokumen	='';
				$no_dokumen			='';
				$tanggal_mulai		='';
				$status_tanah		='';
				$no_tanah			='';
				$asal_usul			='';
				$harga				='';
				$keterangan			='';


				$kode_barang			= $_POST['jenis_barang'];
				if (empty($kode_barang)) {
					header("location:".ROOT."input?tab=konstruksi&act=err");
				}else{

					$jb						= $data_barang->getNamaBarangByKB($kode_barang);
					$jenis_barang			= $jb['nama_barang'];
					$kon 					= $_POST['konstruksi'];

					if (!empty($kon)) {
						$N = count($kon);
						for ($i=0; $i < $N ; $i++) { 
							$konstruk .= $kon[$i].", ";
						}
					}

					$id							= $_POST['id'];
					$luas_konstruksi 			= $_POST['luas_konstruksi'];
					$alamat 					= $_POST['alamat'];
					$bangunan					= $_POST['bangunan'];
					$tanggal_dokumen 			= $_POST['tanggal_dokumen'];
					$no_dokumen 				= $_POST['no_dokumen'];
					$tanggal_mulai 				= $_POST['tanggal_mulai'];
					$status_tanah 				= $_POST['status_tanah'];
					$no_tanah 					= $_POST['no_tanah'];
					$asal_usul 					= $_POST['asal_usul'];
					$harga 						= $_POST['harga'];
					$keterangan 				= $_POST['keterangan'];

					$konstruksi->updateData($kode_barang, $jenis_barang, $bangunan, $konstruk, $luas_konstruksi, $alamat, 
						$tanggal_dokumen, $no_dokumen, $tanggal_mulai, $status_tanah, $no_tanah, $asal_usul, $harga, $keterangan, $id);

				header("location:".ROOT."inventaris?tab=konstruksi&act=upd");
			}
		}

		if($model == 'konstruksi' AND $method == 'hapus') {
			$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
			$konstruksi->deleteData($id);

			header("location:".ROOT."inventaris?tab=konstruksi&act=del");
		}

	endif;
?>
