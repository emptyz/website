<?php 
class Model_template extends CI_model{
    function template(){
        return $this->db->query("SELECT * FROM web_templates");
    }

    function template_tambah(){
        $datadb = array('judul'=>$this->db->escape_str($this->input->post('a')),
                        'pembuat'=>$this->db->escape_str($this->input->post('b')),
                        'folder'=>$this->db->escape_str($this->input->post('c')),
                        'aktif'=>$this->db->escape_str($this->input->post('d')));
        $this->db->insert('web_templates',$datadb);
    }

    function template_update(){
        $datadb = array('judul'=>$this->db->escape_str($this->input->post('a')),
                        'pembuat'=>$this->db->escape_str($this->input->post('b')),
                        'folder'=>$this->db->escape_str($this->input->post('c')),
                        'aktif'=>$this->db->escape_str($this->input->post('d')));
        $this->db->where('id_templates',$this->input->post('id'));
        $this->db->update('web_templates',$datadb);
    }

    function template_edit($id){
        return $this->db->query("SELECT * FROM web_templates where id_templates='$id'");
    }

    function template_delete($id){
        return $this->db->query("DELETE FROM web_templates where id_templates='$id'");
    }
}