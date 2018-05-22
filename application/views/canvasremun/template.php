<?php ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <!-- Meta
                ============================================= -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php include "phpmu-title.php"; ?></title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="description" content="<?php include "phpmu-description.php"; ?>">
        <meta name="keywords" content="<?php include "phpmu-keywords.php"; ?>">
        <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/startup_logo_96dp.png" rel="apple-touch-icon" sizes="96x96">
        <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/startup_logo_96dp.png" rel="icon" sizes="96x96" type="image/png">
        <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/startup_logo_32dp.png" rel="icon" sizes="32x32" type="image/png">
        <meta content="img/startup_logo_96dp.png" name="msapplication-TileImage">

        <meta property="og:url" content="https://www.remunerasi.uns.ac.id" />
        <meta property="og:title" content="Unit Pengembangan SDM dan Remunerasi" />
        <meta property="og:locale" content="en_ID" /> 
        <meta property="og:site_name" content="UPSDM dan Remunerasi" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="UNS" />
        <meta name="twitter:creator" content="UNS" />

        <!-- Stylesheets
        ============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/swiper.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />


    </head>

    <body class="stretched">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">
            <?php include "main-menu.php"; ?>
            <?php echo $contents; ?>





            <!-- Footer
            ============================================= -->
            <footer id="footer" class="dark">

                <div class="container">

                    <!-- Footer Widgets
                    ============================================= -->
                    <div class="footer-widgets-wrap clearfix">


                        <div class="col_one_third">

                            <div class="widget clearfix">

                                <h4>Kontak Kami</h4>
                                <hr>
                                <div style="background: url('<?php echo base_url(); ?>template/<?php echo template(); ?>/images/world-map.png') no-repeat center center; background-size: 100%;">
                                    <address>
                                        <strong>Gedung BAA-APSI Lt. 2</strong><br>
                                        Universitas Sebelas Maret<br>
                                        Jl. Ir Sutami 36 Surakarta<br>

                                        <abbr title="Phone Number"><strong>Telepon:</strong></abbr> (0271) 646994<br>
                                        <abbr title="Email Address"><strong>Email:</strong></abbr> remunerasi@uns.ac.id
                                    </address>
                                </div>

                            </div>

                        </div>

                        <div class="col_one_third">

                            <div class="widget widget_links clearfix">

                                <h4>Link Terkait</h4>
                                <hr>
                                <ul>
                                    <li><a href="htpp://remunerasi.uns.ac.id">Remunerasi UNS</a></li>
                                    <li><a href="htpp://uns.ac.id">Universitas Sebelas Maret</a></li>

                                </ul>

                            </div>

                        </div>

                        <div class="col_one_third col_last">

                            <div class="widget widget_links clearfix">
                                <h4>Kategori Berita</h4>
                                <hr>
                                <?php
                                $lastpost = $this->model_utama->kategori(0, 5);
                                foreach ($lastpost->result_array() as $l):
                                    ?>
                                    <ul>
                                        <li><?php echo "<a href='" . base_url() . "berita/kategori/$l[kategori_seo]'>$l[nama_kategori]</a>" ?></li>
                                    </ul>
                                    <?php
                                endforeach;
                                ?>
                            </div>

                        </div>



                    </div><!-- .footer-widgets-wrap end -->

                </div>

                <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="copyright-links">
                            Copyrights &copy; 2018 All Rights Reserved <a href="<?php echo base_url(); ?>">Unit Pengembangan SDM dan Remunerasi.</a>
                        </div>

                    </div>

                </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/functions.js"></script>
<!-- Charts JS
        ============================================= -->
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/chart.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/chart-utils.js"></script>

	<script>
		jQuery(document).ready(function($){
			var $faqItems = $('#faqs .faq');
			if( window.location.hash != '' ) {
				var getFaqFilterHash = window.location.hash;
				var hashFaqFilter = getFaqFilterHash.split('#');
				if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
					$('#portfolio-filter li').removeClass('activeFilter');
					$( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
					var hashFaqSelector = '.' + hashFaqFilter[1];
					$faqItems.css('display', 'none');
					if( hashFaqSelector != 'all' ) {
						$( hashFaqSelector ).fadeIn(500);
					} else {
						$faqItems.fadeIn(500);
					}
				}
			}

			$('#portfolio-filter a').click(function(){
				$('#portfolio-filter li').removeClass('activeFilter');
				$(this).parent('li').addClass('activeFilter');
				var faqSelector = $(this).attr('data-filter');
				$faqItems.css('display', 'none');
				if( faqSelector != 'all' ) {
					$( faqSelector ).fadeIn(500);
				} else {
					$faqItems.fadeIn(500);
				}
				return false;
		   });
		});
	</script>

</body>
</html>