<section id="slider" class="slider-element slider-parallax full-screen dark error404-wrap" style="background: url(<?php echo base_url(); ?>template/<?php echo template(); ?>/images/pattern2.png) center;">
			<div class="slider-parallax-inner">

				<div class="container-fluid vertical-middle center clearfix">

					<div class="error404">404</div>

					<div class="heading-block nobottomborder">
						<h4>Ooopps.! Halaman yang anda cari tidak ditemukan.</h4>
						<span>Silahkan melakukan pencarian halaman dibawah:</span>
					</div>

                                        <form action="<?php echo base_url()."berita/cari" ?>" method="post" role="form" class="divcenter nobottommargin">
						<div class="input-group input-group-lg">
							<input type="text" name="cari" class="form-control" placeholder="Pencarian...">
							<div class="input-group-append">
								<button class="btn btn-warning" name="cari" type="button">Search</button>
							</div>
						</div>
					</form>

				</div>

			</div>
		</section>
