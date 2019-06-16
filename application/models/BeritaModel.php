<?php

class BeritaModel extends CI_Model {

    public $judul, $url;
    public $isi;
    public $kategori;
    public $tgl_ambil;

    public function get_all_berita()
    {
        $query=$this->db->get('tb_berita');
        return $query->result();
    }

    public function get_data_berita($key)
    {
        $query=$this->db->get_where('tb_berita', $key);
        return $query->result();
    }
    
    public function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    public function insert_entry()
    {
        $this->judul=$this->input->post('judul'); // please read the below note
        $this->isi=$this->input->post('isi');
        $this->kategori=$this->input->post('kategori');
        $this->tgl_ambil=date('Y-m-d h:i:s', time());
        $this->url=date('Ymd_his.a', time());

        $this->db->insert('tb_berita', $this);
    }

    public function update_entry($key)
    {
        $this->judul=$this->input->post('judul'); // please read the below note
        $this->isi=$this->input->post('isi');
        $this->kategori=$this->input->post('kategori');
        $this->tgl_ambil=$this->input->post('tgl');
        $this->url=$this->input->post('url');

        $this->db->update('tb_berita', $this, $key);
    }

    public function delete_data()
    {
        $this->db->where('id', $this->input->post('id'));
        $this->db->delete('tb_berita');
    }

}