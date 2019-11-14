<?php 
	
	require_once '../../_config/config.php' ;
	require_once '../../_assets/libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	if( isset($_POST['tambah']) ){
		$uuid = Uuid::uuid4()->toString();
		$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
		$keterangan = trim(mysqli_real_escape_string($conn,$_POST['keterangan']));
		mysqli_query($conn, "INSERT INTO tb_obat VALUES ('$uuid','$nama','$keterangan')");
			echo "<script>
					document.location.href = 'data.php';
					alert('data berhasil ditambah');
				</script>";
	}else if( isset($_POST['edit']) ){
		
		$id = trim(mysqli_real_escape_string($conn, $_POST['id']));
		$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
		$keterangan = trim(mysqli_real_escape_string($conn,$_POST['keterangan']));
		mysqli_query($conn, "UPDATE tb_obat SET 
								nama_obat = '$nama',
								ket_obat = '$keterangan'
							 WHERE id_obat = '$id' ");
			echo "<script>
					document.location.href = 'data.php';
					alert('Data Berhasil Diedit');
				</script>";

	}


 ?>