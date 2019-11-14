<?php 
	require_once '../../_config/config.php' ;
	$id = $_GET['id'];

	mysqli_query($conn, "DELETE FROM tb_obat WHERE id_obat='$id'");
	echo "<script>
					alert('data berhasil dihapus');
					document.location.href = 'data.php';
				</script>";


 ?>