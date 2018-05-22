<style type="text/css">
  .sekolah{
    float: left;
    background-color: transparent;
    background-image: none;
    padding: 15px 15px;
    font-family: fontAwesome;
    color:#fff;
  }

  .sekolah:hover{
    color:#fff;
  }
</style>
        <!-- Logo -->
        <?php echo "<a class='logo' href='".base_url(). "administrator'>"; ?>
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>UP</b>SDM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>UPSDM Remunerasi</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i> Pesan Baru
                  <span class="label label-success"><?php echo $this->model_hubungi->hitung_pesan_masuk()->num_rows(); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Anda memiliki <?php echo $this->model_hubungi->hitung_pesan_masuk()->num_rows(); ?> pesan baru.</li>
                  <li>
                    <ul class="menu">
                      <?php 
                        $pesan = $this->model_hubungi->pesan_baru(10);
                        foreach ($pesan->result_array() as $row) {
                          $isi_pesan = substr($row['pesan'],0,30);
                          $waktukirim = tgl_indo($row['tanggal']);
                          echo "<li>
                                  <a href='".base_url()."administrator/detail_pesanmasuk/$row[id_hubungi]'>
                                    <div class='pull-left'>
                                      <img src='".base_url()."asset/admin/dist/img/users.gif' class='img-circle img-thumbnail' alt='User Image'>
                                    </div>
                                    <h4>$row[nama]<small><i class='fa fa-clock-o'></i> $waktukirim</small></h4>
                                    <p>$isi_pesan...</p>
                                  </a>
                                </li>";
                        }
                      ?>
                    </ul>
                  </li>
                  <li class="footer"><a href="<?php echo base_url() ?>/administrator/pesanmasuk">Lihat Semua Pesan</a></li>
                </ul>
              </li>
              <li>
                <a target='_BLANK' href="<?php echo base_url(); ?>"><i class="glyphicon glyphicon-new-window"></i></a>
              </li>

            </ul>
          </div>
        </nav>