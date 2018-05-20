

<section id="slider" class="slider-element slider-parallax" style="background-color: #222;">

    <div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">

        <a href="#"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/slider/full/rektorat.jpg" alt="Slider"></a>


    </div>

</section>




<!-- Content
============================================= -->
<section id="content">
    <div class="bgcolor light">
        <div class="content-wrap">

            <!-- Pembayaran Remunerasi
                   ============================================= -->

            <div class="container clearfix contentcolor contentcolor">
                <div class="fancy-title title-center title-dotted-border topmargin">
                    <h3>Remunerasi</h3>
                </div>


                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <!-- Posts
                        ============================================= -->
                        <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget bg-blue"  data-margin="20" data-nav="true" data-pagi="false" data-items-md="1" data-items-lg="2" data-items-xl="2">

                            <?php
                            $berita = $this->model_utama->list_berita(33);
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
                    <div class="col-lg-4">
                        <div class="list-group">
                            <h4><a href="#" class="list-group-item list-group-item-action active">
                                    Menu Remunerasi
                                </a></h4>
                            <a href="http://remunerasi.uns.ac.id/35" class="list-group-item list-group-item-action">
                                <b>Pegawai</b>
                            </a>
                            <a href="http://remunerasi.uns.ac.id/63" class="list-group-item list-group-item-action"><b>Kinerja</b></a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Perhitungan</b></a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Nilai Perilaku</b></a>
                            <a href="#" class="list-group-item list-group-item-action"><b>Survei</b></a>
                        </div>

                    </div>


                </div>

                <div class="divider divider-center"></div>

                <div class="center">
                    <?php echo "<a href='" . base_url() . "berita/kategori/pembayaran-remunerasi' class='button button-rounded button-reveal button-large  button-dark tright float-right'><i class='icon-line-arrow-right'></i><span>Pembayaran Remunerasi Selengkapnya</span></a>" ?>
                </div>
                <!-- Pagination
                ============================================= -->
                <!-- .pager end -->

            </div><!-- Pembayaran Remunerasi end -->
            

            <!-- Kinerja Remunerasi
    ============================================= -->

            <div class="container clearfix contentcolor">
                <div class="fancy-title title-center title-dotted-border topmargin">
                    <h3>Kinerja</h3>
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
                                    <?php echo "<a href='" . base_url() . "berita/kategori/kinerja-remunerasi' class='button button-rounded button-reveal button-large button-dark tright float-right'><i class='icon-line-arrow-right'></i><span>Kinerja Remunerasi Selengkapnya</span></a>" ?>
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
                                    <?php echo "<a href='" . base_url() . "berita/kategori/kinerja-remunerasi' class='button button-rounded button-reveal button-large button-white button-light tright float-right'><i class='icon-line-arrow-right'></i><span>Kinerja Remunerasi Selengkapnya</span></a>" ?>
                                    <!-- .pager end -->

                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div><!-- Kinerja Remunerasi end -->
            

            <div class="clear"></div>
            <!-- Pengembangan SDM
    ============================================= -->
            <div class="container clearfix  contentcolor rounded">
                <div class="fancy-title title-center title-dotted-border">
                    <h3>Pengembangan SDM</h3>
                </div>
                <?php
                $berita = $this->model_utama->berita_sdm_satu();
                foreach ($berita->result_array() as $row):
                    $isi_berita = strip_tags($row['isi_berita']);
                    $isi = substr($isi_berita, 0, 180);
                    $isi = substr($isi_berita, 0, strrpos($isi, " "));
                    $tanggal = tgl_indo($row['tanggal']);
                    ?>
                    <div class="row ">
                        <div class="col-lg-6 col-md-6">
                            <div id="home-recent-news">
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
                            $berita = $this->model_utama->list_berita(31);
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


                <!-- Pagination
    ============================================= -->
                <?php echo "<a href='" . base_url() . "berita/kategori/pengembangan-sdm' class='button button-rounded button-reveal button-large button-dark tright float-right'><i class='icon-line-arrow-right'></i><span>Pengembangan SDM Selengkapnya</span></a>" ?>
                <!-- .pager end -->

            </div><!-- Pengembangan SDM end -->


        </div>
    </div>

</section><!-- #content end -->

