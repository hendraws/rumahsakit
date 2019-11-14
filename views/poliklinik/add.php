 <?php 
    $title = 'Tambah Poliklinik || RS';
    require_once '../templates/header.php';
 ?>

 <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 text-gray-800">Halaman Tambah Poliklinik</h1>

   <!-- Basic Card Example -->
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="data.php" class="btn btn-warning btn-sm mr-3 mb-3"><< Kembali</a>
                    <a href="data.php" class="btn btn-info btn-sm mr-3 mb-3">Tambah Data Lagi</a>
                </div>
            </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Generate Tambah</h6>
            </div>
            <div class="card-body">
                <div class="col-md-8 ml-5">
                    
              <form method="post" action="proses.php"> 
                  <input type="hidden" name="total" value="<?= $_POST['count_add']; ?>">
                  <table class="table">
                    <tr>
                      <th>#</th>
                      <th>Nama Poliklinik</th>
                      <th>Gedung</th>
                    </tr>
                    <?php 
                      for ($i=1; $i <= $_POST['count_add']; $i++) { ?>
                        <tr>
                          <td><?= $i; ?></td>
                          <td>
                            <input type="text" name="nama-<?=$i?>" class="form-control" required>
                          </td>
                          <td>
                            <input type="text" name="gedung-<?=$i?>" class="form-control" required>
                          </td>
                        </tr>    

                    <?php } ?>
                  </table>   
                   <div class="row">
                    <div class="col-sm-12 text-right">
                        <button class="btn btn-primary btn-sm mr-3 mb-3" type="submit" name="tambah">Simpan Semua</button>
                    </div>
                  </div>
                </form>
                </div>
            </div>
          </div>
    </div>





<?php require_once '../templates/footer.php'; ?>