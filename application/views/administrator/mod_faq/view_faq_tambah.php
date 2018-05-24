<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah FAQ Baru</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_faq',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th scope='row'>Kategori</th>               <td><select name='b' class='form-control' required>
                                                                            <option value='' selected>- Pilih Kategori -</option>";
                                                                            foreach ($record->result_array() as $row){
                                                                                echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                                                            }
                    echo "</td></tr>
                    <tr><th scope='row'>Status FAQ</th>               <td><input type='radio' name='is_aktif' value='1'> Publish &nbsp; <input type='radio' name='is_aktif' value='0' checked> Draft</td></tr>
                    <tr><th scope='row'>Privasi FAQ</th>               <td><input type='radio' name='is_publik' value='1'> Publik &nbsp; <input type='radio' name='is_publik' value='0' checked> Private</td></tr>
                    <tr><th scope='row'>Isi FAQ</th>             <td><textarea id='editor1' class='form-control' name='d' style='height:320px' required></textarea></td></tr>";

                    echo " <input type='hidden' name='u' value='".$this->session->nip."'>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div>";
