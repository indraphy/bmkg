  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('home') ?>" class="brand-link">
      <img src="<?= base_url() ?>/gambar/Logo_BMKG.png" alt="AdminLTE Logo" class="brand-image " style="opacity: .8; background-color:white;">
      <span class="brand-text font-weight-light"><strong>SIPSI</strong></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Abi Luthfi</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" >
          <li class="nav-item">
            <a href="<?= base_url('home') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-header">ARSIP</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Surat Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Surat Keluar
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('kategori') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                User
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Buat Surat</p>
            </a>
          </li>
          <div class="user-panel pb-3 mb-3 d-flex"></div>
          <li class="nav-item">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p class="text">Keluar</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
