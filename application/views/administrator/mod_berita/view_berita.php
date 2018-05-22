<div class="col-xs-12">  
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Semua Berita</h3>
            <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>administrator/tambah_berita'>Tambahkan Data</a>
        </div><!-- /.box-header -->
                            <?php
                    
                    if ($this->session->flashdata('sukses')){
                        echo "<div class='alert alert-success alert-dismissible fade in' role='alert'> 
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span></button> <strong>Success! </strong>".$this->session->flashdata('sukses')."
                              </div>";
                    }
                    
                    ?>
        <div class="box-body">
            <table id="berita" class="table table-bordered table-striped">
                <thead>
                <th style='width:20px'>No</th>
                <th>Judul Berita</th>
                <th>Kategori</th>
                <th>Dibaca</th>
                <th>Status</th>
                <th>Tgl Posting</th>
                <th style='width:50px'>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($record->result_array() as $row) {
                        $tgl_posting = tgl_indo($row['tanggal']);
                        if ($row['id_kategori'] == '0') {
                            $kategori = '<i style="color:red">Pending</i>';
                        } else {
                            $kategori = $row['nama_kategori'];
                        }

                        if ($row['is_aktif'] == "1") {
                            echo "<tr><td>$no</td>
                              <td>$row[judul]</td>
                              <td>$kategori</td>
                              <td>$row[dibaca] Kali</td>
                                  <td>Publish</td>
                              <td>$tgl_posting</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='" . base_url() . "administrator/edit_berita/$row[id_berita]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='" . base_url() . "administrator/delete_berita/$row[id_berita]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                            $no++;
                        } else {


                            echo "<tr><td>$no</td>
                              <td>$row[judul]</td>
                              <td>$kategori</td>
                              <td>$row[dibaca] Kali</td>
                                  <td>Pending</td>
                              <td>$tgl_posting</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='" . base_url() . "administrator/edit_berita/$row[id_berita]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='" . base_url() . "administrator/delete_berita/$row[id_berita]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                            $no++;
                        }
                    }
                    ?>

                    <tfoot>
<tr>
<th style='width:20px'></th>
<th></th>
<th>Kategori</th>
<th></th>
<th>Status</th>
<th></th>
<th style='width:50px'></th>
</tr>
</tfoot>
                </tbody>
            </table>
        </div>