<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data User</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_manajemenuser',$attributes); 
          echo "<div class='col-md-12'>
                  <div class='alert alert-warning'><b>NIP</b> tidak bisa diubah, dan Apabila password tidak diubah, dikosongkan saja...</div>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[NIP]'>
                    <tr><th width='120px' scope='row'>NIP</th>   <td><input type='text' class='form-control' name='a' value='$rows[NIP]' readonly='on'></td></tr>
                    <tr><th scope='row'>Password</th>                 <td><input type='password' class='form-control' name='b'></td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>             <td><input type='text' class='form-control' name='c' value='$rows[NAMA]'></td></tr>
                    <tr><th scope='row'>Email</th>                    <td><input type='email' class='form-control' name='d' value='".$rows['email_uns']."@civitas.uns.ac.id'></td></tr>
                    <tr><th scope='row'>No Telp</th>                  <td><input type='number' class='form-control' name='e' value='$rows[no_hp]'></td></tr>
</tbody>
                  </table>
                </div>
              </div>
                <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div>";