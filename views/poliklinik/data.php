<?php 
	$title = 'Data Poliklinik';
	require_once '../templates/header.php';

	// query data Poliklinik
	$query = mysqli_query($conn, "SELECT * FROM tb_poliklinik ORDER BY nama_poli ASC") or die(mysqli_error($conn));
	$no = 1;

 ?>

	
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data Poliklinik</h1>
          <div class="row">
            <div class="col-sm-12 text-right">
              <a href="generate.php" class="btn btn-primary mb-3 mr-3">Tambah Poliklinik</a>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                   <h5 class="m-0 font-weight-bold text-primary">Data Poliklinik</h5>
            </div>
            <div class="card-body">
              <form action="" method="post" name="proses">
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Poli</th>
                      <th>Gedung</th>
                      <th class="text-center">
                        <input type="checkbox" id="select_all" value="">
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  	<!-- cek ada data  -->
					<?php if(mysqli_num_rows($query) > 0) : ?>
						<!-- jika ada tampilkan -->
						<?php while($data = mysqli_fetch_assoc($query)) : ?>
		                    <tr>
		                      <td><?= $no++ ?></td>
		                      <td><?= $data['nama_poli']; ?></td>
		                      <td><?= $data['gedung']; ?></td>

                          <td class="text-center">
                            <input type="checkbox" name="checked[]" class="check" value="<?= $data['id_poli']; ?>">
                          </td>
		                    </tr> 
						<?php endwhile; ?>
						
					<?php else : ?>	
						<tr><td class="text-center" colspan="4">Data Tidak Ada</td></tr>
					<?php endif; ?>
                  </tbody>
                </table> 
              </div>
              </form>
              <!-- tutup form -->
            
             <div class="row">
              <div class="col-sm-12 text-right">
                <button class="btn btn-warning btn-sm" onclick="edit()">edit</button>
                <button class="btn btn-danger btn-sm" onclick="hapus()">hapus</button>
              </div>
            </div>

            </div>
          </div>

        </div>

  
      <!-- End of Main Content -->
    
    <script>
      
  function edit(){
    document.proses.action = 'edit.php';
    document.proses.submit();
  }

  function hapus(){
    var conf = confirm('Apakah anda yakin akan menghapus data ?')
    if(conf){
      document.proses.action = 'delete.php';
      document.proses.submit();
    }
  }  
    </script>

<?php require_once '../templates/footer.php'; ?>