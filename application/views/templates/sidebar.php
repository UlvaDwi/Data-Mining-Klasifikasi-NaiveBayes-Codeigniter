<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="<?= base_url() ?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light"> Klasifikasi Kelayakan </span><br>
    <span class="brand-text font-weight-light"> Penerima Beras Rastra </span>
  </a><br>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>assets/dist/img/ulva.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Ulva Dwi Mariyani </a>
        <a href="#" class="d-block">170403020039 </a>

      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       <li class="nav-item has-treeview menu-open">
        <a href="<?= base_url() ?>DataChart" class="nav-link active">
          <i class="nav-icon fas fa-landmark"></i>
          <p>
          Home</i>
        </p>
      </a>
    </li>
    <!-- Data Training -->
    <li class="nav-item">
      <a href="<?= base_url() ?>DataTraining" class="nav-link ">
        <i class="fas fa-copy"></i>
        <p>
          Data Training
        </p>
      </a>
    </li>
    <!-- Data Training  -->

    <!-- Data Uji -->
    <li class="nav-item">
      <a href="<?= base_url() ?>DataUji" class="nav-link">
        <i class="fas fa-clipboard"></i>
        <p>
          Data Uji
        </p>
      </a>
    </li>
    <!-- Data Uji  -->
    
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>