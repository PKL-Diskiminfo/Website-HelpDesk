<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model{
    private $_table = "jabatan";

    public $id_jabatan;
    public $nama_jabatan;

    public function rules()
    {
        return [
            ['field' => 'nama_jabatan',
            'label' => 'nama_jabatan',
            'rules' => 'required']
        ];
    }
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getById($id_jabatan){
        return $this->db->get_where($this->_table, ["id_jabatan" => $id_jabatan])->row();
    }
    
    public function save(){
        $post = $this->input->post();
        $this->nama_jabatan=$post["nama_jabatan"];
        $this->db->insert($this->_table, $this);
    }
    public function update(){
        $post = $this->input->post();
        $this->nama_jabatan=$post["nama_jabatan"];
        $this->db->update($this->_table, $this, array('id_jabatan' => $post['id_jabatan']));
    }

    public function delete($id_jabatan, $where)
    {
        return $this->db->delete($this->_table, array("id_jabatan" => $id_jabatan));
    }

}