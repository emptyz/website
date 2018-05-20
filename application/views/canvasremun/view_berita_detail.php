<!-- Content
============================================= -->
<section id="content">
    <!-- Background COlor
    ============================================= -->
    <div class="bgcolor light">
        <div class="content-wrap ">

            <div class="container clearfix contentcolor rounded">

                <div class="single-post nobottommargin">

                    <?php
                    $tanggal = tgl_indo($record['tanggal']);
                    ?>

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            <h2><?php echo $record['judul']; ?></h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> <?php echo "$record[hari]", ", $tanggal", " $record[jam] WIB"; ?></li>
                            <li><i class="icon-user"></i> <?php echo $record['nama_pegawai']; ?></li>
                            <li><i class="icon-folder-open"></i> Dibaca <?php echo $record['dibaca'] ?>x</li>
                            <li><?php echo "<a href='" . base_url() . "berita/kategori/$record[kategori_seo]'><i class='icon-book'></i>$record[nama_kategori]</a>" ?></li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image">
                            <?php
                            if ($record['gambar'] != '') {
                                echo "<a href='" . base_url() . "asset/foto_berita/" . $record['gambar'] . "' data-lightbox='image'><img class='image_fade' src='" . base_url() . "asset/foto_berita/" . $record['gambar'] . "'></a>";
                            }
                            ?>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">

                            <p><?php echo $record['isi_berita']; ?></p>
                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud
                            ============================================= -->
                            <div class="tagcloud clearfix bottommargin">
                                <a href=""><?php echo $record['tag']; ?></a>
                            </div><!-- .tagcloud end -->

                            <div class="clear"></div>

                        </div>
                    </div><!-- .entry end -->

                    <h4>Berita Terkait:</h4>

                    <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget"  data-margin="20" data-nav="true" data-pagi="false" data-items-md="1" data-items-lg="3" data-items-xl="3">

                        <?php
                        $no = 1;
                        foreach ($infoterkait->result_array() as $row) {
                            $isi_berita = strip_tags($row['isi_berita']);
                            $isi = substr($isi_berita, 0, 150);
                            $isi = substr($isi_berita, 0, strrpos($isi, " "));
                            $tanggal = tgl_indo($row['tanggal']);
                            ?>
                            <div class="oc-item">
                                <div class="ipost clearfix">
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
                                </div>
                            </div>
                            <?php
                            if ($no % 3 == 0) {
                                
                            }
                            $no++;
                        }
                        ?>



                    </div><!-- #posts end -->


                </div>

            </div>

        </div><!-- #content end -->
    </div><!-- #background end -->


</div>

</section>