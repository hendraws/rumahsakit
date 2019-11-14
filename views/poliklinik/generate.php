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
                </div>
            </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Generate Tambah</h6>
            </div>
            <div class="card-body">
                <div class="col-md-8 ml-5">
                    
              <form method="post" action="add.php"> 
                  <div class="form-group">
                    <label for="count_add">Banyak Record Yang Ingin Ditambah</label>
                    <input type="text" class="form-control" id="count_add" name="count_add" autofocus maxlength="2" pattern="[0-9]+" required >
                  </div>
                  <div class="form-group pull-right">
                    <button type="submit" id="generate" name="generate" class="btn btn-outline-primary">Generate</button>
                  </div>
                </form>
                </div>
            </div>
          </div>
    </div>





<?php require_once '../templates/footer.php'; ?>