<?php 
    $title = 'Tambah Rekam Medis || RS';
    require_once '../templates/header.php';



 ?>
    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 text-gray-800">Halaman Tambah Rekam Medis</h1>

 <!-- Basic Card Example -->
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="data.php" class="btn btn-warning btn-sm mr-3 mb-3"><< Kembali</a>
                    </div>
                </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Rekam Medis</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-8 ml-5">
                        
                  <form method="post" action="proses.php"> 
                      <div class="form-group">
                        <label for="pasien">Pasien</label>
                        <select name="pasien" id="pasien" class="form-control" required>
                          <option value="">-- Pilih Pasien --</option>
                          <!-- Ambil data Pasien -->
                          <?php  
                            $sql_pasien = mysqli_query($conn, "SELECT * FROM tb_pasien ORDER BY nama_pasien ASC") or die( mysqli_error($conn));
                            while($data_pasien = mysqli_fetch_assoc($sql_pasien)) : 
                          ?>
                            <option value="<?= $data_pasien['id_pasien'] ?>"><?= $data_pasien['nama_pasien']; ?></option>
                          <?php endwhile; ?>                              
                          <!-- Tutup -->
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea type="text" class="form-control" id="keluhan" name="keluhan"  rows="10" cols="80" required></textarea>
                      </div> 
                       <div class="form-group">
                        <label for="dokter">Dokter</label>
                        <select name="dokter" id="dokter" class="form-control" required>
                          <option value="">-- Pilih dokter --</option>
                          <!-- Ambil data dokter -->
                          <?php  
                            $sql_dokter = mysqli_query($conn, "SELECT * FROM tb_dokter") or die( mysqli_error($conn));
                            while($data_dokter = mysqli_fetch_assoc($sql_dokter)) : 
                          ?>
                            <option value="<?= $data_dokter['id_dokter']; ?>"><?= $data_dokter['nama_dokter']; ?></option>
                          <?php endwhile; ?>
                          <!-- Tutup -->
                        </select>
                      </div>
                      <div  class="form-group">
                        <label for="diagnosa">Diagnosa</label>
                        <textarea type="text" class="form-control" id="diagnosa" name="diagnosa"  rows="2" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="poli">Poliklinik</label>
                        <select name="poli" id="poli" class="form-control" required>
                          <option value="">-- Pilih poli --</option>
                          <!-- Ambil data poli -->
                          <?php  
                            $sql_poli = mysqli_query($conn, "SELECT * FROM tb_poliklinik ORDER BY nama_poli ASC") or die( mysqli_error($conn));
                            while($data_poli = mysqli_fetch_assoc($sql_poli)) : 
                          ?>
                            <option value="<?= $data_poli ['id_poli']; ?>"><?= $data_poli['nama_poli']; ?></option>
                          <?php endwhile; ?>
                          <!-- Tutup -->
                        </select>
                      </div> 
                      <div class="form-group">
                        <label for="obat">Obat</label>
                        <select multiple class="form-control" id="obat" name="obat[]">
                          <!-- Ambil data obat -->
                          <?php  
                            $sql_obat = mysqli_query($conn, "SELECT * FROM tb_obat ORDER BY nama_obat ASC") or die( mysqli_error($conn));
                            while($data_obat = mysqli_fetch_assoc($sql_obat)) : 
                          ?>
                            <option value="<?= $data_obat['id_obat']; ?>"><?= $data_obat['nama_obat']; ?></option>
                          <?php endwhile; ?>
                          <!-- Tutup -->
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="tanggal">Tanggal Periksa</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" autofocus value="<?= date('Y-m-d'); ?>" >
                      </div>
                      <div class="form-group pull-right">
                        <button type="reset" id="reset" name="reset" class="btn btn-outline-warning">Reset</button>
                        <button type="submit" id="simpan" name="tambah" class="btn btn-outline-primary">Simpan</button>
                      </div>
                    </form>
                    </div>
                </div>
              </div>
        </div>

        <script>             
          CKEDITOR.replace( 'keluhan' , {
            uiColor: '#1c79d6'
          } );
        </script>
<?php require_once '../templates/footer.php'; ?>