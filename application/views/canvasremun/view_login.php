
<section id="content">

    <div class="content-wrap">
        
            <div class="container clearfix">

                <?php if ($this->session->flashdata('warning')) { ?>
                    <div class="style-msg alertmsg">
                        <div class="sb-msg"><i class="icon-warning-sign"></i><?php echo $this->session->flashdata('warning'); ?></div>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div>
                <?php } ?>

            </div>


        <div class="divcenter border" style="max-width: 400px;">

            <div class="card-body" style="padding: 40px;">
                <form id="login-form" name="login-form" class="nobottommargin" action="<?php echo base_url(); ?>auth/login" method="post">
                    <h3>Login Remunerasi</h3>

                    <div class="col_full">
                        <label for="login-form-username">Username:</label>
                        <input type="text" id="login-form-username" name="a" value="" class="form-control not-dark" />
                    </div>

                    <div class="col_full">
                        <label for="login-form-password">Password:</label>
                        <input type="password" id="login-form-password" name="b" value="" class="form-control not-dark" />
                    </div>

                    <div class="col_full nobottommargin">
                        <button class="button button-3d button-black nomargin" id="login-form-submit" name="submit" value="login">Login</button>
                        <a href="#" class="fright">Forgot Password?</a>
                    </div>
                </form>
                <br>

                <div class="center">
                    <h4 style="margin-bottom: 15px;">Atau Login:</h4>
                    <a href="#" class="button button-rounded si-facebook si-colored">SSO UNS</a>
                </div>
            </div>
            </div>

    </div>
</section>
