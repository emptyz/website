<section id="page-title" class="page-title-mini">

    <div class="container clearfix">
        <h1><?php echo $title; ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo "Pencarian"; ?></li>
        </ol>
    </div>

</section><!-- #page-title end -->

<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <!-- Posts
                                                                ============================================= -->
                <div id="posts">
                    <?php
                    $no = 1;
                    foreach ($pencarianberita->result_array() as $row) {
                        $isi_berita = strip_tags($row['isi_berita']);
                        $isi = substr($isi_berita, 0, 100);
                        $isi = substr($isi_berita, 0, strrpos($isi, " "));
                        $tanggal = tgl_indo($row['tanggal']);
                        $foto = $row['gambar'];
                        ?>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <?php
                                if ($foto != '') {
                                    echo "<a href='" . base_url() . "asset/foto_berita/" . $foto . "' data-lightbox='image'> <img class='image-fade' src='" . base_url() . "asset/foto_berita/" . $foto . "'></a>";
                                }
                                ?>

                            </div>
                            <div class="entry-title">
                                <h2><?php
                                    echo "<a href='" . base_url() . "berita/detail/$row[judul_seo]'>" . $row['judul'] . "</a>";
                                    ?></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo $tanggal; ?></li>
                                <li><?php echo "<a href='" . base_url() . "berita/kategori/$row[kategori_seo]'><i class='icon-book'></i>$row[nama_kategori]</a>" ?></a></li>
                                <li><i class="icon-user"></i> <?php echo $row['nama_lengkap']; ?></li>
                            </ul>
                            <div class="entry-content">
                                <p><?php
                                    echo $isi . '...<br>';
                                    echo "<a href='" . base_url() . "berita/detail/$row[judul_seo]'>Baca Selengkapnya..</a>";
                                    ?></p>
                            </div>
                        </div>

                        <?php
                        if ($no % 3 == 0) {
                            
                        }
                        $no++;
                    }
                    ?>

                </div><!-- #posts end -->

                <!-- Pagination
                ============================================= -->
                <div class="row mb-3">
                    <div class="col-12">
                        

                    </div>
                </div>
                <!-- .pager end -->

            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">


                    <div class="widget clearfix">

                        <div class="tabs tabs-justify nobottommargin clearfix" id="sidebar-tabs">

                            <ul class="tab-nav clearfix">
                                <li><a href="#tabs-1">Terbaru</a></li>
                                <li><a href="#tabs-2">Populer</a></li>
                            </ul>

                            <div class="tab-container">

                                <div class="tab-content clearfix" id="tabs-1">
                                    <div id="popular-post-list-sidebar">
                                        <?php
                                        $terbaru = $this->model_utama->terbaru();
                                        foreach ($terbaru->result_array() as $row):
                                            $tanggal = tgl_indo($row['tanggal']);
                                            ?>

                                            <div class="spost clearfix">

                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4>
                                                            <?php
                                                            echo "<a href='" . base_url() . "berita/detail/$row[judul_seo]'>";
                                                            echo $row['judul'];
                                                            ?></a>
                                                        </h4>
                                                    </div>
                                                    <ul class="entry-meta">

                                                        <li><i class="icon-calendar3"></i> <?php echo $tanggal; ?></li>
                                                        <li><?php echo "<a href='" . base_url() . "berita/kategori/$row[kategori_seo]'><i class='icon-book'></i>$row[nama_kategori]</a>" ?></li>

                                                    </ul>

                                                </div>


                                            </div>
                                            <?php
                                        endforeach;
                                        ?>
                                    </div>

                                </div>

                                <div class="tab-content clearfix" id="tabs-2">
                                    <div id="popular-post-list-sidebar">
                                        <?php
                                        $populer = $this->model_utama->populer();
                                        foreach ($populer->result_array() as $row):
                                            $tanggal = tgl_indo($row['tanggal']);
                                            ?>

                                            <div class="spost clearfix">


                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4>
                                                            <?php
                                                            echo "<a href='" . base_url() . "berita/detail/$row[judul_seo]'>";
                                                            echo $row['judul'];
                                                            ?></a>
                                                        </h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li><i class="icon-microphone2"></i> Dibaca <?php echo $row['dibaca']; ?>x</li>
                                                        <li><i class="icon-calendar3"></i> <?php echo $tanggal; ?></li>
                                                    </ul>

                                                </div>


                                            </div>
                                            <?php
                                        endforeach;
                                        ?>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="widget clearfix">

                        <h4>Jenis Berita</h4>
                        <div class="tagcloud">
                            <?php
                            $tag = $this->model_utama->ambiltag();
                            foreach ($tag->result_array() as $row):
                                ?>
                                <a href="#"><?php echo $row['tag_seo']; ?></a>
                                <?php
                            endforeach;
                            ?>
                        </div>

                    </div>

                </div>

            </div><!-- .sidebar end -->

        </div><!-- .content end -->



    </div>
</section><!-- #content wrapper end -->