<?php 
class Model_users extends CI_model{
    function cek_login($username,$password){
        return $this->db->query("SELECT * FROM remunerasi_pegawai a LEFT  where username='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."'");
    }
    
    function login_remunerasi($username,$password){
        return $this->db->query("SELECT a.* , b.level as level FROM remunerasi_pegawai a LEFT JOIN web_hak_akses b ON a.NIP = b.id_remunerasi where NIP='".$this->db->escape_str($username)."' AND passwd='".$this->db->escape_str($password)."'");
    }
    
	function users(){
		return $this->db->query("SELECT * FROM web_users");
	}

	function users_tambah(){
        $datadb = array('username'=>$this->db->escape_str($this->input->post('a')),
                        'password'=>md5($this->input->post('b')),
                        'nama_lengkap'=>$this->db->escape_str($this->input->post('c')),
                        'email'=>$this->db->escape_str($this->input->post('d')),
                        'no_telp'=>$this->db->escape_str($this->input->post('e')),
                        'level'=>$this->db->escape_str($this->input->post('i')),
                        'blokir'=>'N',
                        'id_session'=>md5($this->input->post('a')));
        $this->db->insert('web_users',$datadb);
    }

    function users_edit($id){
        return $this->db->query("SELECT * FROM remunerasi_pegawai where NIP='$id'");
    }

    function users_update(){
        if (trim($this->input->post('b'))==''){
            $datadb = array('username'=>$this->db->escape_str($this->input->post('a')),
                            'nama_lengkap'=>$this->db->escape_str($this->input->post('c')),
                            'email'=>$this->db->escape_str($this->input->post('d')),
                            'no_telp'=>$this->db->escape_str($this->input->post('e')),
                            'blokir'=>$this->db->escape_str($this->input->post('h')),
                            'id_session'=>md5($this->input->post('a')));
            $this->db->where('username',$this->input->post('id'));
            $this->db->update('web_users',$datadb);
        }else{
            $datadb = array('username'=>$this->db->escape_str($this->input->post('a')),
                            'password'=>md5($this->input->post('b')),
                            'nama_lengkap'=>$this->db->escape_str($this->input->post('c')),
                            'email'=>$this->db->escape_str($this->input->post('d')),
                            'no_telp'=>$this->db->escape_str($this->input->post('e')),
                            'blokir'=>$this->db->escape_str($this->input->post('h')),
                            'id_session'=>md5($this->input->post('a')));
            $this->db->where('username',$this->input->post('id'));
            $this->db->update('web_users',$datadb);
        }
    }

    function users_delete($id){
        return $this->db->query("DELETE FROM web_users where username='$id'");
    }

}