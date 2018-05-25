<?php 
class Model_berita extends CI_model{
    function kategori_berita(){
        return $this->db->query("SELECT * FROM web_kategori ORDER BY id_kategori DESC");
    }

    function kategori_berita_tambah(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')),
                        'kategori_seo'=>seo_title($this->input->post('a')),
                        'aktif'=>$this->db->escape_str($this->input->post('b')));
        $this->db->insert('web_kategori',$datadb);
    }

    function kategori_berita_edit($id){
        return $this->db->query("SELECT * FROM web_kategori where id_kategori='$id'");
    }

    function kategori_berita_update(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')),
                        'kategori_seo'=>seo_title($this->input->post('a')),
                        'aktif'=>$this->db->escape_str($this->input->post('b')));
        $this->db->where('id_kategori',$this->input->post('id'));
        $this->db->update('web_kategori',$datadb);
    }

    function kategori_berita_delete($id){
        return $this->db->query("DELETE FROM web_kategori where id_kategori='$id'");
    }


    function sensorkata(){
        return $this->db->query("SELECT * FROM web_katajelek ORDER BY id_jelek DESC");
    }

    function sensorkata_tambah(){
        $datadb = array('kata'=>$this->db->escape_str($this->input->post('a')),
                        'ganti'=>$this->db->escape_str($this->input->post('b')));
        $this->db->insert('web_katajelek',$datadb);
    }

    function sensorkata_edit($id){
        return $this->db->query("SELECT * FROM web_katajelek where id_jelek='$id'");
    }

    function sensorkata_update(){
        $datadb = array('kata'=>$this->db->escape_str($this->input->post('a')),
                        'ganti'=>$this->db->escape_str($this->input->post('b')));
        $this->db->where('id_jelek',$this->input->post('id'));
        $this->db->update('web_katajelek',$datadb);
    }

    function sensorkata_delete($id){
        return $this->db->query("DELETE FROM web_katajelek where id_jelek='$id'");
    }



    function tag_berita(){
        return $this->db->query("SELECT * FROM web_tag ORDER BY id_tag DESC");
    }

    function tag_berita_tambah(){
        $datadb = array('nama_tag'=>$this->db->escape_str($this->input->post('a')),
                        'tag_seo'=>seo_title($this->input->post('a')),
                        'count'=>'0');
        $this->db->insert('web_tag',$datadb);
    }

    function tag_berita_edit($id){
        return $this->db->query("SELECT * FROM web_tag where id_tag='$id'");
    }

    function tag_berita_update(){
        $datadb = array('nama_tag'=>$this->db->escape_str($this->input->post('a')),
                        'tag_seo'=>seo_title($this->input->post('a')));
        $this->db->where('id_tag',$this->input->post('id'));
        $this->db->update('web_tag',$datadb);
    }

    function tag_berita_delete($id){
        return $this->db->query("DELETE FROM web_tag where id_tag='$id'");
    }

    function komentar_berita($id_berita){
        return $this->db->query("SELECT * FROM web_komentar where id_berita = '$id_berita' AND aktif='Y'");
    }

    function kirim_komentar(){
        $datadb = array('id_berita'=>cetak($this->input->post('a')),
                                'nama_komentar'=>cetak($this->input->post('b')),
                                'url'=>cetak($this->input->post('c')),
                                'isi_komentar'=>cetak($this->input->post('d')),
                                'tgl'=>date('Y-m-d'),
                                'jam_komentar'=>date('H:i:s'),
                                'aktif'=>'N');
        $this->db->insert('web_komentar',$datadb);
    }

    function list_berita_rss(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM web_berita a LEFT JOIN web_kategori b ON a.id_kategori=b.id_kategori ORDER BY a.id_berita DESC LIMIT 10");
    }

    function list_berita(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM web_berita a LEFT JOIN web_kategori b ON a.id_kategori=b.id_kategori ORDER BY a.id_berita DESC");
    }

    function list_berita_tambah(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($this->input->post('j')!=''){
                $tag_seo = $this->input->post('j');
                $tag=implode(',',$tag_seo);
            }else{
                $tag = '';
            }
            if ($hasil['file_name']==''){
                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'headline'=>$this->db->escape_str($this->input->post('c')),
                                'isi_berita'=>$this->input->post('d'),
                                'is_aktif'=>$this->input->post('is_aktif'),
                                'is_publik'=>$this->input->post('is_publik'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dibaca'=>'0',
                                'tag'=>$tag);
            }else{
                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'headline'=>$this->db->escape_str($this->input->post('c')),
                                'isi_berita'=>$this->input->post('d'),
                                'is_aktif'=>$this->input->post('is_aktif'),
                                'is_publik'=>$this->input->post('is_publik'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name'],
                                'dibaca'=>'0',
                                'tag'=>$tag);
            }
        $this->db->insert('web_berita',$datadb);
    }

    function list_berita_edit($id){
        return $this->db->query("SELECT * FROM web_berita where id_berita='$id'");
    }

    function list_berita_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($this->input->post('j')!=''){
                $tag_seo = $this->input->post('j');
                $tag=implode(',',$tag_seo);
            }else{
                $tag = '';
            }
            if ($hasil['file_name']==''){
                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'headline'=>$this->db->escape_str($this->input->post('c')),
                                'isi_berita'=>$this->input->post('d'),
                                'is_aktif'=>$this->input->post('is_aktif'),
                                'is_publik'=>$this->input->post('is_publik'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dibaca'=>'0',
                                'tag'=>$tag);
            }else{
                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'headline'=>$this->db->escape_str($this->input->post('c')),
                                'isi_berita'=>$this->input->post('d'),
                                'is_aktif'=>$this->input->post('is_aktif'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name'],
                                'dibaca'=>'0',
                                'tag'=>$tag);
            }
        $this->db->where('id_berita',$this->input->post('id'));
        $this->db->update('web_berita',$datadb);
    }

    function berita_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($this->input->post('j')!=''){
                $tag_seo = $this->input->post('j');
                $tag=implode(',',$tag_seo);
            }else{
                $tag = '';
            }
        $id_kategori = $this->db->escape_str($this->input->post('b'));
        $editor = $this->db->escape_str($this->input->post('editor'));
        $judul = $this->db->escape_str($this->input->post('a'));
        $judul_seo = seo_title($this->input->post('a'));
        $headline = $this->db->escape_str($this->input->post('c'));
        $isi_berita = $this->input->post('d');
        $is_aktif = $this->input->post('is_aktif');
        $is_publik = $this->input->post('is_publik');
        $id_berita = $this->input->post('id');
        $gambar = $hasil['file_name'];
        
        return $this->db->query("UPDATE web_berita SET id_kategori='$id_kategori' , editor='$editor', judul='$judul', judul_seo='$judul_seo', headline='$headline', isi_berita='$isi_berita', is_aktif='$is_aktif', is_publik='$is_publik' 'gambar'='$gambar' WHERE id_berita='$id_berita'");
        
        
        
        
        
        
    }
    
    function list_berita_delete($id){
        return $this->db->query("DELETE FROM web_berita where id_berita='$id'");
    }


    function komentar(){
        return $this->db->query("SELECT * FROM web_komentar ORDER BY id_komentar DESC");
    }

    function komentar_edit($id){
        return $this->db->query("SELECT * FROM web_komentar where id_komentar='$id'");
    }

    function komentar_update(){
        $datadb = array('nama_komentar'=>$this->db->escape_str($this->input->post('a')),
                        'url'=>$this->db->escape_str($this->input->post('b')),
                        'isi_komentar'=>$this->input->post('c'),
                        'aktif'=>$this->input->post('d'));
        $this->db->where('id_komentar',$this->input->post('id'));
        $this->db->update('web_komentar',$datadb);
    }

    function komentar_delete($id){
        return $this->db->query("DELETE FROM web_komentar where id_komentar='$id'");
    }
    
      function gambar_berita_delete($id) {
          $gambar = $this->session->gambar;
          unlink("asset/foto_berita/".$gambar);
        return $this->db->query("UPDATE web_berita SET gambar=NULL WHERE id_berita='$id'");
    }
}