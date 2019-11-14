<?php 
    $title = 'Edit Obat || RS';
    require_once '../templates/header.php';
    $id = isset($_GET['id']) ? $_GET['id'] : false;
    $query = mysqli_query($conn, "SELECT * FROM tb_obat WHERE id_obat = '$id'") or die(mysqli_error($conn));
    $data = mysqli_fetch_assoc($query);
 ?>
    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 text-gray-800">Halaman Edit Obat</h1>

 <!-- Basic Card Example -->
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="data.php" class="btn btn-warning btn-sm mr-3 mb-3"><< Kembali</a>
                    </div>
                </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Obat</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-8 ml-5">
                        
                  <form method="post" action="proses.php"> 
                      <input type="hidden" name="id" value="<?= $data['id_obat'] ?>">
                      <div class="form-group">
                        <label for="nama">Nama Obat</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama_obat'] ?>" autofocus>
                      </div>
                      <div class="form-group">
                        <label for="Keterangan">Keterangan Obat</label>
                        <textarea type="text" class="form-control" id="Keterangan" name="keterangan"  rows="3"><?= $data['ket_obat'] ?></textarea>
                      </div> 
                      <div class="form-group pull-right">
                        <button type="submit" id="simpan" name="edit" class="btn btn-outline-primary">Simpan</button>
                      </div>
                    </form>
                    </div>
                </div>
              </div>
        </div>
<?php require_once '../templates/footer.php'; ?>