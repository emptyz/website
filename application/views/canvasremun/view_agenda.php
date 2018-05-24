<section id="page-title" class="page-title-mini">

    <div class="container clearfix">
        <h1>Agenda UPSDM dan Remunerasi</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agenda</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<section id="content">

    <div class="content-wrap">	
        <div class="container clearfix">
            <!-- #conten start -->
            <div class="container clearfix">

                <div class="postcontent ">

                    <div id="posts" class="events">
                        <?php
                        foreach ($agenda->result_array() as $record) {
                            $isi_berita = strip_tags($record['isi_agenda']);
                            $isi = substr($isi_berita, 0, 120);
                            $isi = substr($isi_berita, 0, strrpos($isi, " "));
                            $tgl1 = tgl_indo($record['tgl_mulai']);
                            $tgl2 = tgl_indo($record['tgl_selesai']);
                            $tgl_posting = tgl_indo_bulan($record['tgl_posting']);
                            ?>

                            <div class="entry clearfix">
                                <!--                                <div class="entry-image">
                                                                    <a href="#">
                                                                        <img src="images/events/thumbs/1.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
                                                                        <div class="entry-date"><?php // echo $tgl_posting;  ?></div>
                                                                    </a>
                                                                </div>-->
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><?php echo "<a href= '" . base_url() . "agenda/detail/$record[tema_seo]'><b>$record[tema]</b></a>"; ?></h2>
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
                                        
                                        <li><i class="icon-calendar-1"></i><?php echo $tgl1 . " s/d " . $tgl2 ?></li>
                                        <li><i class="icon-time"></i><?php echo $record['jam']; ?></li>
                                        <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $record['tempat']; ?></a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p><?php echo $record['isi_agenda'] ?></p>
                                        <a class="btn btn-warning" href="#">Pengirim</a><?php echo "<a class='btn btn-info' href= '#'>$record[pengirim]" ?></a>
                                    </div>
                                </div>
                            </div>
    <?php
}
?>

                    </div>

                    <!-- Pagination
                    ============================================= -->
                    <div class="row mb-3">
                        <div class="col-12">
                        <?php
                        foreach ($links as $link) {
                            echo "<ul class='pagination'><li class='page-item'>" . $link . "</li></ul>";
                        }
                        ?>
                        </div>
                    </div>
                    <!-- .pager end -->

                </div>

                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget clearfix">

                            <h4>Agenda Terbaru</h4>
                            <div id="post-list-footer">
                                <?php
                                $agenda_sidebar = $this->model_utama->agenda_hari_ini(5);
                                foreach ($agenda_sidebar->result_array() as $row) {
                                $isi_berita = strip_tags($row['isi_agenda']);
                                ?>
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><?php echo "<a href= '" . base_url() . "agenda/detail/$row[tema_seo]'><b>$row[tema]</b></a>"; ?></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <?php
                                            $current = strtotime(date("Y-m-d"));
                                            $date = strtotime($row['tgl_mulai']);

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
                                            <li><i class="icon-time"></i><?php echo $row['jam']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-- #content end -->
        </div>
</section>

<div style="clear:both"></div>
<?php echo $this->pagination->create_links(); ?>
