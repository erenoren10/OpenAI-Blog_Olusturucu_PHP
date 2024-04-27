<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: black;">
  <!-- Brand Logo -->
  <a href="<?= SITE ?>" class="brand-link">
    <img src="<?= SITE ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">Yönetim Paneli</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">

    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="./" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              ANASAYFA
            </p>
          </a>
        </li>
        <!--<li class="nav-item">
          <a href="<?= SITE ?>modul-ekle" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Modül Ekle/Sil

            </p>
          </a>
        </li>-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Blog Yönetimi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= SITE ?>blog-ekle" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Blog Ekle
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= SITE ?>blog-listele" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Blogları Listele
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pencil-alt"></i>
            <p>
              Makale Yönetimi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= SITE ?>kuyruk-olustur" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Makale Oluştur
                </p>
              </a>
            </li>
            <!--<li class="nav-item">
              <a href="<?= SITE ?>kuyruk-listele" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Kuyrukları Listele
                </p>
              </a>
            </li>-->
          </ul>
        </li>
        <!--<li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Modüller
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <?php
            $moduller = $VT->VeriGetir("moduller", "WHERE durum=?", array(1), "ORDER BY ID ASC");
            if ($moduller != false) {
              for ($i = 0; $i < count($moduller); $i++) {
                ?>
                <li class="nav-item">
                  <a href="<?= SITE ?>liste/<?= $moduller[$i]["tablo"] ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      <?= $moduller[$i]["baslik"] ?>
                    </p>
                  </a>
                </li>
                <?php
              }
            }
            ?>
          </ul>
        </li>-->
        <li class="nav-item">
          <a href="<?= SITE ?>kategori-listele" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Kategoriler
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= SITE ?>seo-ayarlari" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Makale Yönetimi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= SITE ?>seo-ayarlari" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Seo Ayarları
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= SITE ?>iletisim-ayarlari" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              İletişim Ayarları
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= SITE ?>cikis" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Çıkış Yap
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../" class="nav-link">
            <i class="fas fa-arrow-left"> </i>
            <p>
              SİTEYE DÖN

            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>