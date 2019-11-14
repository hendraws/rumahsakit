<?php 
	
	require_once '../../_config/config.php' ;
	require_once '../../_assets/libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	if( isset($_POST['tambah']) ){
		$total = $_POST['total'];
		for ($i=1; $i <= $total; $i++) { 
			$uuid   = Uuid::uuid4()->toString();
			$nama   = trim(mysqli_real_escape_string($conn, $_POST['nama-'.$i]));
			$gedung = trim(mysqli_real_escape_string($conn, $_POST['gedung-'.$i]));
			$sql    = 	mysqli_query($conn, "INSERT INTO tb_poliklinik VALUES ('$uuid','$nama','$gedung')") or die(mysqli_error($conn));
		}
		if($sql){
			echo "<script>
					document.location.href = 'data.php';
					alert('".$total." data berhasil ditambahkan');
				</script>";
		}else{
			echo "<script>
					document.location.href = 'generate.php';
					alert('Gagal menambahkan data, Coba Lagi !');
				</script>";
		}
	
	}else if( isset($_POST['edit']) ){
		for ($i=0; $i < count($_POST['id']); $i++) { 
			$id     = $_POST['id'][$i];
			$nama   = $_POST['nama'][$i];
			$gedung = $_POST['gedung'][$i];
			mysqli_query($conn, "UPDATE tb_poliklinik SET nama_poli = '$nama', gedung = '$gedung' WHERE id_poli = '$id'");
		}
		echo "<script>
					document.location.href = 'data.php';
					alert('Data Berhasil Di Update');
				</script>";
	}


 ?>