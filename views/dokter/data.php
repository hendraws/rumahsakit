<?php 
	$title = 'Data dokter';
	require_once '../templates/header.php';

	// query data dokter
	$query = mysqli_query($conn, "SELECT * FROM tb_dokter ORDER BY nama_dokter ASC") or die(mysqli_error($conn));
	$no = 1;

 ?>

	
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data dokter</h1>
          <div class="row">
            <div class="col-sm-12 text-right">
              <a href="add.php" class="btn btn-primary mb-3 mr-3">Tambah dokter</a>
            </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                   <h5 class="m-0 font-weight-bold text-primary">Data dokter</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama dokter</th>
                      <th>Spesialis</th>
                      <th>Alamat</th>
                      <th>No Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<!-- cek ada data  -->
					<?php if(mysqli_num_rows($query) > 0) : ?>
						<!-- jika ada tampilkan -->
						<?php while($data = mysqli_fetch_assoc($query)) : ?>
		                    <tr>
		                      <td><?= $no++ ?></td>
		                      <td><?= $data['nama_dokter']; ?></td>
                          <td><?= $data['spesialis']; ?></td>
                          <td><?= $data['alamat']; ?></td>
		                      <td><?= $data['no_telp']; ?></td>
		                      <td class="text-center">
            									<a href="edit.php?id=<?= $data['id_dokter']; ?>" class="btn btn-warning btn-sm">Edit</a>
            									<a href="delete.php?id=<?= $data['id_dokter']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin mengapus data ?')">Hapus</a>
		                      </td>
		                    </tr>
						<?php endwhile; ?>
						
					<?php else : ?>	
						<tr><td class="text-center" colspan="4">Data Tidak Ada</td></tr>
					<?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>
      <!-- End of Main Content -->


<?php require_once '../templates/footer.php'; ?>