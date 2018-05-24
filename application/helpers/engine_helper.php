<?php

function cek_session_all() {
    $ci = & get_instance();
    $session = $ci->session->islogin;
    if ($session == FALSE) {
        $ci->session->set_flashdata('warning', '<strong>Maaf!</strong> Anda tidak berhak mengakses halaman ini. Silahkan login terlebih dahulu.');
        redirect(base_url() . 'auth/login');
    }
}

function cek_session_admin() {
    $ci = & get_instance();
    $session = ($ci->session->level == 'admin');
    $ci->session->set_flashdata('pesanwarning', 'warning');
    if ($session == '') {
        $ci->session->set_flashdata('warning', 'Maaf anda tidak berhak mengakses halaman ini.');
        redirect(base_url() . 'auth/pesan');
    }
}

function cek_session_opadmin() {
    $ci = & get_instance();
    $session = array($ci->session->level == 'admin',
        $ci->session->level == 'operator');
    $ci->session->set_flashdata('pesanwarning', 'warning');
    if ($session == '') {
        $ci->session->set_flashdata('warning', 'Maaf anda tidak berhak mengakses halaman ini.');
        redirect(base_url() . 'auth/pesan');
    }
}

function cek_session_user() {
    $ci = & get_instance();
    $session = ($ci->session->level == '');
    if ($session == '') {
        $ci->session->set_flashdata('warning', 'Maaf anda tidak berhak mengakses halaman ini.');
        redirect(base_url() . 'auth/pesan');
    }
}

function cek_session_operator() {
    $ci = & get_instance();
    $session = ($ci->session->level == 'operator');
    if ($session == '') {
        $ci->session->set_flashdata('warning', 'Maaf anda tidak berhak mengakses halaman ini.');
        redirect(base_url() . 'auth/pesan');
    }
}

function cek_session_akses($link, $id) {
    $ci = & get_instance();
    $session = $ci->db->query("SELECT * FROM web_modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'")->num_rows();
    if ($session == '0' AND $ci->session->userdata('level') != 'admin') {
        redirect(base_url() . 'administrator/home');
    }
}

function template() {
    $ci = & get_instance();
    $query = $ci->db->query("SELECT folder FROM web_templates where aktif='Y'");
    $tmp = $query->row_array();
    if ($query->num_rows() >= 1) {
        return $tmp['folder'];
    } else {
        return 'errors';
    }
}
