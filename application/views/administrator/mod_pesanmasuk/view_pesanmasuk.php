            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pesan Masuk</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <?php
                    
                    if ($this->session->flashdata('sukses')){
                        echo "<div class='alert alert-success alert-dismissible fade in' role='alert'> 
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span></button> <strong>Success! </strong>".$this->session->flashdata('sukses')."
                              </div>";
                    }
                    
                    ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th>Nama </th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Tanggal</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record->result_array() as $row){
                    $tgl = tgl_indo($row['tanggal']);
                    echo "<tr><td>$no</td>
                              <td>$row[nama]</td>
                              <td>$row[email]</td>
                              <td>$row[subjek]</td>
                              <td>$tgl</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/detail_pesanmasuk/$row[id_hubungi]'><span class='glyphicon glyphicon-send'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_pesanmasuk/$row[id_hubungi]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>