<?php  defined('BASEPATH') OR exit('No direct script access allowed');


class Teknisi_model extends CI_Model{
    private $_table = "keluhan";

    public $id_keluhan;
    public $nama_keluhan;

    public function rules(){
        return[
            ['field'=>'nama_keluhan',
            'label' => 'nama_keluhan',
            'rules' => 'required']
        ];
    }
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getById($id_teknisi){
        return $this->db->get_where($this->_table, ["id_keluhan" => $id_keluhan])->row();
    }
    public function save(){
        $post = $this->input->post();
        $this->id_keluhan=$post["id_keluhan"];
        $this->nama_keluhan=$post["nama_keluhan"];

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update(){
        $post = $this->input->post();

        $this->id_keluhan=$post["id_keluhan"];
        $this->nama_keluhan=$post["nama_keluhan"];

        $this->db->update($this->_table, $this, array('id_keluhan' => $post['id_keluhan']));
    }

    public function delete($id_keluhan)
    {
        return $this->db->delete($this->_table, array("id_keluhan" => $id_keluhan));
    }



}