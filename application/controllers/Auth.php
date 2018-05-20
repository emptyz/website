<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index() {
        if ($this->session->userdata('islogin')) {
            redirect('utama');
        } else {
            $this->load->view('auth/login');
        }
    }

//    function login() {
//        if (isset($_POST['submit'])) {
//            
//            $username = $this->input->post('a');
//            $password = md5($this->input->post('b'));
//            $cek = $this->model_users->cek_login($username, $password);
//            $row = $cek->row_array();
//            $total = $cek->num_rows();
//            if ($total > 0) {
//                $this->session->set_userdata('upload_image_file_manager', true);
//                $this->session->set_userdata('islogin', true);
//                $this->session->set_userdata(array('username' => $row['username'],
//                    'nama_lengkap' => $row['nama_lengkap'],
//                    'level' => $row['level']));
//                //echo $this->session->userdata('url');
//                redirect($this->session->userdata('url'));
//            } else {
//                $this->session->set_flashdata('warning', '<strong>Login gagal!</strong> Silahkan cek username / password anda kembali.');
//                $this->template->load(template() . '/template', template() . '/view_login');
//            }
//        } else {
//            if ($this->session->level != '') {
//                redirect('administrator/home');
//            } else {
//                $this->template->load(template() . '/template', template() . '/view_login');
//            }
//        }
//    }
    
        function login() {
        if (isset($_POST['submit'])) {
            
            $username = $this->input->post('a');
            $password = $this->input->post('b');
            $cek = $this->model_users->login_remunerasi($username, $password);
            $row = $cek->row_array();
            $total = $cek->num_rows();
            if ($total > 0) {
                $this->session->set_userdata('upload_image_file_manager', true);
                $this->session->set_userdata('islogin', true);
                $this->session->set_userdata(array('nama' => $row['NAMA'],
                    'nip' => $row['NIP'],
                    'foto' => $row['foto'],
                    'level' => $row['level']));
                //echo $this->session->userdata('url');
                redirect($this->session->userdata('url'));
            } else {
                $this->session->set_flashdata('warning', '<strong>Login gagal!</strong> Silahkan cek username / password anda kembali.');
                $this->template->load(template() . '/template', template() . '/view_login');
            }
        } else {
            if ($this->session->level != '') {
                redirect('administrator/home');
            } else {
                $this->template->load(template() . '/template', template() . '/view_login');
            }
        }
    }
    
    function pesan(){
        
        $this->template->load(template() . '/template', template() . '/view_pesan');
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
