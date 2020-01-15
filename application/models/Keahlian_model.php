<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Keahlian_model extends CI_Model{
    private $_table = "keahlian";

    public $nama_keahlian;

    public function rules()
    {
        return [
            ['field' => 'nama_keahlian',
            'label' => 'nama_keahlian',
            'rules' => 'required']
        ];
    }
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getById($id){
        return $this->db->get_where($this->_table, ["id_keahlian" => $id_keahlian])->row();
    }
    
    public function save(){
        $post = $this->input->post();
        $this->nama_keahlian=$post["nama_keahlian"];
        $this->db->insert($this->_table, $this);
    }
    // public function update(){
    //     $post = $this->input->post();
    //     $this->nama_jabatan=$post["nama_keahlian"];
    //     $this->db->update($this->_table, $this, array('id_keahlian' => $post['id_keahlian']));
    // }

    public function ubah($data, $id_keahlian){
        $this->db->where('id_keahlian', $id_keahlian);
        $this->db->update($this->_table, $this, array('id_keahlian' => $post['id_keahlian']), $data);
        return TRUE;
    }

    public function delete($id_keahlian)
    {
        return $this->db->delete($this->_table, array("id_keahlian" => $id_keahlian));
    }

}