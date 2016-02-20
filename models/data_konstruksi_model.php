<?php
	class data_konstruksi_model {
		private $db;

		public function __construct($database) {
			$this->db = $database;
		}

		public function countData() {
			$query = $this->db->prepare("SELECT * FROM `data_konstruksi`");

			try {
				$query->execute();
				return $query->rowCount();
			} catch(PDOException $e){
				$e->getMessage();
			}
		}

		public function getDataLengkap() {
			$query = $this->db->prepare("SELECT * FROM `data_konstruksi`");

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getDataById($id) {
			$query = $this->db->prepare("SELECT * FROM `data_konstruksi` WHERE `id` = :id");
			$query->bindParam(':id', $id, PDO::PARAM_INT);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}

			return $query->fetch(PDO::FETCH_ASSOC);
		}

		public function getKodeBarangByKB($kb) {
			$query = $this->db->prepare("SELECT * FROM `tb_kode_barang` WHERE `kb_1` = :kb");
			$query->bindParam(':kb', $kb, PDO::PARAM_STR);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function insertData($kode_barang, $jenis_barang, $bangunan, $konstruksi, $luas_konstruksi, $alamat, 
			$tanggal_dokumen, $no_dokumen, $status_tanah, $asal_usul, $harga, $keterangan) {
			$query = $this->db->prepare("INSERT INTO `data_konstruksi` SET	`kode_barang`		= :kode_barang,
																							`jenis_barang`			= :jenis_barang,
																							`bangunan`				= :bangunan,
																							`konstruksi`			= :konstruksi,
																							`luas_konstruksi`		= :luas_konstruksi,
																							`alamat`					= :alamat,
																							`tanggal_dokumen`		= :tanggal_dokumen,
																							`status_tanah`			= :status_tanah,
																							`no_dokumen`			= :no_dokumen,
																							`asal_usul`				= :asal_usul,
																							`harga`					= :harga,
																							`keterangan`			= :keterangan
			");

			$query->bindParam(':kode_barang', $kode_barang, PDO::PARAM_STR);
			$query->bindParam(':jenis_barang', $jenis_barang, PDO::PARAM_STR);
			$query->bindParam(':konstruksi', $konstruksi, PDO::PARAM_STR);
			$query->bindParam(':luas_konstruksi', $luas_konstruksi, PDO::PARAM_STR);
			$query->bindParam(':alamat', $alamat, PDO::PARAM_STR);
			$query->bindParam(':tanggal_dokumen', $tanggal_dokumen, PDO::PARAM_STR);
			$query->bindParam(':status_tanah', $status_tanah, PDO::PARAM_STR);
			$query->bindParam(':no_dokumen', $no_dokumen, PDO::PARAM_STR);
			$query->bindParam(':asal_usul', $asal_usul, PDO::PARAM_STR);
			$query->bindParam(':harga', $harga, PDO::PARAM_STR);
			$query->bindParam(':keterangan', $keterangan, PDO::PARAM_STR);

			try {
				$query->execute();
				return true;
			} catch(PDOException $e) {
				return	die($e->getMessage());
			}
		}

		public function updateData($kode_barang, $jenis_barang, $register, $luas_tanah, $tanggal_beli, $alamat, $hak, $no_sertifikat, $tanggal_sertifikat, $penggunaan, $asal_usul, $harga, $keterangan, $id) {
			$query = $this->db->prepare("UPDATE `data_konstruksi` SET			`kode_barang`			= :kode_barang,
																							`jenis_barang`			= :jenis_barang,
																							`register`				= :register,
																							`luas_tanah`			= :luas_tanah,
																							`tanggal_beli`			= :tanggal_beli,
																							`alamat`					= :alamat,
																							`hak`						= :hak,
																							`no_sertifikat`		= :no_sertifikat,
																							`tanggal_sertifikat`	= :tanggal_sertifikat,
																							`penggunaan`			= :penggunaan,
																							`asal_usul`				= :asal_usul,
																							`harga`					= :harga,
																							`keterangan`			= :keterangan
																				WHERE		`id`						= :id
			");

			$query->bindParam(':id', $id, PDO::PARAM_INT);
			$query->bindParam(':kode_barang', $kode_barang, PDO::PARAM_STR);
			$query->bindParam(':jenis_barang', $jenis_barang, PDO::PARAM_STR);
			$query->bindParam(':register', $register, PDO::PARAM_STR);
			$query->bindParam(':luas_tanah', $luas_tanah, PDO::PARAM_STR);
			$query->bindParam(':tanggal_beli', $tanggal_beli, PDO::PARAM_STR);
			$query->bindParam(':alamat', $alamat, PDO::PARAM_STR);
			$query->bindParam(':hak', $hak, PDO::PARAM_STR);
			$query->bindParam(':no_sertifikat', $no_sertifikat, PDO::PARAM_STR);
			$query->bindParam(':tanggal_sertifikat', $tanggal_sertifikat, PDO::PARAM_STR);
			$query->bindParam(':penggunaan', $penggunaan, PDO::PARAM_STR);
			$query->bindParam(':asal_usul', $asal_usul, PDO::PARAM_STR);
			$query->bindParam(':harga', $harga, PDO::PARAM_STR);
			$query->bindParam(':keterangan', $keterangan, PDO::PARAM_STR);

			try {
				$query->execute();
				return true;
			} catch(PDOException $e) {
				return	die($e->getMessage());
			}
		}

		public function deleteData($id) {
			$sql = "DELETE FROM `data_konstruksi` WHERE `id` = ?";
			$query = $this->db->prepare($sql);
			$query->bindValue(1, $id);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}
	}
?>
