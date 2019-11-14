<?php 
	
	require_once '../../_config/config.php' ;
	require_once '../../_assets/libs/vendor/autoload.php';

	use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Reader\Csv;
	use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

	if( isset($_POST['tambah']) ){
		$uuid   = Uuid::uuid4()->toString();
		$nik    = trim(mysqli_real_escape_string($conn, $_POST['nik']));
		$nama   = trim(mysqli_real_escape_string($conn, $_POST['nama']));
		$jk     = trim(mysqli_real_escape_string($conn, $_POST['jk']));
		$alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
		$telp   = trim(mysqli_real_escape_string($conn, $_POST['telp']));
		$cekdata = mysqli_query($conn,"SELECT * FROM tb_pasien WHERE no_identitas = '$nik'");
		
		if(mysqli_num_rows($cekdata) > 0){
			echo "<script>
					document.location.href = 'add.php';
					alert('Data NIK Sudah Pernah Di input');
				</script>";
		}else{	
			mysqli_query($conn, "INSERT INTO tb_pasien VALUES ('$uuid','$nik','$nama','$jk','$alamat','$telp')");
				echo "<script>
						document.location.href = 'data.php';
						alert('data berhasil ditambah');
					</script>";
		}

	}else if( isset($_POST['edit']) ){
	
		$id    = trim(mysqli_real_escape_string($conn, $_POST['id']));
		$nik    = trim(mysqli_real_escape_string($conn, $_POST['nik']));
		$nama   = trim(mysqli_real_escape_string($conn, $_POST['nama']));
		$jk     = trim(mysqli_real_escape_string($conn, $_POST['jk']));
		$alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
		$telp   = trim(mysqli_real_escape_string($conn, $_POST['telp']));
		$cekdata = mysqli_query($conn,"SELECT * FROM tb_pasien WHERE no_identitas = '$nik'");
		
		if(mysqli_num_rows($cekdata) > 1){
			echo "<script>
					document.location.href = 'edit.php';
					alert('Data NIK Sudah Pernah Di input');
				</script>";
		}else{	
			mysqli_query($conn, "UPDATE tb_pasien SET 
								no_identitas = '$nik',
								nama_pasien = '$nama',
								jenis_kelamin   = '$jk',
								alamat      = '$alamat',
								no_telp     = '$telp'
							 WHERE id_pasien = '$id' ");
				echo "<script>
						document.location.href = 'data.php';
						alert('data berhasil diedit');
					</script>";
		}

	}else if( isset($_POST['import']) ){
			
		 
		    $arr_file = explode('.', $_FILES['file']['name']);
		    $extension = end($arr_file);
		 
		    if('csv' == $extension) {
		        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		    } else {
		        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		    }
		 
		    $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
		    $sheetData = $spreadsheet->getActiveSheet()->toArray();
		    $gagal = 1;
			$berhasil =1;

			for($i = 2;$i < count($sheetData); $i++)
			{
				$uuid   = Uuid::uuid4()->toString();
				$nik    = $sheetData[$i]['0'];
				$nama   = $sheetData[$i]['1'];
				$jk     = $sheetData[$i]['2'];
				$alamat = $sheetData[$i]['3'];
				$telp   = $sheetData[$i]['4'];
				
	    		$cekdata = mysqli_query($conn,"SELECT * FROM tb_pasien WHERE no_identitas = '$nik'");
				if(mysqli_num_rows($cekdata) > 0){
					$data1 = $gagal++;

				}else{
		        mysqli_query($conn,"INSERT INTO tb_pasien VALUES ('$uuid','$nik','$nama','$jk','$alamat','$telp')");
					$data2 = $berhasil++;			
				}
		    }
			$data1 = isset($data1) ? $data1 : '0';
			$data2 = isset($data2) ? $data2 : '0';
			$jumlah = $data1+$data2;
			if($data1 == '0'){
				echo "<script>
						document.location.href = 'data.php';
						alert('Jumlah data berhasil ditambah $data2 Data dari $jumlah Data');
					</script>";
				
			}else{
				echo "<script>
							document.location.href = 'data.php';
							alert('Total data $jumlah. jumlah data berhasil ditambah $data2 dan data gagal ditambah $data1 karena DATA NIK SUDAH ADA !!!');
						</script>";
				
			}

	}
 ?>