
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('views/dashboard/index.php') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rumah Sakit</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('views/dashboard/index.php') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>


      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('views/pasien/data.php') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pasien</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('views/dokter/data.php') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Dokter</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('views/poliklinik/data.php') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Poliklinik</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('views/obat/data.php') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Obat</span></a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('views/rekam_medis/data.php') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Rekam Medis</span></a>
      </li>
  

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">      
    
    <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
