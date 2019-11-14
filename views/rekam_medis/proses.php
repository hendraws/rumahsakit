<?php 
	
	require_once '../../_config/config.php' ;
	require_once '../../_assets/libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	if( isset($_POST['tambah']) ){
		$uuid     = Uuid::uuid4()->toString();
		$pasien   = trim(mysqli_real_escape_string($conn, $_POST['pasien']));
		$keluhan  = trim(mysqli_real_escape_string($conn, $_POST['keluhan']));
		$dokter   = trim(mysqli_real_escape_string($conn, $_POST['dokter']));
		$diagnosa = trim(mysqli_real_escape_string($conn, $_POST['diagnosa']));
		$poli     = trim(mysqli_real_escape_string($conn, $_POST['poli']));
		$tanggal  = trim(mysqli_real_escape_string($conn, $_POST['tanggal']));

		mysqli_query($conn, "INSERT INTO tb_rekammedis VALUES ('$uuid','$pasien','$keluhan','$dokter','$diagnosa','$poli','$tanggal')") or die (mysqli_error($conn));

		$obat = $_POST['obat'];

		foreach ($obat as $ob) {
			mysqli_query($conn, "INSERT INTO tb_rm_obat (id_rm,id_obat) VALUES ('$uuid','$ob')") or die (mysqli_error($conn));
		}
		var_dump($_POST);
	}else if( isset($_POST['edit']) ){
	
		$id        = trim(mysqli_real_escape_string($conn, $_POST['id']));
		$nama      = trim(mysqli_real_escape_string($conn, $_POST['nama']));
		$spesialis = trim(mysqli_real_escape_string($conn, $_POST['spesialis']));
		$alamat    = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
		$telp      = trim(mysqli_real_escape_string($conn, $_POST['telp']));

		mysqli_query($conn, "UPDATE tb_dokter SET 
								nama_dokter = '$nama',
								spesialis = '$spesialis',
								alamat = '$alamat',
								no_telp = '$telp'
							 WHERE id_dokter = '$id' ");
			echo "<script>
					document.location.href = 'data.php';
					alert('Data Berhasil Diedit');
				</script>";

	}


 ?>