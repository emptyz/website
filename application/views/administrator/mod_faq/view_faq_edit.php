<?php

echo "<div class='col-md-12'>";
if ($this->session->flashdata('sukses')) {
    echo "<div class='alert alert-success alert-dismissible fade in' role='alert'> 
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span></button> <strong>Success! </strong>" . $this->session->flashdata('sukses') . "
                              </div>";
}
echo "<div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit faq Terpilih" . $this->session->gambar . "</h3>
                </div>
              <div class='box-body'>";
$attributes = array('class' => 'form-horizontal', 'role' => 'form');
echo form_open_multipart('administrator/edit_faq', $attributes);
echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_faq]'>
                    <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='a' value='$rows[judul]' required></td></tr>
                    <tr><th scope='row'>Kategori</th>               <td><select name='b' class='form-control' required>
                                                                                <option value='' selected>- Pilih Kategori -</option>";
foreach ($record->result_array() as $row) {
    if ($rows['id_kategori'] == $row['id_kategori']) {
        echo "<option value='$row[id_kategori]' selected>$row[nama_kategori]</option>";
    } else {
        echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
    }
}
echo "</td></tr>

                        <tr><th scope='row'>Status faq</th>               <td>";
if ($rows['is_aktif'] == '1') {
    echo "<input type='radio' name='is_aktif' value='1' checked> Publish &nbsp; <input type='radio' name='is_aktif' value='0'> Draft";
} else {
    echo "<input type='radio' name='is_aktif' value='1'> Publish &nbsp; <input type='radio' name='is_aktif' value='0' checked> Draft";
} echo "</td></tr>
                    <tr><th scope='row'>Privacy FAQ</th>               <td>";
if ($rows['is_publik'] == '1') {
    echo "<input type='radio' name='is_publik' value='1' checked> Publik &nbsp; <input type='radio' name='is_publik' value='0'> Private";
} else {
    echo "<input type='radio' name='is_publik' value='1'> Publik &nbsp; <input type='radio' name='is_publik' value='0' checked> Private";
} echo "</td></tr>
<tr><th scope='row'>Isi faq</th>             <td><textarea id='editor1' class='form-control' name='d' style='height:320px' required>$rows[isi_faq]</textarea></td></tr>
                    ";
echo "<input type='hidden' name='u' value='" . $rows['username'] . "'>";
echo " <input type='hidden' name='editor' value='" . $this->session->nip . "'>";
echo "
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='" . base_url() . "administrator/faq'><button type='button' class='btn btn-default pull-right'>Kembali</button></a>
                  </div>
            </div>";
