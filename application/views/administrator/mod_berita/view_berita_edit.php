<?php 
    echo "<div class='col-md-12'>";
                            if ($this->session->flashdata('sukses')){
                        echo "<div class='alert alert-success alert-dismissible fade in' role='alert'> 
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span></button> <strong>Success! </strong>".$this->session->flashdata('sukses')."
                              </div>";
                    }
              echo "<div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Berita Terpilih".$this->session->gambar."</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_berita',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_berita]'>
                    <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='a' value='$rows[judul]' required></td></tr>
                    <tr><th scope='row'>Kategori</th>               <td><select name='b' class='form-control' required>
                                                                                <option value='' selected>- Pilih Kategori -</option>";
                                                                            foreach ($record->result_array() as $row){
                                                                                if ($rows['id_kategori'] == $row['id_kategori']){
                                                                                  echo "<option value='$row[id_kategori]' selected>$row[nama_kategori]</option>";
                                                                                }else{
                                                                                  echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                                                                }
                                                                            }
                                                                            $this->session->set_userdata('gambar', $rows['gambar']);
                    echo "</td></tr>
                    <tr><th scope='row'>Headline</th>               <td>"; if ($rows['headline']=='Y'){ echo "<input type='radio' name='c' value='Y' checked> Ya &nbsp; <input type='radio' name='c' value='N'> Tidak"; }else{ echo "<input type='radio' name='c' value='Y'> Ya &nbsp; <input type='radio' name='c' value='N' checked> Tidak"; } echo "</td></tr>
                    <tr><th scope='row'>Status Berita</th>               <td>"; if ($rows['is_aktif']=='1'){ echo "<input type='radio' name='is_aktif' value='1' checked> Publish &nbsp; <input type='radio' name='is_aktif' value='0'> Draft"; }else{ echo "<input type='radio' name='is_aktif' value='1'> Publish &nbsp; <input type='radio' name='is_aktif' value='0' checked> Draft"; } echo "</td></tr>
                    <tr><th scope='row'>Privacy Berita</th>               <td>"; if ($rows['is_publik']=='1'){ echo "<input type='radio' name='is_publik' value='1' checked> Publik &nbsp; <input type='radio' name='is_publik' value='0'> Private"; }else{ echo "<input type='radio' name='is_publik' value='1'> Publik &nbsp; <input type='radio' name='is_publik' value='0' checked> Private"; } echo "</td></tr>
                    <tr><th scope='row'>Isi Berita</th>             <td><textarea id='editor1' class='form-control' name='d' style='height:320px' required>$rows[isi_berita]</textarea></td></tr>
                    <tr><th scope='row'>Ganti Gambar</th>                 <td><input type='file' class='form-control' name='e'>";
                                                                               if ($rows['gambar'] != ''){ echo "<i style='color:red'>Lihat Gambar Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_berita/$rows[gambar]'>$rows[gambar]</a> || <a href='" . base_url() . "administrator/delete_gambar_berita/$rows[id_berita]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"'>Hapus Gambar</a>"; } echo "</td></tr>
                    <tr><th scope='row'>Tag</th>                    <td><div class='checkbox-scroll'>";
                                                                            $_arrNilai = explode(',', $rows['tag']);
                                                                            foreach ($tag->result_array() as $tag){
                                                                                $_ck = (array_search($tag['tag_seo'], $_arrNilai) === false)? '' : 'checked';
                                                                                echo "<span style='display:block;'><input type=checkbox value='$tag[tag_seo]' name=j[] $_ck>$tag[nama_tag] &nbsp; &nbsp; &nbsp; </span>";
                                                                            }
                    echo "</div></td></tr>";
                    echo " <input type='hidden' name='editor' value='".$this->session->nip."'>";
                    echo "
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url()."administrator/berita'><button type='button' class='btn btn-default pull-right'>Kembali</button></a>
                    
                  </div>
            </div>";
