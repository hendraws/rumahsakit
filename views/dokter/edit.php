<?php 
    $title = 'Edit dokter || RS';
    require_once '../templates/header.php';
    $id = isset($_GET['id']) ? $_GET['id'] : false;
    $query = mysqli_query($conn, "SELECT * FROM tb_dokter WHERE id_dokter = '$id'") or die(mysqli_error($conn));
    $data = mysqli_fetch_assoc($query);
 ?>
    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 text-gray-800">Halaman Edit dokter</h1>

 <!-- Basic Card Example -->
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="data.php" class="btn btn-warning btn-sm mr-3 mb-3"><< Kembali</a>
                    </div>
                </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Edit Data dokter</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-8 ml-5">
                        
                  <form method="post" action="proses.php"> 
                      <input type="hidden" name="id" value="<?= $data['id_dokter'] ?>">
                      <div class="form-group">
                        <label for="nama">Nama dokter</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama_dokter'] ?>" autofocus>
                      </div>
                      
                      <div class="form-group">
                        <label for="spesialis">Spesialis</label>
                        <input type="text" class="form-control" id="spesialis" name="spesialis" value="<?= $data['spesialis'] ?>" autofocus>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" id="alamat" name="alamat"  rows="3"><?= $data['alamat'] ?></textarea>
                      </div> 
                      <div class="form-group">
                        <label for="telp">No Telepon</label>
                        <input type="number" class="form-control" id="telp" name="telp" value="<?= $data['no_telp'] ?>" autofocus>
                      </div>
                      <div class="form-group">
                        <button type="submit" id="simpan" name="edit" class="btn btn-outline-primary">Simpan</button>
                      </div>
                    </form>
                    </div>
                </div>
              </div>
        </div>
<?php require_once '../templates/footer.php'; ?>