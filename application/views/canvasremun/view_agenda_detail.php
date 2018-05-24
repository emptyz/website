<section id="page-title" class="page-title-mini">

    <div class="container clearfix">
        <h1>Detail Agenda</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Agenda</li>
        </ol>
    </div>

</section><!-- #page-title end -->



<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="postcontent nobottommargin clearfix">
                <?php
                $isi_berita = strip_tags($record['isi_agenda']);
                $isi = substr($isi_berita, 0, 120);
                $isi = substr($isi_berita, 0, strrpos($isi, " "));
                $tgl1 = tgl_indo($record['tgl_mulai']);
                $tgl2 = tgl_indo($record['tgl_selesai']);
                $tgl_posting = tgl_indo($record['tgl_posting']);
                ?>

                <div class="single-event">
                    

                    <div class="col_two_fourth col_last">
                        <div class="card events-meta mb-3">
                            <div class="card-header"><h5 class="mb-0">Info Agenda:</h5></div>
                            <div class="card-body">
                                <ul class="iconlist nobottommargin">
                                    <li><i class="icon-calendar3"></i> <?php echo $tgl1 ." s/d ". $tgl2; ?></li>
                                    <li><i class="icon-time"></i> 20:00 - 02:00</li>
                                    <li><i class="icon-map-marker2"></i> Ibiza, Spain</li>
                                    <li><i class="icon-euro"></i> <strong>99.99</strong></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn btn-success btn-block btn-lg">Buy Tickets</a>
                    </div>
                    <div class="col_two_fourth">

                        <h3><?php echo $record['tema']; ?></h3>

                        <p><?php echo $isi_berita; ?></p>

                        <h4>Inclusions</h4>



                    </div>

                    <div class="clear"></div>


                    <div class="col_one_fourth col_last">

                        <h4>Location</h4>

                        <section id="event-location" class="gmap" style="height: 300px;"></section>


                    </div>

                    <div class="col_two_third nobottommargin col_last">

                        <h4>Events Timeline</h4>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Timings</th>
                                        <th>Location</th>
                                        <th>Events</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge badge-danger">10:00 - 12:00</span></td>
                                        <td>Main Auditorium</td>
                                        <td>WWDC Developer Conference</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-danger">12:00 - 12:45</span></td>
                                        <td>Cafeteria</td>
                                        <td>Lunch</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-danger">15:00 - 18:00</span></td>
                                        <td>Room - 25, 2nd Floor</td>
                                        <td>Hardware Testing &amp; Evaluation</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>

            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">

                    <div class="widget clearfix">

                        <h4>Upcoming Events</h4>
                        <div id="post-list-footer">

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="images/events/thumbs/1.jpg" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>10th July 2014</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="images/events/thumbs/2.jpg" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>10th July 2014</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="images/events/thumbs/3.jpg" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>10th July 2014</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

</section><!-- #content end -->



<?php

echo "<p class='title'><span class='glyphicon glyphicon-volume-up'></span> $record[tema]</p>
                  <small class='date'><span class='glyphicon glyphicon-user'></span> Oleh : $record[nama_lengkap], Pada : $tgl_posting</small><hr>
            <div class='col-md-12'>";

echo "<p>$record[isi_agenda]</p>
                      <table class='table table-condensed table-bordered'>
                        <tr><th width='120px'>Waktu</th>  <td>$record[tempat]</td></tr>
                        <tr><th width='120px'>Tempat</th>  <td>$tgl1 s/d $tgl2, $record[jam] Wib</td></tr>
                        <tr><th width='120px'>Pengirim</th>  <td>$record[pengirim]</td></tr>
                      </table>
            </div><div style='clear:both'><br></div>";
?>
