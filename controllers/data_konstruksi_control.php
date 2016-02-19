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
				$bangunan	 		= '';
				$alamat				= '';
				$luas_konstruksi	='';
				$tanggal_dokumen	='';
				$no_dokumen			='';
				$status_tanah		='';
				$asal_usul			='';
				$harga				='';
				$keterangan			='';


				$kode_barang			= $_POST['kode_barang'];
				if (empty($kode_barang)) {
					header("location:".ROOT."input?tab=konstruksi&act=err");
				}else{

					$jb						= $data_barang->getNamaBarangByKB($kode_barang);
					$jenis_barang			= $jb['nama_barang'];
					$register				= $_POST['register'];
					$kon 					= $_POST['konstruksi'];

					if (!empty($kon)) {
						$N = count($kon);
						for ($i=0; $i < $N ; $i++) { 
							$konstruksi .= $kon[$i].", ";
						}
					}

					$luas_konstruksi 			= $_POST['luas_konstruksi'];
					$alamat 					= $_POST['alamat'];
					$tanggal_dokumen 			= $_POST['tanggal_dokumen'];
					$no_dokumen 				= $_POST['no_dokumen'];
					$status_tanah 				= $_POST['status_tanah'];
					$asal_usul 					= $_POST['asal_usul'];
					$harga 						= $_POST['harga'];
					$keterangan 				= $_POST['keterangan'];

					$konstruksi->insertData($kode_barang, $jenis_barang, $register, $konstruksi, $luas_konstruksi, $alamat, 
						$tanggal_dokumen, $no_dokumen, $status_tanah, $asal_usul, $harga, $keterangan);

					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
					header("location:".ROOT."laporan");
				}
			}
		}

		if($model == 'konstruksi' AND $method == 'edit') {
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
				header("location:".ROOT."konstruksi/lihat/".$id);
			}
		}

		if($model == 'konstruksi' AND $method == 'hapus') {
			$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
			$data = $konstruksi->getDataById($id);
			$libs->deleteFile("../upload/files/",$data['file_upload']);

			$konstruksi->deleteData($id);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";
			header("location:".ROOT."konstruksi");
		}

	endif;
?>
