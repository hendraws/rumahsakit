<?php 
	require_once '../../_config/config.php' ;

	$chk = $_POST['checked'];
	if( !isset($chk) ){
		 echo "<script>
	              document.location.href = 'data.php';
	              alert('Tidak Ada Data Yang Dipilih');
              </script>";
	}

	foreach ($chk as $id) {
		$sql = mysqli_query($conn, "DELETE FROM tb_poliklinik WHERE id_poli = '$id'") or die(mysqli_error($conn));
		if($sql){
			echo "<script>
					document.location.href = 'data.php';
					alert('".count($chk)." data berhasil dihapus');
				</script>";
		}else{
			echo "<script>
					document.location.href = 'data.php';
					alert('Gagal menghapus data, Coba Lagi !');
				</script>";
		}
	}

 ?>