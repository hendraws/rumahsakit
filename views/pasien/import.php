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
                        <a href="../../_files/sample/pasien.xlsx" class="btn btn-info btn-sm mr-3 mb-3"> Download Format Default Excel</a>
                        <a href="data.php" class="btn btn-warning btn-sm mr-3 mb-3"><< Kembali</a>
                    </div>
                </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data pasien</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-8 ml-5">
                        
                  <form method="post" action="proses.php" enctype="multipart/form-data"> 
                      <div class="form-group" >
                        <label for="file">Import Data Pasien</label>
                        <input type="file" class="form-control pb-5 m-1" id="file" name="file" required>
                      </div>
                      <div class="form-group pull-right">
                        <button type="submit" id="import" name="import" class="btn btn-outline-primary">Import</button>
                      </div>
                    </form>
                    </div>
                </div>
              </div>
        </div>
<?php require_once '../templates/footer.php'; ?>