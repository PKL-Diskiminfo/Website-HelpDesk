<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi_model extends CI_Model{
    private $_table = "user";

    public $id_user;
    public $nama_user;
    public $email_user;
    public $pass_user;

    public function rules()
    {
        return [
            ['field' => 'nama_user',
            'label' => 'nama_user',
            'rules' => 'required'],

            ['field' => 'email_user',
            'label' => 'email_user',
            'rules' => 'required'],

            ['field' => 'pass_user',
            'label' => 'pass_user',
            'rules' => 'required']
        ];
    }
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getById($id){
        return $this->db->get_where($this->_table, ["id_user" => $id_user])->row();
    }
    
    public function save(){
        $post = $this->input->post();
        $this->nama_user=$post["nama_user"];
        $this->email_user=$post["email_user"];
        $this->pass_user=$post["pass_user"];
        $this->db->insert($this->_table, $this);
    }
    public function update(){
        $post = $this->input->post();
        $this->nama_user=$post["nama_user"];
        $this->email_user=$post["email_user"];
        $this->pass_user=$post["pass_user"];
        $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
    }

    public function delete($id_user)
    {
        return $this->db->delete($this->_table, array("id_user" => $id_user));
    }

}