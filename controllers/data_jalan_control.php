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

		if($model == 'jalan' AND $method == 'tambah') {
			if(isset($_POST['tambah'])) {
				
				// Inisiasi Value pada tiap input di Tab Jalur
				$jenis_barang 		='';
				$register			='';
				$konstruksi 		= '';
				$panjang			='';
				$lebar				= '';
				$luas_tanah			='';
				$tanggal_dokumen	='';
				$no_dokumen			='';
				$status_tanah		='';
				$kondisi			='';
				$no_tanah			='';
				$asal_usul			='';
				$harga				='';
				$keterangan			='';


				$kode_barang			= $_POST['kode_barang'];
				if (empty($kode_barang)) {
					header("location:".ROOT."input?tab=jalan&act=err");
				}else{

					$jb						= $data_barang->getNamaBarangByKB($kode_barang);
					$jenis_barang			= $jb['nama_barang'];
					$register				= $_POST['register'];
					$kondisi				= $_POST['kondisi'];
					$konstruksi				= $_POST['konstruksi'];
					$panjang 				= $_POST['panjang'];
					$lebar 					= $_POST['lebar'];
					$luas_tanah 				= $_POST['luas_tanah'];
					$tanggal_dokumen 			= $_POST['tanggal_dokumen'];
					$no_dokumen 				= $_POST['no_dokumen'];
					$status_tanah 				= $_POST['status_tanah'];
					$asal_usul 					= $_POST['asal_usul'];
					$harga 						= $_POST['harga'];
					$keterangan 				= $_POST['keterangan'];

					$jalan->insertData($kode_barang, $jenis_barang, $register, $kondisi, $konstruksi, $panjang, $lebar, $luas_tanah, $tanggal_dokumen, $no_dokumen, $status_tanah, $asal_usul, $harga, $keterangan);

					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
					header("location:".ROOT."laporan");
				}
			}
		}

		if($model == 'jalan' AND $method == 'edit') {
			if(isset($_POST['edit'])) {
				$apa			= $_POST['apa'];
				$file_upload	= $_POST['file_upload'];
				$id				= $_POST['id'];

				//sanitasi
				$apa			= filter_var($apa,FILTER_SANITIZE_STRING);

				if($_FILES['file']['tmp_name'] != "") {
					$libs->deleteFile("../upload/files/",$file_upload);
					$file_upload = $libs->uploadFile('../upload/files/',$_FILES['file']);
				}

				$input->updateData($apa, $file_upload, $id);
				echo "<script> alert('Data Berhasil Diperbarui'); </script>";
				header("location:".ROOT."jalan/lihat/".$id);
			}
		}

		if($model == 'jalan' AND $method == 'hapus') {
			$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
			$data = $jalan->getDataById($id);
			$libs->deleteFile("../upload/files/",$data['file_upload']);

			$jalan->deleteData($id);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";
			header("location:".ROOT."jalan");
		}

	endif;
?>
