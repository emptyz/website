<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Contact Form
            ============================================= -->
            <div class="col_half">

                <?php
                if (isset($_POST['submit'])) {
                    echo "<div class='alert alert-success'><center>Pesan anda berhasil terkirim, dan akan segera kami respon...</center></div>";
                }
                ?>

                <div class="fancy-title title-dotted-border">
                    <h3>Kontak Kami</h3>
                </div>
                <?php
                $attributes = array('id' => 'template-contactform','class'=>'form-horizontal','role'=>'form', 'name'=>'template-contactform');
                $ip         = $_SERVER['REMOTE_ADDR'];
                echo form_open_multipart('hubungi/index',$attributes); 
                ?>
                <div class="contact-widget">

                    <div class="contact-form-result"></div>

                    

                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="template-contactform-name">Nama <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="a" value="" class="sm-form-control required" />
                        </div>

                        <div class="col_one_third">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="b" value="" class="required email sm-form-control" />
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-phone">Telepon</label>
                            <input type="text" id="template-contactform-phone" name="c" value="" class="required sm-form-control" />
                        </div>

                        <div class="clear"></div>

                        <div class="col_two_third">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="d" value="" class="required sm-form-control" />
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-service">Kategori</label>
                            <select id="template-contactform-service" name="e" class="sm-form-control">
                                <option value="">-- Pilih Kategori --</option>
                                <option value="31">Remunerasi</option>
                                <option value="32">Kinerja</option>
                                <option value="33">Pengembangan SDM</option>
                                <option value="30">Lain-lain</option>
                            </select>
                        </div>

                        <div class="clear"></div>

<!--                        <div class="col_full">
                            <label for="template-contactform-message">Upload data pendukung. <small>*</small></label>
                            <input type="file" id="template-contactform-file" name="f" value="" class="sm-form-control" />
                        </div>-->

                        <div class="col_full">
                            <label for="template-contactform-message">Pesan <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="g" rows="6" cols="30"></textarea>
                        </div>
                        
                        <div class="col_two_third">
                            <label for="template-contactform-subject">Masukkan kode disamping <small>*</small></label>
                            <input type="text" id="template-contactform-captcha" name="secutity_code" value="" class="required sm-form-control" />
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-service"><br></label>
                            <p class="captcha-img"><?php echo $image; ?></p>
                             </div>

                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="h" value="<?php echo $ip ?>" class="sm-form-control" />
                        </div>

                        <div class="col_full">
                            <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Kirim</button>
                        </div>

                   
                </div>

            </div><!-- Contact Form End -->

            <!-- Google Map
            ============================================= -->
            <div class="col_half col_last">

                <section id="google-map" class="gmap" style="height: 410px;"><iframe src="https://maps.google.com/maps?q=baa bapsi&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="100" frameborder="0" style="border:0" allowfullscreen></iframe></section>

            </div><!-- Google Map End -->

            <div class="clear"></div>

            <!-- Contact Info
            ============================================= -->
            <div class="row clear-bottommargin">

                <div class="col-lg-3 col-md-6 bottommargin clearfix">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-map-marker2"></i></a>
                        </div>
                        <h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 bottommargin clearfix">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-phone3"></i></a>
                        </div>
                        <h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 bottommargin clearfix">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-skype2"></i></a>
                        </div>
                        <h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 bottommargin clearfix">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-twitter2"></i></a>
                        </div>
                        <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                    </div>
                </div>

            </div><!-- Contact Info End -->

        </div>

    </div>

</section><!-- #content end -->




