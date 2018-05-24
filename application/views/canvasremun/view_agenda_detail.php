<section id="page-title" class="page-title-mini">

    <div class="container clearfix">
        <h1>Detail Agenda</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url()."agenda"; ?>">Agenda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Agenda</li>
        </ol>
    </div>

</section><!-- #page-title end -->



<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <?php
            $isi_berita = strip_tags($record['isi_agenda']);
            $isi = substr($isi_berita, 0, 120);
            $isi = substr($isi_berita, 0, strrpos($isi, " "));
            $tgl1 = tgl_indo($record['tgl_mulai']);
            $tgl2 = tgl_indo($record['tgl_selesai']);
            $tgl_posting = tgl_indo($record['tgl_posting']);
            ?>

            <div class="single-event">

                <div class="row">
                    <div class="col-8">
                        <h3><?php echo $record['tema']; ?></h3>

                        <p><?php echo $isi_berita; ?></p>
                    </div>
                    <div class="col-4">
                        <div class="card events-meta mb-3">
                            <div class="card-header"><h5 class="mb-0">Info Agenda:</h5></div>
                            <div class="card-body">
                                <ul class="iconlist nobottommargin">
                                    <li><i class="icon-calendar3"></i> <?php echo $tgl1 . " s/d " . $tgl2; ?></li>
                                    <li><i class="icon-time"></i><?php echo $record['jam']; ?></li>
                                    <li><i class="icon-map-marker2"></i> <?php echo $record['tempat']; ?></li>
                                    <li><i class="icon-phone3"></i> <?php echo $record['pengirim']; ?></li>
                                </ul>
                            </div>
                        </div>
                        <?php
                        $current = strtotime(date("Y-m-d"));
                        $date = strtotime($record['tgl_mulai']);

                        $datediff = $date - $current;
                        $difference = floor($datediff / (60 * 60 * 24));
                        if ($difference == 0) {
                            echo ' <a href="#" class="btn btn-success btn-block btn-lg">Hari Ini</a>';
                        } else if ($difference > 1) {
                            echo ' <a href="#" class="btn btn-info btn-block btn-lg">Akan Datang</a>';
                        } else if ($difference > 0) {
                            echo ' <a href="#" class="btn btn-warning btn-block btn-lg">Besok</a>';
                        } else if ($difference < -1) {
                            echo ' <a href="#" class="btn btn-danger btn-block btn-lg">Telah Berlalu</a>';
                        } else {
                            echo ' <a href="#" class="btn btn-danger btn-block btn-lg">Kemarin</a>';
                        }
                        ?>

                    </div>



                </div>
            </div>


        </div>

    </div>

</section><!-- #content end -->



