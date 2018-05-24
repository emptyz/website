<?php 
class Model_modul extends CI_model{
	function modul(){
		return $this->db->query("SELECT * FROM web_modul");
	}

    function users_modul(){
        return $this->db->query("SELECT * FROM web_modul");
    }

	function modul_tambah(){
        $datadb = array('nama_modul'=>$this->db->escape_str($this->input->post('a')),
                        'link'=>$this->db->escape_str($this->input->post('b')),
                        'static_content'=>'',
                        'gambar'=>'',
                        'publish'=>$this->db->escape_str($this->input->post('c')),
                        'status'=>$this->db->escape_str($this->input->post('e')),
                        'aktif'=>$this->db->escape_str($this->input->post('d')),
                        'urutan'=>$this->db->escape_str($this->input->post('urutan')),
                        'link_seo'=>'');
        $this->db->insert('web_modul',$datadb);
    }

    function modul_update(){
        $datadb = array('nama_modul'=>$this->db->escape_str($this->input->post('a')),
                        'link'=>$this->db->escape_str($this->input->post('b')),
                        'static_content'=>'',
                        'gambar'=>'',
                        'publish'=>$this->db->escape_str($this->input->post('c')),
                        'status'=>$this->db->escape_str($this->input->post('e')),
                        'aktif'=>$this->db->escape_str($this->input->post('d')),
                        'urutan'=>$this->db->escape_str($this->input->post('f')),
                        'link_seo'=>'');
        $this->db->where('id_modul',$this->input->post('id'));
        $this->db->update('web_modul',$datadb);
    }

    function modul_edit($id){
        return $this->db->query("SELECT * FROM web_modul where id_modul='$id'");
    }

    function modul_delete($id){
        return $this->db->query("DELETE FROM web_modul where id_modul='$id'");
    }
    
    function last_urutan(){
        return $this->db->query("SELECT urutan FROM web_modul WHERE status='operator' ORDER BY urutan DESC limit 1 offset 1");
    }

}