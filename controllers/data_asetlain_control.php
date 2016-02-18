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

		if($model == 'asetlain' AND $method == 'tambah') {
			if(isset($_POST['tambah'])) {
				
				// Inisiasi Value pada tiap input di Tab Jalur
				$jenis_barang ='';
				$judul_buku ='';
				$spesifikasi_buku ='';
				$asal_daerah ='';
				$pencipta_kesenian ='';
				$bahan_kesenian ='';
				$jenis ='';
				$ukuran ='';
				$foto ='';


				$kode_barang			= $_POST['kode_barang'];
				if (empty($kode_barang)) {
					header("location:".ROOT."input?tab=asetlain&act=err");
				}else{

					$jb						= $data_barang->getNamaBarangByKB($kode_barang);
					$jenis_barang			= $jb['nama_barang'];
					$register				= $_POST['register'];
					$jalur					= $_POST['jalur'];

					switch ($jalur) {
						case '1':
							$judul_buku					= $_POST['judul_buku'];
							$spesifikasi_buku			= $_POST['spesifikasi_buku'];
							break;
						
						case '2':
							$asal_daerah				= $_POST['asal_daerah'];
							$pencipta_kesenian			= $_POST['pencipta_kesenian'];
							$bahan_kesenian				= $_POST['bahan_kesenian'];
							break;

						case '3':
							$jenis 					= $_POST['jenis'];
							$ukuran 				= $_POST['ukuran'];
							break;
					}

					$jumlah 				= $_POST['jumlah'];
					$tanggal_cetak 			= $_POST['tanggal_cetak'];
					$asal_usul 				= $_POST['asal_usul'];
					$harga 					= $_POST['harga'];
					$keterangan 			= $_POST['keterangan'];


					//sanitasi
					// $apa			= filter_var($apa, FILTER_SANITIZE_STRING);

					if($_FILES['foto']['tmp_name'] != "") {
						$foto = $libs->uploadFile('../upload/images/',$_FILES['foto']);
					}

					$asetlain->insertData($kode_barang, $jenis_barang, $register, $jalur, $judul_buku, $spesifikasi_buku, $asal_daerah, $pencipta_kesenian, $bahan_kesenian, $jenis, $ukuran, $jumlah, $tanggal_cetak, $asal_usul, $harga, $keterangan, $foto);

					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
					header("location:".ROOT."laporan");
				}
			}
		}

		if($model == 'asetlain' AND $method == 'edit') {
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
				header("location:".ROOT."asetlain/lihat/".$id);
			}
		}

		if($model == 'asetlain' AND $method == 'hapus') {
			$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
			$data = $asetlain->getDataById($id);
			$libs->deleteFile("../upload/files/",$data['file_upload']);

			$asetlain->deleteData($id);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";
			header("location:".ROOT."asetlain");
		}

	endif;
?>
