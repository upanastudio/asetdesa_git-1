<?php 
	ob_start();
	require_once("connect/database.php");
	function autoload($class){
		$namafile = $class.'.php';
		include_once $namafile;
	}

	spl_autoload_register('autoload');

	try {
		$input			= new input_model($db);
		$tanah			= new input_tanah_model($db);
		$perlengkapan	= new input_perlengkapan_model($db);
		$gedung			= new input_gedung_model($db);
		$jalan			= new input_jalan_model($db);
		$asetlain		= new input_asetlain_model($db);
		$konstruksi		= new input_konstruksi_model($db);
		$libs				= new libs_model($db);
		$user				= new user_model($db);
	} catch(Exception $e) {
		echo "Menemukan kesalahan: ".$e->getMessage()."\n";
	}
?>
