<?php
class Login_model extends CI_Model {

    public $username;
    public $password;

    public function cek_login()
    {
        $result=false;
        $this->username=$this->input->post('username');
        $this->password=md5($this->input->post('password'));
        $key=array(
            'username'=>$this->username,
            'password'=>$this->password
        );
        $cek=$this->db->get_where('tb_user', $key)->num_rows();
        if($cek>0) $result=true;
        return $result;
    }

    public function get_data()
    {
        $key=array(
            'username'=>$this->username
        );
        $query=$this->db->get_where('tb_user', $key);
        return $query->result();
    }
}