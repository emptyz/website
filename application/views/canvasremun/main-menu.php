<!-- Header
                ============================================= -->
<header id="header" class="full-header menucolor dark">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="<?php echo base_url(); ?>" class="standard-logo" data-dark-logo="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/hitam.png"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/hitam.png" alt="UPSDM | Remunerasi"></a>
                <a href="<?php echo base_url(); ?>" class="retina-logo" data-dark-logo="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/hitam.png"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/hitam.png" alt="UPSDM | Remunerasi"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="">

                <ul>
                    <?php
                    if ($this->session->islogin) {
                        echo "  <li><a href='".base_url()."'>Beranda</i></a>
                                <li><a href='http://remunerasi.uns.ac.id/35' target='_blank'>Pegawai</i></a>
                                <li><a href='http://remunerasi.uns.ac.id/63' target='_blank'>Kinerja </i></a></li>
                                <li><a href='http://remunerasi.uns.ac.id/65' target='_blank'>Perhitungan </i></a></li>
                                <li><a href='http://remunerasi.uns.ac.id/64' target='_blank'>Nilai Perilaku </i></a></li>
                                <li><a href='http://remunerasi.uns.ac.id/100' target='_blank'>Survei </i></a></li>
                                <li><a href='#' target='_blank'>Portal</i></a>
                                <ul>";
                        $botm = $this->model_utama->mainmenu();
                        foreach ($botm->result_array() as $row) {
                            $dropdown = $this->model_utama->submenu($row['id_main'])->num_rows();
                            if ($dropdown == 0) {
                                echo "<li><a href='" . base_url() . "$row[link]'> $row[nama_menu]</a></li>";
                            } else {
                                echo "
                            <li>
                            <a href='" . base_url() . "$row[link]'> $row[nama_menu] 
                            <span class='caret'></span></a>
                            <ul>";
                                $dropmenu = $this->model_utama->submenu($row['id_main']);
                                foreach ($dropmenu->result_array() as $row) {
                                    $dropdown1 = $this->model_utama->submenu1($row['id_sub'])->num_rows();
                                    if ($dropdown1 == 0) {
                                        if (preg_match("/^http/", $row['link_sub'])) {
                                            echo "<li><a href='$row[link_sub]'>$row[nama_sub]</a></li>";
                                        } else {
                                            echo "<li><a href='" . base_url() . "$row[link_sub]'>$row[nama_sub]</a></li>";
                                        }
                                    } else {
                                        echo "<li>
                                          <a href='" . base_url() . "$row[link_sub]'> $row[nama_sub] </a>
                                          <ul>";
                                        $dropmenu1 = $this->model_utama->submenu1($row['id_sub']);
                                        foreach ($dropmenu1->result_array() as $row) {
                                            $dropdown2 = $this->model_utama->submenu1($row['id_sub'])->num_rows();
                                            if ($dropdown2 == 0) {
                                                if (preg_match("/^http/", $row['link_sub'])) {
                                                    echo "<li><a tabindex='-1' href='$row[link_sub]'>$row[nama_sub]</a></li>";
                                                } else {
                                                    echo "<li><a tabindex='-1' href='" . base_url() . "$row[link_sub]'>$row[nama_sub]</a></li>";
                                                }
                                            } else {
                                                echo "<li class='dropdown-submenu'>
                                                          <a href='" . base_url() . "$row[link_sub]'> $row[nama_sub] </a>
                                                          <ul class='dropdown-menu'>";
                                                $dropmenu2 = $this->model_utama->submenu1($row['id_sub']);
                                                foreach ($dropmenu2->result_array() as $row) {
                                                    if (preg_match("/^http/", $row['link_sub'])) {
                                                        echo "<li><a tabindex='-1' href='$row[link_sub]'>$row[nama_sub]</a></li>";
                                                    } else {
                                                        echo "<li><a tabindex='-1' href='" . base_url() . "$row[link_sub]'>$row[nama_sub]</a></li>";
                                                    }
                                                }
                                                echo "</ul></li>";
                                            }
                                        }
                                        echo "</ul></li>";
                                    }
                                }
                                echo "</ul>
                          </li>";
                            }
                        }
                        $admin = ($this->session->level != "");
                        if ($admin){
                            echo "<li><a href='" . base_url() . "administrator'>Admin Panel</li>";
                        }

                        echo "<li><a href='" . base_url() . "administrator/logout'>Logout <i class='icon-arrow-right2'></i></a></li>
                                </ul>
                              </li>";
                    } else {
                        echo "<li><a href='".base_url()."'>Beranda</i></a>";
                        $botm = $this->model_utama->mainmenu();
                        foreach ($botm->result_array() as $row) {
                            $dropdown = $this->model_utama->submenu($row['id_main'])->num_rows();
                            if ($dropdown == 0) {
                                echo "<li><a href='" . base_url() . "$row[link]'> $row[nama_menu]</a></li>";
                            } else {
                                echo "
                          <li>
                            <a href='" . base_url() . "$row[link]'> $row[nama_menu] 
                            <span class='caret'></span></a>
                            <ul>";
                                $dropmenu = $this->model_utama->submenu($row['id_main']);
                                foreach ($dropmenu->result_array() as $row) {
                                    $dropdown1 = $this->model_utama->submenu1($row['id_sub'])->num_rows();
                                    if ($dropdown1 == 0) {
                                        if (preg_match("/^http/", $row['link_sub'])) {
                                            echo "<li><a href='$row[link_sub]'>$row[nama_sub]</a></li>";
                                        } else {
                                            echo "<li><a href='" . base_url() . "$row[link_sub]'>$row[nama_sub]</a></li>";
                                        }
                                    } else {
                                        echo "<li>
                                          <a href='" . base_url() . "$row[link_sub]'> $row[nama_sub] </a>
                                          <ul>";
                                        $dropmenu1 = $this->model_utama->submenu1($row['id_sub']);
                                        foreach ($dropmenu1->result_array() as $row) {
                                            $dropdown2 = $this->model_utama->submenu1($row['id_sub'])->num_rows();
                                            if ($dropdown2 == 0) {
                                                if (preg_match("/^http/", $row['link_sub'])) {
                                                    echo "<li><a tabindex='-1' href='$row[link_sub]'>$row[nama_sub]</a></li>";
                                                } else {
                                                    echo "<li><a tabindex='-1' href='" . base_url() . "$row[link_sub]'>$row[nama_sub]</a></li>";
                                                }
                                            } else {
                                                echo "<li class='dropdown-submenu'>
                                                          <a href='" . base_url() . "$row[link_sub]'> $row[nama_sub] </a>
                                                          <ul class='dropdown-menu'>";
                                                $dropmenu2 = $this->model_utama->submenu1($row['id_sub']);
                                                foreach ($dropmenu2->result_array() as $row) {
                                                    if (preg_match("/^http/", $row['link_sub'])) {
                                                        echo "<li><a tabindex='-1' href='$row[link_sub]'>$row[nama_sub]</a></li>";
                                                    } else {
                                                        echo "<li><a tabindex='-1' href='" . base_url() . "$row[link_sub]'>$row[nama_sub]</a></li>";
                                                    }
                                                }
                                                echo "</ul></li>";
                                            }
                                        }
                                        echo "</ul></li>";
                                    }
                                }
                                echo "</ul>
                          </li>";
                            }
                        }
                        echo "<li><a href='#modal-login-form' data-lightbox='inline' class='header-login-trigger'>Login Remunerasi <i class='icon-line2-login'></i></a></li";
                    }
                    ?>

                </ul>


                <!-- Top Search
                ============================================= -->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="<?php echo base_url() . 'berita/cari'; ?>" method="post">
                        <input type="text" name="cari" class="form-control" value="" placeholder="Masukkan kata kunci &amp; Tekan Enter..">
                    </form>
                </div><!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->

<div class="container clearfix">

    <div class="modal1 mfp-hide" id="modal-login-form">
        <div class="block divcenter col-padding" style="background-color: #FFF; max-width: 400px;">
            <h4 class="uppercase ls1">Login Remunerasi</h4>
            <form action="<?php echo base_url(); ?>auth/login"  method="post" class="nobottommargin clearfix" style="max-width: 300px;">
                <div class="col_full">
                    <label for="" class="capitalize t600">Username:</label>
                    <input type="text" id="template-op-form-email" name="a" value="" class="sm-form-control" />
                </div>
                <div class="col_full">
                    <label for="" class="capitalize t600">Password:</label>
                    <input type="password" id="template-op-form-password" name="b" value="" class="sm-form-control" />
                </div>
                <div class="col_full nobottommargin">
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" name="submit" class="button button-rounded button-small button-dark nomargin" value="submit">Login</button>
                        </div>
                        <div class="col-6">
                            <p class="nobottommargin tright"><small class="t300"><em><a href="#">Forgot Password?</a></em></small></p>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <hr>
                    <h4 style="margin-bottom: 15px;">Atau login dengan:</h4>
                    <a href="#" class="button button-rounded si-facebook si-colored">SSO UNS</a>
                </div>
            </form>
        </div>
    </div>

</div>





