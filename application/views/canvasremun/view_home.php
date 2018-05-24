

<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">

    <div class="slider-parallax-inner">

        <div class="swiper-container swiper-parent d-sm-block">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('<?php echo base_url(); ?>template/<?php echo template(); ?>/images/slider/full/rektorat.jpg');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center ">
                            <div class="transbox rounded">
                                <h2 data-caption-animate="fadeInUp">UPSDM <span>Remunerasi</span></h2></div>
                                <?php
                                if ($this->session->islogin) {
                                    echo "<div class='transbox rounded'><p class='d-none d-sm-block' data-caption-animate='fadeInUp' data-caption-delay='200'>Selamat datang " . $this->session->nama . " di website Unit Pengembangan SDM Manusia dan Remunerasi</p></div>";
                                } else {

                                    echo "<div class='transbox rounded'><p class='d-none d-sm-block' data-caption-animate='fadeInUp' data-caption-delay='200'>Selamat datang di website Unit Pengembangan SDM Manusia dan Remunerasi</p></div>";
                                    echo "<a href='#modal-login-form' data-lightbox='inline' data-caption-animate='fadeInUp' data-caption-delay='200' class='button button-rounded button-reveal button-large button-blue tright nomargin'><span>Login Remunerasi</span> <i class='icon-line2-login'></i></a>";
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <!--<div class="swiper-slide" style="background-image: url('<?php //echo base_url();  ?>template/<?php //echo template();  ?>/images/slider/swiper/3.jpg'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                            <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                        </div>
                    </div>
                </div>-->
            </div>
            <!--<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>-->
        </div>

    </div>
    <a href="#" data-scrollto="#remunerasi" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
</section>





<!-- Content
============================================= -->
<section id="content">
    <div class="bgcolor light">
        <div class="content-wrap">


            <!-- Pembayaran Remunerasi
    ============================================= -->
            <div class="container clearfix  contentcolor rounded">
                <div id="remunerasi" class="fancy-title title-center title-dotted-border">
                    <h2>Remunerasi</h2>
                </div>

                <div class="row ">
                    <div class="col-lg-6 col-md-6">
                        <div id="home-recent-news">
                            <?php
                            $berita = $this->model_utama->berita_sdm_satu();
                            foreach ($berita->result_array() as $row):
                                $isi_berita = strip_tags($row['isi_berita']);
                                $isi = substr($isi_berita, 0, 180);
                                $isi = substr($isi_berita, 0, strrpos($isi, " "));
                                $tanggal = tgl_indo($row['tanggal']);
                                ?>
                                <div id="posts" class="small-thumbs">
                                    <div class="entry clearfix">
                                        <!-- Entry Image
                                        ============================================= -->
                                        <div class="entry-image">
                                            <?php
                                            if ($row['gambar'] != '') {
                                                echo "<a href='" . base_url() . "asset/foto_berita/" . $row['gambar'] . "' data-lightbox='image'><img class='image_fade' src='" . base_url() . "asset/foto_berita/" . $row['gambar'] . "'></a>";
                                            }
                                            ?>
                                        </div><!-- .entry-image end -->
                                        <div class="entry-title">
                                            <h2><?php
                                                echo "<a href='" . base_url() . "berita/detail/$row[judul_seo]'>";
                                                echo $row['judul'];
                                                ?></a></h2>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> <?php echo $tanggal; ?></li>
                                            <li><?php echo "<a href='" . base_url() . "berita/kategori/$row[kategori_seo]'><i class='icon-book'></i>$row[nama_kategori]</a>" ?></li>
                                            <li><i class="icon-user"></i> <?php echo $row['nama_pegawai']; ?></li>

                                        </ul>
                                        <div class="entry-content">
                                            <p><?php
                                                echo $isi . '...<br>';
                                                echo "<a href='" . base_url() . "berita/detail/$row[judul_seo]'>Baca Selengkapnya..</a>";
                                                ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                            ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div id="home-recent-news">
                            <?php
                            $no = 1;
                            $berita = $this->model_utama->list_berita(33, 4);
                            foreach ($berita->result_array() as $row):
                                if ($no != 1) {
                                    $isi_berita = strip_tags($row['isi_berita']);
                                    $isi = substr($isi_berita, 0, 180);
                                    $isi = substr($isi_berita, 0, strrpos($isi, " "));
                                    $tanggal = tgl_indo($row['tanggal']);
                                    ?>
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><?php
                                                    echo "<a href='" . base_url() . "berita/detail/$row[judul_seo]'>";
                                                    echo $row['judul'];
                                                    ?></a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li><i class="icon-calendar3"></i> <?php echo $tanggal; ?></li>
                                                <li><?php echo "<a href='" . base_url() . "berita/kategori/$row[kategori_seo]'><i class='icon-book'></i>$row[nama_kategori]</a>" ?></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                }
                                $no++;
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="divider divider-short divider-center"></div>

                <!-- Pagination
                ============================================= -->
                <?php echo "<a href='" . base_url() . "berita/kategori/remunerasi' class='button button-rounded button-reveal button-large button-dark tright float-right'><i class='icon-line-arrow-right'></i><span>Remunerasi Selengkapnya</span></a>" ?>
                <!-- .pager end -->
                <a href="#" data-scrollto="#kinerja" class="one-page-arrow "><i class="icon-angle-down infinite animated fadeInDown"></i></a>

            </div><!-- Pengembangan SDM end -->
            

            <!-- Kinerja Remunerasi
            ============================================= -->
            <div class="container clearfix contentcolor">
                <div id="kinerja" class="fancy-title title-center title-dotted-border ">
                    <h2>Kinerja</h2>
                </div>
                <div class="tabs clearfix tabs-justify" id="tab-3">

                    <ul class="tab-nav tab-nav2 clearfix">
                        <li><a href="#tabs-9"><i class="icon-graph"></i> Agustus - Januari</a></li>
                        <li><a href="#tabs-10"><i class="icon-graph"></i> Februari - Juli</a></li>
                    </ul>

                    <div class="tab-container">

                        <div class="tab-content clearfix" id="tabs-9">

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h3>Tenaga Pendidik</h3>
                                    <ul class="skills">
                                        <li data-percent="80">
                                            <span>Fakultas Ilmu Budaya</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="60">
                                            <span>Fakultas Hukum</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="90">
                                            <span>Fakultas Ilmu Sosial dan Politik</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="70">
                                            <span>Fakultas Keguruan dan Ilmu Pendidikan</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="80">
                                            <span>Fakultas Ekonomi dan Bisnis</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="60">
                                            <span>Fakultas Teknik</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="90">
                                            <span>Fakultas Kedokteran</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="70">
                                            <span>Fakultas Pertanian</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="90">
                                            <span>Fakultas Matematika dan Ilmu Pengetahuan Alam</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="90">
                                            <span>Fakultas Seni Rupa dan Desain</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="96">
                                            <span>Pasca Sarjana</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="96" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-lg-6 col-md-6">

                                    <h3>Tenaga Kependidikan</h3>
                                    <div class="row">
                                        <div class="col-lg-6 center nobottommargin">
                                            <div class="rounded-skill nobottommargin" data-color="#3F729B" data-size="100" data-percent="85" data-width="3" data-speed="2500">
                                                <div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="2000"></span>%</div>
                                            </div>
                                            <h4>Bidang Akademik</h4>
                                        </div>
                                        <div class="col-lg-6 center nobottommargin">
                                            <div class="rounded-skill nobottommargin" data-color="#3F729B" data-size="100" data-percent="85" data-width="3" data-speed="2500">
                                                <div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="2000"></span>%</div>
                                            </div>
                                            <h4>Bidang Umum dan Keuangan</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 center nobottommargin">
                                            <div class="rounded-skill nobottommargin" data-color="#3F729B" data-size="100" data-percent="85" data-width="3" data-speed="2500">
                                                <div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="2000"></span>%</div>
                                            </div>
                                            <h4>Bidang Kemahasiswaan dan Alumni</h4>
                                        </div>
                                        <div class="col-lg-6 center nobottommargin">
                                            <div class="rounded-skill nobottommargin" data-color="#3F729B" data-size="100" data-percent="85" data-width="3" data-speed="2500">
                                                <div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="2000"></span>%</div>
                                            </div>
                                            <h4>Bidang Perencanaan dan Kerjasama</h4>
                                        </div>
                                    </div>
                                    <div class="divider divider-short divider-center"></div>
                                    <!-- Pagination
                                    ============================================= -->
                                    <?php echo "<a href='" . base_url() . "berita/kategori/kinerja-remunerasi' class='button button-rounded button-reveal button-large button-dark tright float-right'><i class='icon-line-arrow-right'></i><span>Kinerja Selengkapnya</span></a>" ?>
                                    <!-- .pager end -->

                                </div>

                            </div>

                        </div>
                        <div class="tab-content clearfix" id="tabs-10">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h3>Tenaga Pendidik</h3>
                                    <ul class="skills">
                                        <li data-percent="80">
                                            <span>Fakultas Ilmu Budaya</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="60">
                                            <span>Fakultas Hukum</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="90">
                                            <span>Fakultas Ilmu Sosial dan Politik</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="70">
                                            <span>Fakultas Keguruan dan Ilmu Pendidikan</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="80">
                                            <span>Fakultas Ekonomi dan Bisnis</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="60">
                                            <span>Fakultas Teknik</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="90">
                                            <span>Fakultas Kedokteran</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="70">
                                            <span>Fakultas Pertanian</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="90">
                                            <span>Fakultas Matematika dan Ilmu Pengetahuan Alam</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="90">
                                            <span>Fakultas Seni Rupa dan Desain</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                        <li data-percent="96">
                                            <span>Pasca Sarjana</span>
                                            <div class="progress">
                                                <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="96" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                                <div class="col-lg-6 col-md-6">

                                    <h3>Tenaga Kependidikan</h3>
                                    <div class="row">
                                        <div class="col-lg-6 center nobottommargin">
                                            <div class="rounded-skill nobottommargin" data-color="#3F729B" data-size="100" data-percent="85" data-width="3" data-speed="2500">
                                                <div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="2000"></span>%</div>
                                            </div>
                                            <h4>Bidang Akademik</h4>
                                        </div>
                                        <div class="col-lg-6 center nobottommargin">
                                            <div class="rounded-skill nobottommargin" data-color="#3F729B" data-size="100" data-percent="85" data-width="3" data-speed="2500">
                                                <div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="2000"></span>%</div>
                                            </div>
                                            <h4>Bidang Umum dan Keuangan</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 center nobottommargin">
                                            <div class="rounded-skill nobottommargin" data-color="#3F729B" data-size="100" data-percent="85" data-width="3" data-speed="2500">
                                                <div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="2000"></span>%</div>
                                            </div>
                                            <h4>Bidang Kemahasiswaan dan Alumni</h4>
                                        </div>
                                        <div class="col-lg-6 center nobottommargin">
                                            <div class="rounded-skill nobottommargin" data-color="#3F729B" data-size="100" data-percent="85" data-width="3" data-speed="2500">
                                                <div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="2000"></span>%</div>
                                            </div>
                                            <h4>Bidang Perencanaan dan Kerjasama</h4>
                                        </div>
                                    </div>

                                    <div class="divider divider-short divider-center"></div>
                                    <!-- Pagination
                                    ============================================= -->
                                    <?php echo "<a href='" . base_url() . "berita/kategori/kinerja' class='button button-rounded button-reveal button-large button-white button-light tright float-right'><i class='icon-line-arrow-right'></i><span>Kinerja Selengkapnya</span></a>" ?>
                                    <!-- .pager end -->

                                </div>

                            </div>


                        </div>

                    </div>

                </div>
                <a href="#" data-scrollto="#sdm" class="one-page-arrow "><i class="icon-angle-down infinite animated fadeInDown"></i></a>

            </div><!-- Kinerja Remunerasi end -->


            <div class="clear"></div>


            <!-- Pengembangan SDM
                  ============================================= -->
            <div class="container clearfix contentcolor contentcolor">
                <div id="sdm" class="fancy-title title-center title-dotted-border">
                    <h2>Pengembangan SDM</h2>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!-- Posts
                        ============================================= -->
                        <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget bg-blue"  data-margin="20" data-nav="true" data-pagi="false" data-items-md="1" data-items-lg="3" data-items-xl="3">

                            <?php
                            $berita = $this->model_utama->list_berita(31, 6);
                            foreach ($berita->result_array() as $row):
                                $isi_berita = strip_tags($row['isi_berita']);
                                $isi = substr($isi_berita, 0, 180);
                                $isi = substr($isi_berita, 0, strrpos($isi, " "));
                                $tanggal = tgl_indo($row['tanggal']);
                                ?>
                                <div class="oc-item">
                                    <div class="ipost clearfix">
                                        <!-- Entry Image
                                        ============================================= -->
                                        <div class="entry-image">
                                            <?php
                                            if ($row['gambar'] != '') {
                                                echo "<a href='" . base_url() . "asset/foto_berita/" . $row['gambar'] . "' data-lightbox='image'><img class='image_fade' src='" . base_url() . "asset/foto_berita/" . $row['gambar'] . "'></a>";
                                            }
                                            ?>
                                        </div><!-- .entry-image end -->
                                        <div class="entry-title">
                                            <h3><?php
                                                echo "<a href='" . base_url() . "berita/detail/$row[judul_seo]'>";
                                                echo $row['judul'];
                                                ?></a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> <?php echo $tanggal; ?></li>
                                            <li><?php echo "<a href='" . base_url() . "berita/kategori/$row[kategori_seo]'><i class='icon-book'></i>$row[nama_kategori]</a>" ?></a></li>
                                        </ul>
                                        <div class="entry-content">
                                            <p><?php echo $isi; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                            ?>



                        </div><!-- #posts end -->
                    </div>
                </div>


                <div class="center">
                    <?php echo "<a href='" . base_url() . "berita/kategori/pengembangan-sdm' class='button button-rounded button-reveal button-large  button-dark tright float-right'><i class='icon-line-arrow-right'></i><span>Pengembangan SDM Selengkapnya</span></a>" ?>
                </div>
                <!-- Pagination
                ============================================= -->
                <!-- .pager end -->

            </div><!-- Pembayaran Remunerasi end -->



            <!-- FAQ dan agenda
                  ============================================= -->
            <div class="container clearfix contentcolor contentcolor">

                <div class="divider divider-center"><i class="icon-cloud"></i></div>
                <!-- Post Content
                ============================================= -->
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="title-block">
                            <h4>Frequently Asked Questions</h4>
                            <span>Beberapa pertanyaan mengenai UPSDM dan Remunerasi</span>
                        </div>
                        <ul id="portfolio-filter" class="portfolio-filter clearfix">

                            <li class="activeFilter"><a href="#" data-filter="all">Semua</a></li>
                            <li><a href="#" data-filter=".remunerasi">Pembayaran Remunerasi</a></li>
                            <li><a href="#" data-filter=".kinerja">Kinerja Remunerasi</a></li>
                            <li><a href="#" data-filter=".pengembangan-sdm">Pengembangan SDM</a></li>

                        </ul>

                        <div class="clear"></div>

                        <div id="faqs" class="faqs">
                            <?php
                            $faq = $this->model_faq->list_faq();
                            foreach ($faq->result_array() as $row):
                                ?>

                                <div class="toggle faq <?php echo $row['kategori_seo'] ?>">
                                    <div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-chat-3"></i><?php echo $row['judul'] ?>?</div>
                                    <div class="togglec"><?php echo $row['kategori_seo'] ?></div>
                                </div>

                            <?php endforeach; ?>


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="title-block">
                            <h4>Agenda</h4>
                            <span>Agenda Kegiatan UPSDM dan Remunerasi</span>
                        </div>

                        <div id="posts" class="events">
                            <?php
                            $agenda = $this->model_utama->agenda_hari_ini(1);
                            foreach ($agenda->result_array() as $record) {
                                $isi_berita = strip_tags($record['isi_agenda']);
                                ?>

                                <div class="entry clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><?php echo "<a href= '" . base_url() . "agenda/detail/$record[tema_seo]'><b>$record[tema]</b></a>"; ?></h4>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <?php
                                            $current = strtotime(date("Y-m-d"));
                                            $date = strtotime($record['tgl_mulai']);

                                            $datediff = $date - $current;
                                            $difference = floor($datediff / (60 * 60 * 24));
                                            if ($difference == 0) {
                                                echo '<li><span class="badge badge-success">Hari Ini</span></li>';
                                            } else if ($difference > 1) {
                                                echo '<li><span class="badge badge-info">Akan datang</span></li>';
                                            } else if ($difference > 0) {
                                                echo '<li><span class="badge badge-warning">Besok</span></li>';
                                            } else if ($difference < -1) {
                                                echo '<li><span class="badge badge-danger">Telah Berlalu</span></li>';
                                            } else {
                                                echo '<li><span class="badge badge-danger">Kemarin</span></li>';
                                            }
                                            ?>

                                            <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $record['tempat']; ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php echo "<a href='" . base_url() . "agenda' class='button button-rounded button-reveal button-large button-dark tright float-right'><i class='icon-line-arrow-right'></i><span>Semua Agenda</span></a>" ?>
                                <?php
                            }
                            ?>

                        </div>



                    </div>


                </div>
                <!-- .postcontent end -->
            </div><!-- FAQ dan agenda end -->


        </div>
    </div>

</section><!-- #content end -->

