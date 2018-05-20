<?php

class Model_hubungi extends CI_model {

    function pesan_masuk() {
        return $this->db->query("SELECT * FROM hubungi ORDER BY id_hubungi DESC");
    }

    function hitung_pesan_masuk() {
        return $this->db->query("SELECT * FROM hubungi WHERE is_read=0 ORDER BY id_hubungi DESC");
    }

    function pesan_baru($limit) {
        return $this->db->query("SELECT * FROM hubungi WHERE is_read=0 ORDER BY id_hubungi DESC LIMIT $limit");
    }

    function pesan_masuk_view($id) {
        return $this->db->query("SELECT * FROM hubungi where id_hubungi='$id'");
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
        $subjek = $this->input->post('c');
        $pesan = $this->input->post('d');
        $datadb = array('nama' => $nama,
            'email' => $email,
            'subjek' => $subjek,
            'pesan' => $pesan,
            'tanggal' => date('Y-m-d'));
        $this->db->insert('hubungi', $datadb);
    }

    function updateread($id) {
        return $this->db->query("UPDATE hubungi SET is_read=1 WHERE id_hubungi='$id'");
    }

    function delete_pesanmasuk($id) {
        return $this->db->query("DELETE FROM hubungi WHERE id_hubungi='$id'");
    }

}
