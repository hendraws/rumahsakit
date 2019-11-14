<?php 
	$title = 'Data Rekam Medis';
	require_once '../templates/header.php';

 ?>

	
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data Rekam Medis</h1>
          <div class="row">
            <div class="col-sm-12 text-right">
              <a href="add.php" class="btn btn-primary mb-3 mr-3">Tambah Rekam Medis</a>
            </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                   <h5 class="m-0 font-weight-bold text-primary">Data Rekam Medis</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama Pasien</th>
                      <th>Keluhan</th>
                      <th>Nama Dokter</th>
                      <th>Dignosa</th>
                      <th>Poliklinik</th>
                      <th>Data Obat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = "SELECT * FROM tb_rekammedis
                                INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
                                INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
                                INNER JOIN tb_poliklinik ON tb_rekammedis.id_poli = tb_poliklinik.id_poli
                               ";
                      $sql_rm = mysqli_query($conn, $query) or die(mysqli_error($conn));

                      while ($data = mysqli_fetch_assoc($sql_rm)) :
                     ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= tgl_indo($data['tgl_periksa']) ?></td>
                      <td><?= $data['nama_pasien'] ?></td>
                      <td><?= $data['keluhan'] ?></td>
                      <td><?= $data['nama_dokter'] ?></td>
                      <td><?= $data['diagnosa'] ?></td>
                      <td><?= $data['nama_poli'] ?></td>
                      <td>
                        <?php 
                          $sql_obat = mysqli_query($conn, "SELECT * FROM tb_rm_obat JOIN tb_obat ON tb_rm_obat.id_obat = tb_obat.id_obat WHERE id_rm = '$data[id_rm]' ") or die(mysqli_error($conn));
                          while ($data_obat = mysqli_fetch_assoc($sql_obat)){
                            echo $data_obat['nama_obat']."<br>";
                          }
                         ?>
                      </td>
                      <td>
                          <a href="delete.php?id=<?= $data['id_rm']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin mengapus data ?')">Hapus</a>
                      </td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>
      <!-- End of Main Content -->


<?php require_once '../templates/footer.php'; ?>