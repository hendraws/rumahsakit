<?php 
	
	require_once '../../_config/config.php' ;
	require_once '../../_assets/libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	if( isset($_POST['tambah']) ){
		$uuid = Uuid::uuid4()->toString();
		$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
		$spesialis = trim(mysqli_real_escape_string($conn, $_POST['spesialis']));
		$alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
		$telp = trim(mysqli_real_escape_string($conn, $_POST['telp']));


		mysqli_query($conn, "INSERT INTO tb_dokter VALUES ('$uuid','$nama','$spesialis','$alamat','$telp')");
			echo "<script>
					document.location.href = 'data.php';
					alert('data berhasil ditambah');
				</script>";
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