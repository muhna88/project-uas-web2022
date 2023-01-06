<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4"  style ="margin-bottom: 0px;
    padding: 0px;
    background: url(img/bg8.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    height: 75vh;
">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MY NEWS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php?include=profil" class="nav-link">
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/imamsnbq.json"
    trigger="hover"
    style="width:25px;height:25px">
</lord-icon>
              <p style="color:black;">
                My Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=berita" class="nav-link">
<script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/nocovwne.json"
    trigger="hover"
    style="width:25px;height:25px">
</lord-icon>
              <p style="color:black;">
                Berita
              </p>
            </a>
          </li>
          <?php 
if (isset($_SESSION['level'])){
  if ($_SESSION['level']=="Superadmin"){?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/jvucoldz.json"
    trigger="hover"
    style="width:25px;height:25px">
</lord-icon>
              <p style="color:black;">
                 Kategori
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?include=entertainment" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:black;">Entertainment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=business" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:black;">Business</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=travel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:black;">Travel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=lifestyle" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:black;">Lifestyle</p>
                </a>
              </li>
            </ul>
          </li>
          <?php }}?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/gqdnbnwt.json"
    trigger="hover"
    style="width:25px;height:25px">
</lord-icon>
              <p style="color:black;">
                 Konten
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?include=konten" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:black;">About us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=founders" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:black;">Founders</p>
                </a>
              </li>
            </ul>
          </li>
          
         
          <?php 
if (isset($_SESSION['level'])){
  if ($_SESSION['level']=="Superadmin"){?>
          <li class="nav-item">
            <a href="index.php?include=user" class="nav-link">
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/sbiheqdr.json"
    trigger="hover"
    colors="primary:#109173,secondary:#000000"
    style="width:25px;height:25px">
</lord-icon>
<p style="color:black;">
                Pengaturan User
              </p>
            </a>
          </li>
          <?php }}?>
          <!-- <li class="nav-item">
            <a href="index.php?include=ubah-password" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Ubah Password
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="index.php?include=signout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>