<?php

class Model_menu extends CI_model {

    function menuutama() {
        return $this->db->query("SELECT * FROM web_mainmenu ORDER BY urutan ASC");
    }

    function menuutama_tambah() {
        $datadb = array('nama_menu' => $this->db->escape_str($this->input->post('a')),
            'link' => $this->db->escape_str($this->input->post('b')),
            'aktif' => $this->db->escape_str($this->input->post('c')),
            'urutan' => $this->db->escape_str($this->input->post('e')),
            'adminmenu' => $this->db->escape_str($this->input->post('d')),
             'opmenu' => $this->db->escape_str($this->input->post('f')));
        $this->db->insert('web_mainmenu', $datadb);
    }

    function menuutama_update() {
        $datadb = array('urutan' => $this->db->escape_str($this->input->post('e')),
            'nama_menu' => $this->db->escape_str($this->input->post('a')),
            'link' => $this->db->escape_str($this->input->post('b')),
            'aktif' => $this->db->escape_str($this->input->post('c')),
            'adminmenu' => $this->db->escape_str($this->input->post('d')),
             'opmenu' => $this->db->escape_str($this->input->post('f')));
        $this->db->where('id_main', $this->input->post('id'));
        $this->db->update('web_mainmenu', $datadb);
    }

    function menuutama_edit($id) {
        return $this->db->query("SELECT * FROM web_mainmenu where id_main='$id'");
    }

    function menuutama_delete($id) {
        return $this->db->query("DELETE FROM web_mainmenu where id_main='$id'");
    }

    function submenu() {
        return $this->db->query("SELECT a.*, b.nama_menu FROM web_submenu a LEFT JOIN web_mainmenu b ON a.id_main=b.id_main");
    }

    function cek_menuutama() {
        return $this->db->query("SELECT * FROM web_mainmenu ");
    }

    function cek_submenu() {
        return $this->db->query("SELECT * FROM web_submenu");
    }

    function submenu_tambah() {
        $datadb = array('nama_sub' => $this->db->escape_str($this->input->post('a')),
            'link_sub' => $this->db->escape_str($this->input->post('d')),
            'id_main' => $this->db->escape_str($this->input->post('b')),
            'id_submain' => $this->db->escape_str($this->input->post('c')),
            'aktif' => $this->db->escape_str($this->input->post('e')),
            'adminsubmenu' => $this->db->escape_str($this->input->post('f')),
            'opsubmenu' => $this->db->escape_str($this->input->post('g')),
            'urutan' => $this->db->escape_str($this->input->post('urutan')));
        $this->db->insert('web_submenu', $datadb);
    }

    function submenu_update() {
        $datadb = array('nama_sub' => $this->db->escape_str($this->input->post('a')),
            'link_sub' => $this->db->escape_str($this->input->post('d')),
            'id_main' => $this->db->escape_str($this->input->post('b')),
            'id_submain' => $this->db->escape_str($this->input->post('c')),
            'aktif' => $this->db->escape_str($this->input->post('e')),
            'adminsubmenu' => $this->db->escape_str($this->input->post('f')),
            'opsubmenu' => $this->db->escape_str($this->input->post('g')),
            'urutan' => $this->db->escape_str($this->input->post('urutan')));
        $this->db->where('id_sub', $this->input->post('id'));
        $this->db->update('web_submenu', $datadb);
    }

    function submenu_edit($id) {
        return $this->db->query("SELECT * FROM web_submenu where id_sub='$id'");
    }

    function submenu_delete($id) {
        return $this->db->query("DELETE FROM web_submenu where id_sub='$id'");
    }

    function mainmenu_admin() {
        return $this->db->query("SELECT * FROM web_mainmenu WHERE aktif = 'N' AND adminmenu= 'Y' ORDER BY urutan ASC");
    }

    function submenu_admin($id_main) {
        return $this->db->query("SELECT * FROM web_submenu, web_mainmenu WHERE web_submenu.id_main = web_mainmenu.id_main AND web_submenu.id_main='$id_main' AND web_submenu.aktif='N' AND web_submenu.adminsubmenu='Y' ORDER BY web_submenu.urutan ASC");
    }

    function mainmenu_user() {
        return $this->db->query("SELECT * FROM web_modul where status='user' and aktif='Y' order by urutan ASC");
    }

    function mainmenu_operator() {
        return $this->db->query("SELECT * FROM web_mainmenu where aktif = 'N' AND opmenu= 'Y'  order by urutan ASC");
    }
    
    function submenu_operator($id_main) {
        return $this->db->query("SELECT * FROM web_submenu, web_mainmenu WHERE web_submenu.id_main = web_mainmenu.id_main AND web_submenu.id_main='$id_main' AND web_submenu.aktif='N' AND web_submenu.opsubmenu='Y' ORDER BY web_submenu.urutan ASC");
    }
    
    

}
