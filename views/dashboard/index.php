<?php 
	$title = 'Dashboard Rumah Sakit';
	require_once '../templates/header.php';
 ?>

<!-- Begin Page Content -->
        <div class="container-fluid">
         <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
          	<p>Selamat datang <?= $_SESSION['user']; ?> di website rumah sakit (Rekam Medis)</p>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->






<?php 
	require_once '../templates/footer.php';

 ?>