<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url ('admin/index')?>" class="site_title"><i class="fa fa-futbol-o"></i> <span>Gelora Futsal</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url ('assets/backend/images/profile/tifo.jpg')?> " alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>SELAMAT DATANG</span>
                <h2>ADMIN</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= base_url ('admin/index')?>"><i class="fa fa-home"></i> Home <span class=""></span></a>
                  
                </li>
                  <li><a href="<?= base_url ('admin/lapangan')?>"><i class="fa fa-desktop"></i> Lapangan <span class=""></span></a>

                </li>
                  <li><a href="<?= base_url ('admin/jadwal')?>"><i class="fa fa-table"></i> Jadwal <span class=""></span></a>

                </li>
                  <li><a href="<?= base_url ('admin/pelanggan')?>"><i class="fa fa-group"></i> Pelanggan <span class=""></span></a>

                </li>
                  <li><a href="<?= base_url ('admin/transaksi')?>"><i class="fa fa-university"></i> Transaksi <span class=""></span></a>

                <li><a><i class="fa fa-bar-chart-o"></i> Konfirmasi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                <li><a href="<?= base_url('admin/konfirmasi') ?>"><i class="fa fa-bar-chart-o"></i> Konfirmasi </a></li>
                <li><a href="<?= base_url('admin/selesai') ?>"><i class="fa fa-bar-chart-o"></i> Selesai </a></li>
                </ul>
                </li> 
                
              </div>

            </div>
             <!-- /menu footer buttons -->
             <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('auth/logout') ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>


