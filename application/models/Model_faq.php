<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_faq extends CI_model{
    
        function kategori_faq(){
        return $this->db->query("SELECT * FROM web_kategori ORDER BY id_kategori DESC");
    }
    
     function list_faq(){
        return $this->db->query("SELECT a.*, b.kategori_seo FROM web_faq a LEFT JOIN web_kategori b ON a.id_kategori=b.id_kategori ORDER BY a.id_faq DESC");
    }

    function list_faq_tambah(){

                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'isi_faq'=>$this->input->post('d'),
                                'is_aktif'=>$this->input->post('is_aktif'),
                                'is_publik'=>$this->input->post('is_publik'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dibaca'=>'0');
            
        $this->db->insert('web_faq',$datadb);
    }

    function list_faq_edit($id){
        return $this->db->query("SELECT * FROM web_faq where id_faq='$id'");
    }

    function list_faq_update(){

                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'isi_faq'=>$this->input->post('d'),
                                'is_aktif'=>$this->input->post('is_aktif'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dibaca'=>'0');
            
        $this->db->where('id_faq',$this->input->post('id'));
        $this->db->update('web_faq',$datadb);
    }

    function list_faq_delete($id){
        return $this->db->query("DELETE FROM web_faq where id_faq='$id'");
    }

    
    
}
