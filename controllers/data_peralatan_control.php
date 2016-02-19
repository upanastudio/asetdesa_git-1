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

		if($model == 'peralatan' AND $method == 'tambah') {
			if(isset($_POST['tambah'])) {
				
				// Inisiasi Value pada tiap input di Tab Jalur
				$jenis_barang 		='';
				$register			='';
				$merek		 		= '';
				$ukuran				='';
				$tanggal_beli		= '';
				$no_pabrik			='';
				$no_rangka			='';
				$no_mesin			='';
				$no_polisi			='';
				$asal_usul			='';
				$harga				='';
				$keterangan			='';


				$kode_barang			= $_POST['kode_barang'];
				if (empty($kode_barang)) {
					header("location:".ROOT."input?tab=peralatan&act=err");
				}else{

					$jb						= $data_barang->getNamaBarangByKB($kode_barang);
					$jenis_barang			= $jb['nama_barang'];
					$register				= $_POST['register'];
					$merek					= $_POST['merek'];
					$ukuran					= $_POST['ukuran'];
					$tanggal_beli 			= $_POST['tanggal_beli'];
					$no_pabrik 				= $_POST['no_pabrik'];
					$no_rangka 				= $_POST['no_rangka'];
					$no_mesin 				= $_POST['no_mesin'];
					$no_polisi 				= $_POST['no_polisi'];
					$asal_usul 				= $_POST['asal_usul'];
					$harga 					= $_POST['harga'];
					$keterangan 			= $_POST['keterangan'];

					if($_FILES['foto']['tmp_name'] != "") {
						$foto = $libs->uploadFile('../upload/images/',$_FILES['foto']);
					}

					$peralatan->insertData($kode_barang, $jenis_barang, $register, $merek, $ukuran, $tanggal_beli, $no_pabrik, $no_rangka, $no_mesin, $no_polisi, $asal_usul, $harga, $keterangan, $foto);

					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
					header("location:".ROOT."laporan");
				}
			}
		}

		if($model == 'peralatan' AND $method == 'edit') {
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
				header("location:".ROOT."peralatan/lihat/".$id);
			}
		}

		if($model == 'peralatan' AND $method == 'hapus') {
			$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
			$data = $peralatan->getDataById($id);
			$libs->deleteFile("../upload/files/",$data['file_upload']);

			$peralatan->deleteData($id);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";
			header("location:".ROOT."peralatan");
		}

	endif;
?>
