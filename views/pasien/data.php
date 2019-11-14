<?php 
	$title = 'Data pasien';
	require_once '../templates/header.php';

	// query data pasien
	$query = mysqli_query($conn, "SELECT * FROM tb_pasien ORDER BY nama_pasien ASC") or die(mysqli_error($conn));
	$no = 1;

 ?>

	
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data pasien</h1>
          <div class="row">
            <div class="col-sm-12 text-right">
              <a href="import.php" class="btn btn-success mb-3 mr-3">Import Data Pasien</a>
              <a href="add.php" class="btn btn-primary mb-3 mr-3">Tambah Pasien</a>
            </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                   <h5 class="m-0 font-weight-bold text-primary">Data Pasien</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="pasien" width="100%" cellspacing="0">
                  <thead>
                    <tr>
 
                      <th>NIK</th>
                      <th>Nama Pasien</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>No Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
      
                  </tbody>
                </table>
                
                <script>
                  $(document).ready(function() {
                      $('#pasien').DataTable( {
                          "processing": true,
                          "serverSide": true,
                          "ajax": "data_pasien.php",
                          "bInfo" : true,
                          scrollY : '250',
                          dom : 'lfBrtip',
                            buttons: [
                              {
                                  extend: 'copyHtml5',
                                  exportOptions: {
                                      columns: [ 0, 1, 2, 3, 4 ]
                                  }
                              },
                              {
                                  extend: 'excelHtml5',
                                   exportOptions: {
                                      columns: [ 0, 1, 2, 3, 4 ]
                                  }
                              },
                              {
                                  extend: 'pdfHtml5',
                                  exportOptions: {
                                      columns: [ 0, 1, 2, 3, 4 ]
                                  }
                              },
                              {
                                  extend: 'print',
                                  exportOptions: {
                                      columns: [ 0, 1, 2, 3, 4 ]
                                  }
                              }
                          ],
                          columnDefs : [
                            {
                              "searchable" : false,
                              "orderable" : false,
                              "targets" : 5,
                              "render" : function(data, type, row){
                                var btn = "<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-sm\">EDIT</a> <a href=\"delete.php?id="+data+"\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Apakah Anda Mau Menghapus ?')\">HAPUS</a></center>"
                                return btn;
                              }
                            }
                          ]
                      } );
                  } );
                </script>


              </div>
            </div>
          </div>

        </div>

      </div>
      <!-- End of Main Content -->


<?php require_once '../templates/footer.php'; ?>