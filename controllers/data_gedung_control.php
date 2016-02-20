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

		if($model == 'gedung' AND $method == 'tambah') {
			if(isset($_POST['tambah'])) {
				
				// Inisiasi Value pada tiap input di Tab Jalur
				$jenis_barang 	='';
				$register		='';
				$kondisi		='';
				$konstruksi 	='';
				$luas_lantai	='';
				$alamat			='';
				$tanggal_beli	='';
				$no_dokumen		='';
				$luas_lahan		='';
				$status_tanah	='';
				$no_sertifikat	='';
				$asal_usul		='';
				$harga			='';
				$keterangan		='';


				$kode_barang			= $_POST['kode_barang'];
				if (empty($kode_barang)) {
					header("location:".ROOT."input?tab=gedung&act=err");
				}else{

					$jb						= $data_barang->getNamaBarangByKB($kode_barang);
					$jenis_barang			= $jb['nama_barang'];
					$register				= $_POST['register'];
					$kondisi				= $_POST['kondisi'];
					$kon 					= $_POST['konstruksi'];

					if (!empty($kon)) {
						$N = count($kon);
						for ($i=0; $i < $N ; $i++) { 
							$konstruksi .= $kon[$i].", ";
						}
					}

					$luas_lantai 				= $_POST['luas_lantai'];
					$alamat 					= $_POST['alamat'];
					$tanggal_beli 				= $_POST['tanggal_beli'];
					$no_dokumen 				= $_POST['no_dokumen'];
					$luas_lahan 				= $_POST['luas_lahan'];
					$status_tanah 				= $_POST['status_tanah'];
					$no_sertifikat 				= $_POST['no_sertifikat'];
					$asal_usul 					= $_POST['asal_usul'];
					$harga 						= $_POST['harga'];
					$keterangan 				= $_POST['keterangan'];

					$gedung->insertData($kode_barang, $jenis_barang, $register, $kondisi, $konstruksi, $luas_lantai, $alamat, 
						$tanggal_beli, $no_dokumen, $luas_lahan, $status_tanah, $no_sertifikat, $asal_usul, $harga, $keterangan);

					header("location:".ROOT."inventaris?tab=gedung&act=add");
				}
			}
		}

		if($model == 'gedung' AND $method == 'edit') {
			if(isset($_POST['edit'])) {

				//Inisiasi Tiap Variabel
				$jenis_barang 	='';
				$register		='';
				$kondisi		='';
				$konstruksi 	='';
				$luas_lantai	='';
				$alamat			='';
				$tanggal_beli	='';
				$no_dokumen		='';
				$luas_lahan		='';
				$status_tanah	='';
				$no_sertifikat	='';
				$asal_usul		='';
				$harga			='';
				$keterangan		='';


				$kode_barang			= $_POST['kode_barang'];
				if (empty($kode_barang)) {
					header("location:".ROOT."input?tab=gedung&act=err");
				}else{

					$id						= $_POST['id'];
					$jb						= $data_barang->getNamaBarangByKB($kode_barang);
					$jenis_barang			= $jb['nama_barang'];
					$register				= $_POST['register'];
					$kondisi				= $_POST['kondisi'];
					$kon 					= $_POST['konstruksi'];

					if (!empty($kon)) {
						$N = count($kon);
						for ($i=0; $i < $N ; $i++) { 
							$konstruksi .= $kon[$i].", ";
						}
					}

					$luas_lantai 				= $_POST['luas_lantai'];
					$alamat 					= $_POST['alamat'];
					$tanggal_beli 				= $_POST['tanggal_beli'];
					$no_dokumen 				= $_POST['no_dokumen'];
					$luas_lahan 				= $_POST['luas_lahan'];
					$status_tanah 				= $_POST['status_tanah'];
					$no_sertifikat 				= $_POST['no_sertifikat'];
					$asal_usul 					= $_POST['asal_usul'];
					$harga 						= $_POST['harga'];
					$keterangan 				= $_POST['keterangan'];

					$gedung->updateData($kode_barang, $jenis_barang, $register, $kondisi, $konstruksi, $luas_lantai, $alamat, 
						$tanggal_beli, $no_dokumen, $luas_lahan, $status_tanah, $no_sertifikat, $asal_usul, $harga, $keterangan, $id);

				header("location:".ROOT."inventaris?tab=gedung&act=upd");
			}
		}
	}

		if($model == 'gedung' AND $method == 'hapus') {
			$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);			
			$gedung->deleteData($id);

			header("location:".ROOT."inventaris?tab=gedung&act=del");
		}

	endif;
?>
