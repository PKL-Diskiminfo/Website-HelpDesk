<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi_model extends CI_Model{
    private $_table = "indikator";

    public $id_instansi;
    public $nama_instansi;

    public function rules()
    {
        return [
            ['field' => 'nama_indikator',
            'label' => 'nama_indikator',
            'rules' => 'required']
        ];
    }
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getById($id_instansi){
        return $this->db->get_where($this->_table, ["id_indikator" => $id_indikator])->row();
    }
    
    public function save(){
        $post = $this->input->post();
        $this->id_instansi=$post["id_instansi"];
        $this->nama_instansi=$post["nama_instansi"];
        $this->alamat_instansi=$post["alamat_instansi"];
        $this->db->insert($this->_table, $this);
    }
    public function update(){
        $post = $this->input->post();
        $this->id_instansi=$post["id_instansi"];
        $this->nama_instansi=$post["nama_instansi"];
        $this->alamat_instansi=$post["alamat_instansi"];
        $this->db->update($this->_table, $this, array('id_instansi' => $post['id_instansi']));
    }

    public function delete($id_instansi)
    {
        return $this->db->delete($this->_table, array("id_instansi" => $id_instansi));
    }

}