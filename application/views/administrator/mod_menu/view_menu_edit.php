<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Menu Utama</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_menuutama',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <tr><th scope='row'>Urutan Menu</th>                 <td><input type='text' class='form-control' name='e' value='$rows[urutan]'></td></tr>
                    <input type='hidden' name='id' value='$rows[id_main]'>
                    <tr><th width='120px' scope='row'>Nama Menu</th>   <td><input type='text' class='form-control' name='a' value='$rows[nama_menu]'></td></tr>
                    <tr><th scope='row'>Link</th>                 <td><input type='text' class='form-control' name='b' value='$rows[link]'></td></tr>
                    
                    <tr><th scope='row'>Aktif</th>                  <td>"; if ($rows['aktif'] == 'Y'){
                                                                                echo "<input type='radio' name='c' value='Y' checked> Y 
                                                                                      <input type='radio' name='c' value='N'> N";
                                                                              }else{
                                                                                echo "<input type='radio' name='c' value='Y'> Y 
                                                                                      <input type='radio' name='c' value='N' checked> N";
                                                                              }
                    echo "</td></tr>
                    <tr><th scope='row'>Admin Menu</th>                  <td>"; if ($rows['adminmenu'] == 'Y'){
                                                                                echo "<input type='radio' name='d' value='Y' checked> Y 
                                                                                      <input type='radio' name='d' value='N'> N";
                                                                              }else{
                                                                                echo "<input type='radio' name='d' value='Y'> Y 
                                                                                      <input type='radio' name='d' value='N' checked> N";
                                                                              }
                    echo "</td></tr>
                    <tr><th scope='row'>Operator Menu</th>                  <td>"; if ($rows['opmenu'] == 'Y'){
                                                                                echo "<input type='radio' name='f' value='Y' checked> Y 
                                                                                      <input type='radio' name='f' value='N'> N";
                                                                              }else{
                                                                                echo "<input type='radio' name='f' value='Y'> Y 
                                                                                      <input type='radio' name='f' value='N' checked> N";
                                                                              }
                    echo "</td></tr>
                        
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div>";
