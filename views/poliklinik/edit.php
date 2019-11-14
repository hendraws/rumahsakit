 <?php 
    $chk = $_POST['checked'];
    if( !isset($chk) ){
      echo "<script>
              document.location.href = 'data.php';
              alert('Tidak Ada Data Yang Dipilih');
            </script>";
    }

    $title = 'Edit Poliklinik || RS';
    require_once '../templates/header.php';
 ?>

 <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 text-gray-800">Halaman Edit Poliklinik</h1>

   <!-- Basic Card Example -->
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="data.php" class="btn btn-warning btn-sm mr-3 mb-3"><< Kembali</a>
                </div>
            </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Edit Poliklinik</h6>
            </div>
            <div class="card-body">
                <div class="col-md-8 ml-5">
                    
              <form method="post" action="proses.php"> 
                 
                  <table class="table">
                    <tr>
                      <th>#</th>
                      <th>Nama Poliklinik</th>
                      <th>Gedung</th>
                    </tr>
                    <?php 
                      $no = 1;
                      foreach ($chk as $id) {
                        $sql_poli = mysqli_query($conn, "SELECT * FROM tb_poliklinik WHERE id_poli = '$id'") or die(mysqli_error($conn));
                      while($data = mysqli_fetch_assoc($sql_poli)){ 
                       ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td>
                            <input type="hidden" name="id[]" value="<?= $data['id_poli'] ?>">
                            <input type="text" name="nama[]" value="<?= $data['nama_poli'] ?>" class="form-control" required>
                          </td>
                          <td>
                            <input type="text" name="gedung[]" class="form-control" value="<?= $data['gedung'] ?>" required>
                          </td>
                        </tr>    

                <?php } 
                      } ?>
                  </table>   
                   <div class="row">
                    <div class="col-sm-12 text-right">
                        <button class="btn btn-primary btn-sm mr-3 mb-3" type="submit" name="edit">Simpan Semua</button>
                    </div>
                  </div>
                </form>
                </div>
            </div>
          </div>
    </div>





<?php require_once '../templates/footer.php'; ?>