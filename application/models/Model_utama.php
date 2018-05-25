<?php

class Model_utama extends CI_model {

    function headline($dari, $jumlah) {
        return $this->db->query("SELECT a.*, b.nama_kategori FROM web_berita a LEFT JOIN web_kategori b ON a.id_kategori=b.id_kategori where a.headline='Y' ORDER BY a.id_berita DESC LIMIT $dari, $jumlah");
    }

    function kategori($dari, $jumlah) {
        return $this->db->query("SELECT * FROM web_kategori where aktif='Y' ORDER BY id_kategori ASC LIMIT $dari, $jumlah");
    }

    function berita_perkategori($id, $dari, $jumlah) {
        return $this->db->query("SELECT a.*, b.nama_kategori FROM web_berita a LEFT JOIN web_kategori b ON a.id_kategori=b.id_kategori where a.id_kategori='$id' AND is_aktif=1 ORDER BY a.id_berita DESC LIMIT $dari, $jumlah");
    }

    function sekilasinfo() {
        return $this->db->query("SELECT * FROM web_sekilasinfo ORDER BY id_sekilas DESC LIMIT 5");
    }

    function mainmenu() {
        return $this->db->query("SELECT * FROM web_mainmenu where aktif='Y' ORDER BY urutan ASC");
    }

    function submenu($id) {
        return $this->db->query("SELECT * FROM web_submenu WHERE id_main='$id' AND aktif='Y' ORDER BY id_sub ASC");
    }

    function submenu1($id) {
        return $this->db->query("SELECT * FROM web_submenu WHERE id_submain='$id' AND id_submain!='0' AND aktif='Y' ORDER BY id_sub ASC");
    }

    function pengumuman($dari, $jumlah) {
        return $this->db->query("SELECT * FROM web_sekilasinfo ORDER BY id_sekilas DESC LIMIT $dari, $jumlah");
    }

    function linkterkait($posisi, $dari, $jumlah) {
        return $this->db->query("SELECT * FROM web_link_terkait where posisi='$posisi' ORDER BY id_link_terkait ASC LIMIT $dari, $jumlah");
    }

    function banner($dari, $jumlah) {
        return $this->db->query("SELECT * FROM web_banner ORDER BY id_banner DESC LIMIT $dari, $jumlah");
    }

    function kunjungan() {
        $ip = $_SERVER['REMOTE_ADDR'];
        $tanggal = date("Y-m-d");
        $waktu = time();
        $cekk = $this->db->query("SELECT * FROM web_statistik WHERE ip='$ip' AND tanggal='$tanggal'");
        $rowh = $cekk->row_array();
        if ($cekk->num_rows() == 0) {
            $datadb = array('ip' => $ip, 'tanggal' => $tanggal, 'hits' => '1', 'online' => $waktu);
            $this->db->insert('statistik', $datadb);
        } else {
            $hitss = $rowh['hits'] + 1;
            $datadb = array('ip' => $ip, 'tanggal' => $tanggal, 'hits' => $hitss, 'online' => $waktu);
            $array = array('ip' => $ip, 'tanggal' => $tanggal);
            $this->db->where($array);
            $this->db->update('web_statistik', $datadb);
        }
    }

    function grafik_kunjungan() {
        return $this->db->query("SELECT count(*) as jumlah, tanggal FROM web_statistik GROUP BY tanggal ORDER BY tanggal DESC LIMIT 10");
    }

    function pengunjung() {
        return $this->db->query("SELECT * FROM web_statistik WHERE tanggal='" . date("Y-m-d") . "' GROUP BY ip");
    }

    function totalpengunjung() {
        return $this->db->query("SELECT COUNT(hits) as total FROM web_statistik");
    }

    function hits() {
        return $this->db->query("SELECT SUM(hits) as total FROM web_statistik WHERE tanggal='" . date("Y-m-d") . "' GROUP BY tanggal");
    }

    function totalhits() {
        return $this->db->query("SELECT SUM(hits) as total FROM web_statistik");
    }

    function pengunjungonline() {
        $bataswaktu = time() - 300;
        return $this->db->query("SELECT * FROM web_statistik WHERE online > '$bataswaktu'");
    }

    function cek_poling() {
        return $this->db->query("SELECT * from web_modul where nama_modul='Poling' and publish='Y'");
    }

    function pertanyaan() {
        return $this->db->query("SELECT * FROM web_poling WHERE aktif='Y' and status='Pertanyaan'");
    }

    function jawaban() {
        return $this->db->query("SELECT * FROM web_poling WHERE aktif='Y' and status='Jawaban'");
    }

    function semua_berita($start, $limit) {
        return $this->db->query("SELECT a.*, b.NAMA as nama_lengkap, c.* FROM web_berita a LEFT JOIN remunerasi_pegawai b ON a.username=b.NIP LEFT JOIN web_kategori c ON a.id_kategori=c.id_kategori WHERE is_aktif=1 ORDER BY id_berita DESC LIMIT $start,$limit");
    }

    function hitungberita() {
        return $this->db->query("SELECT * FROM web_berita");
    }

    function semua_berita_cari($start, $limit, $kata) {
        $pisah_kata = explode(" ", $kata);
        $jml_katakan = (integer) count($pisah_kata);
        $jml_kata = $jml_katakan - 1;

        $cari = "SELECT a.*, b.NAMA as nama_lengkap, c.* FROM web_berita a LEFT JOIN remunerasi_pegawai b ON a.username=b.NIP LEFT JOIN web_kategori c ON a.id_kategori=c.id_kategori WHERE a.is_aktif=1 AND is_publik=1 AND ";
        for ($i = 0; $i <= $jml_kata; $i++) {
            $cari .= "a.judul OR a.isi_berita LIKE '%$pisah_kata[$i]%'";
            if ($i < $jml_kata) {
                $cari .= " OR ";
            }
        }
        $cari .= " ORDER BY a.id_berita DESC LIMIT $start,$limit";
        return $this->db->query($cari);
    }

    function berita_detail($id) {
        return $this->db->query("SELECT a.*, b.NAMA AS nama_pegawai, c.* FROM web_berita a LEFT JOIN remunerasi_pegawai b ON a.username=b.NIP LEFT JOIN web_kategori c ON a.id_kategori=c.id_kategori where a.id_berita='" . $this->db->escape_str($id) . "' OR a.judul_seo='" . $this->db->escape_str($id) . "'");
    }

    function berita_dibaca_update($id) {
        return $this->db->query("UPDATE web_berita SET dibaca=dibaca+1 where id_berita='" . $this->db->escape_str($id) . "' OR judul_seo='" . $this->db->escape_str($id) . "'");
    }

    function detail_kategori($id, $dari, $sampai) {
        return $this->db->query("SELECT a.*, b.NAMA AS nama_pegawai, c.* FROM web_berita a LEFT JOIN remunerasi_pegawai b ON a.username=b.NIP LEFT JOIN web_kategori c ON a.id_kategori=c.id_kategori where a.id_kategori='" . $this->db->escape_str($id) . "' AND a.is_aktif=1 ORDER BY a.id_berita DESC LIMIT $dari,$sampai");
    }

    function info_terkait($limit, $tag) {
        $pisah_kata = explode(",", $tag);
        $jml_katakan = (integer) count($pisah_kata);
        $jml_kata = $jml_katakan - 1;
        $cari = "SELECT * FROM web_berita LEFT JOIN web_kategori ON web_berita.id_kategori=web_kategori.id_kategori WHERE ";
        for ($i = 0; $i <= $jml_kata; $i++) {
            $cari .= "tag LIKE '%$pisah_kata[$i]%'";
            if ($i < $jml_kata) {
                $cari .= " OR ";
            }
        }
        $cari .= " ORDER BY id_berita DESC LIMIT $limit";
        return $this->db->query($cari);
    }

    function hitungberitakategori($kat) {
        return $this->db->query("SELECT * FROM web_berita where id_kategori='" . $this->db->escape_str($kat) . "'");
    }

    function page_detail($id) {
        return $this->db->query("SELECT * FROM web_halamanstatis where lower(replace(judul,' ','-'))='" . $this->db->escape_str($id) . "'");
    }

    function agenda($start, $limit) {
        return $this->db->query("SELECT * FROM web_agenda ORDER BY id_agenda DESC LIMIT $start, $limit");
    }
    
      function agenda_hari_ini($limit) {
        return $this->db->query("SELECT * FROM web_agenda WHERE DATE_FORMAT(tgl_mulai, '%Y-%m-%d')=CURDATE() OR DATE_FORMAT(tgl_mulai, '%Y-%m-%d') > CURDATE() ORDER BY DATE(tgl_mulai) ASC LIMIT $limit");
    }

    function hitungagenda() {
        return $this->db->query("SELECT * FROM web_agenda");
    }

    function agenda_detail($id) {
        return $this->db->query("SELECT * FROM web_agenda where tema_seo='" . $this->db->escape_str($id) . "'");
    }

    function index($start, $limit) {
        return $this->db->query("SELECT * FROM web_download ORDER BY id_download DESC LIMIT $start,$limit");
    }

    function updatehits($file) {
        return $this->db->query("UPDATE web_download set hits=hits+1 where nama_file='" . $this->db->escape_str($file) . "'");
    }

    function hitungdownload() {
        return $this->db->query("SELECT * FROM web_download");
    }

    function album($start, $limit) {
        return $this->db->query("SELECT * FROM web_album ORDER BY id_album DESC LIMIT $start, $limit");
    }

    function hitungalbum() {
        return $this->db->query("SELECT * FROM web_album");
    }

    function hitungfoto($album) {
        return $this->db->query("SELECT * FROM web_gallery where id_album='$album'");
    }

    function gallery($id, $start, $limit) {
        return $this->db->query("SELECT * FROM web_gallery where id_album='$id' ORDER BY id_gallery DESC LIMIT $start, $limit");
    }

    function kirim_Pesan() {
        $nama = $this->input->post('a');
        $email = $this->input->post('b');
        $telepon = $this->input->post('c');
        $subjek = $this->input->post('d');
        $kategori = $this->input->post('e');
        //$datapendukung = $this->input->post('f');
        $pesan = $this->input->post('g');
        $ip_address = $this->input->post('h');
        $datadb = array('nama' => $nama,
            'email' => $email,
            'telepon' => $telepon,
            'subjek' => $subjek,
            'id_kategori' => $kategori,
            //'file_pendukung' => $datapendukung,
            'pesan' => $pesan,
            'ip_address' => $ip_address,
            'tanggal' => date('Y-m-d'));
        $this->db->insert('hubungi', $datadb);
    }

    function vote($pilihan) {
        return $this->db->query("UPDATE web_poling SET rating=rating+1 WHERE id_poling='$pilihan'");
    }

    function jumlah_vote() {
        return $this->db->query("SELECT SUM(rating) as jml_vote FROM web_poling WHERE aktif='Y'");
    }

    function hasil_vote() {
        return $this->db->query("SELECT * FROM web_poling WHERE aktif='Y' and status='Jawaban'");
    }
    
    function terbaru(){
        return $this->db->query("SELECT a.*, b.NAMA AS nama_pegawai, c.* FROM web_berita a LEFT JOIN remunerasi_pegawai b ON a.username=b.NIP LEFT JOIN web_kategori c ON a.id_kategori=c.id_kategori WHERE a.is_aktif=1 AND is_publik=1 ORDER BY id_berita DESC limit 4 ");
    }
    
       function populer(){
        return $this->db->query("SELECT a.*, b.NAMA AS nama_pegawai, c.* FROM web_berita a LEFT JOIN remunerasi_pegawai b ON a.username=b.NIP LEFT JOIN web_kategori c ON a.id_kategori=c.id_kategori WHERE a.is_aktif=1 AND is_publik=1 ORDER BY dibaca DESC limit 4 ");
    }
    
    function berita_sdm_headline(){
        return $this->db->query("SELECT a.*, b.NAMA AS nama_pegawai, c.* FROM web_berita a LEFT JOIN remunerasi_pegawai b ON a.username=b.NIP LEFT JOIN web_kategori c ON a.id_kategori=c.id_kategori where a.id_kategori='33' AND a.is_aktif=1 AND is_publik=1 AND headline='Y' ORDER BY id_berita DESC limit 5");
    }
    
    function list_berita($idkat, $limit){
        return $this->db->query("SELECT a.*, b.NAMA AS nama_pegawai, c.* FROM web_berita a LEFT JOIN remunerasi_pegawai b ON a.username=b.NIP LEFT JOIN web_kategori c ON a.id_kategori=c.id_kategori where a.id_kategori='$idkat' AND a.is_aktif=1 AND is_publik=1 ORDER BY id_berita DESC limit $limit ");
    }
    
    function ambiltag(){
        return $this->db->query("SELECT * FROM web_tag");
    }
    
        function download($kat) {
        return $this->db->query("SELECT * FROM web_download WHERE kategori LIKE '%$kat' ORDER BY id_download DESC");
    }
    
    
}
