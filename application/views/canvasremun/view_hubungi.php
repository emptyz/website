<?php
          echo "<br><br><br><br><div class='container'><div class='row'><div class='col-md-12'><h4><span class='glyphicon glyphicon-envelope'></span> Hubungi Kami</h4>
                  <p>Silahkan meninggalkan Pesan / Komentar / Masukan anda agar kami bisa memberikan pelayanan yang lebih baik lagi, Terima kasih.</p></div>
            <div style='clear:both'><br></div>";
            if (isset($_POST['submit'])){
                echo "<div class='alert alert-success'><center>Pesan anda berhasil terkirim, dan akan segera kami respon...</center></div>";
            }
            echo "<div class='col-md-12'>";
            echo '<iframe src="https://maps.google.com/maps?q=universitas sebelas maret&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>';

                $attributes = array('id' => 'formku','class'=>'form-horizontal','role'=>'form');
                $ip         = $_SERVER['REMOTE_ADDR'];
                echo form_open_multipart('hubungi/index',$attributes); 
                    echo "<hr><div class='form-group'>
                        <label for='inputEmail3' class='col-sm-3 control-label'>Nama Lengkap</label>
                        <div class='col-sm-9'>
                        <div style='background:#fff;' class='input-group col-sm-8'>
                            <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                            <input type='text' class='required form-control' name='a'>
                        </div>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='inputEmail3' class='col-sm-3 control-label'>Alamat Email</label>
                        <div class='col-sm-9'>
                        <div style='background:#fff;' class='input-group col-sm-8'>
                            <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
                            <input type='email' class='required form-control' name='b'>
                        </div>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='inputEmail3' class='col-sm-3 control-label'>Subjek</label>
                        <div class='col-sm-9'>
                        <div style='background:#fff;' class='input-group col-sm-12'>
                            <span class='input-group-addon'><i class='glyphicon glyphicon-list-alt'></i></span>
                            <input type='text' class='required form-control' name='c'>
                        </div>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='inputPassword3' class='col-sm-3 control-label'>Isi Pesan</label>
                        <div class='col-sm-9'>
                        <div style='background:#fff;' class='input-group col-lg-12'>
                            <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                            <textarea class='required form-control' name='d' style='height:150px' minlength='10'></textarea>
                        </div></div>
                    </div>

                    <div class='form-group'>
                      <label for='inputEmail3' style='margin-top:-5px' class='col-sm-3 control-label'>$image</label>
                      <div class='col-sm-9'>
                      <div style='background:#fff;' class='input-group col-lg-8'>
                          <input name='secutity_code' maxlength='6' type='text' class='form-control' placeholder='Masukkkan kode di sebelah kiri..'>
                      </div></div>
                    </div>

                    <br>
                    <div class='form-group'>
                        <div class='col-sm-offset-2'>
                            <button type='submit' name='submit' class='btn btn-primary btn-sm'>Kirimkan</button>
                        </div>
                    </div>
                </form>
           </div>
            <div style='clear:both'><br></div></div></div>";
