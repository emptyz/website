<section id="content">

    <div class="content-wrap">

            <div class="container clearfix">

                <?php if ($this->session->flashdata('warning')) { ?>
                    <div class="style-msg alertmsg">
                        <div class="sb-msg"><i class="icon-warning-sign"></i><strong>Maaf!</strong> <?php echo $this->session->flashdata('warning')."Saai ini anda login sebagai <strong>".$this->session->level."</strong>."; ?></div>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div>
                <?php } ?>

            </div>

    </div>

</section>