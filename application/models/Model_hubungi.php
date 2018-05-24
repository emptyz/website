<?php

class Model_hubungi extends CI_model {

    function pesan_masuk() {
        return $this->db->query("SELECT * FROM web_hubungi ORDER BY id_hubungi DESC");
    }

    function hitung_pesan_masuk() {
        return $this->db->query("SELECT * FROM web_hubungi WHERE is_read=0 ORDER BY id_hubungi DESC");
    }

    function pesan_baru($limit) {
        return $this->db->query("SELECT * FROM web_hubungi WHERE is_read=0 ORDER BY id_hubungi DESC LIMIT $limit");
    }

    function pesan_masuk_view($id) {
        return $this->db->query("SELECT * FROM web_hubungi where id_hubungi='$id'");
    }

    function pesan_masuk_kirim() {
        $nama = $this->input->post('a');
        $email = $this->input->post('b');
        $subject = $this->input->post('c');
        $message = $this->input->post('isi') . " <br><hr><br> " . $this->input->post('d');

        $rows = $this->model_users->users_edit($this->session->username)->row_array();
        $iden = $this->model_identitas->identitas()->row_array();
        $this->email->from($rows['email'], $iden['nama_website']);
        $this->email->to($email);
        $this->email->cc('');
        $this->email->bcc('');

        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype("html");
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'poke.ishol@gmail.com',
            'smtp_pass' => 'bismillah606!',
            'mailtype' => 'html',
            'charset' => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->send();

//        $config['protocol'] = 'sendmail';
//        $config['mailpath'] = 'C:\xampp\sendmail\sendmail.exe';
//        $config['charset'] = 'utf-8';
//        $config['wordwrap'] = TRUE;
//        $config['mailtype'] = 'html';
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
            'kategori' => $kategori,
            //'file_pendukung' => $datapendukung,
            'pesan' => $pesan,
            'ip_address' => $ip_address,
            'tanggal' => date('Y-m-d'));
        $this->db->insert('web_hubungi', $datadb);
    }
    
    function kirimpesan(){
                $nama = $this->input->post('a');
        $email = $this->input->post('b');
        $telepon = $this->input->post('c');
        $subjek = $this->input->post('d');
        $kategori = $this->input->post('e');
        $pesan = $this->input->post('g');
        return $this->db->query("INSERT INTO web_hubungi (nama, email, telepon, subjek, kategori, pesan, tanggal) VALUES ('$nama', '$email', '$telepon', '$subjek', '$kategori', '$pesan', date('Y-m-d'))");
    }
                function updateread($id) {
        return $this->db->query("UPDATE web_hubungi SET is_read=1 WHERE id_hubungi='$id'");
    }

    function delete_pesanmasuk($id) {
        return $this->db->query("DELETE FROM web_hubungi WHERE id_hubungi='$id'");
    }

}
