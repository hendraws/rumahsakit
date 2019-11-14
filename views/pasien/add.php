<?php 
    $title = 'Tambah pasien || RS';
    require_once '../templates/header.php';



 ?>
    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 text-gray-800">Halaman Tambah pasien</h1>

 <!-- Basic Card Example -->
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="data.php" class="btn btn-warning btn-sm mr-3 mb-3"><< Kembali</a>
                    </div>
                </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data pasien</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-8 ml-5">
                        
                  <form method="post" action="proses.php"> 
                      <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" autofocus required>
                      </div>
                      <div class="form-group">
                        <label for="nama">Nama pasien</label>
                        <input type="text" class="form-control" id="nama" name="nama" required >
                      </div>
                      <div class="form-group">
                        <label for="spesialis">Jenis Kelamin</label>
                        <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk1" value="L">
                            <label class="form-check-label" for="jk1">Laki - Laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk2" value="P">
                            <label class="form-check-label" for="jk2">Perempuan</label>
                          </div>
                      </div>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" id="alamat" name="alamat"  rows="3" required></textarea>
                      </div> 
                      <div class="form-group">
                        <label for="telp">No Telepon</label>
                        <input type="number" class="form-control" id="telp" name="telp" maxlength="12" required pattern="[0-9]+" >
                      </div>
                      <div class="form-group pull-right">
                        <button type="submit" id="simpan" name="tambah" class="btn btn-outline-primary">Simpan</button>
                      </div>
                    </form>
                    </div>
                </div>
              </div>
        </div>
<?php require_once '../templates/footer.php'; ?>