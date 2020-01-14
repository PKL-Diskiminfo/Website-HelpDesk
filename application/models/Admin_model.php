<?php  defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_Model{
    private $_table = "admin";

    public $nama_admin;
    public $email_admin;
    public $password_admin;
    public $kelamin_admin;
    public $foto_admin = "default.jpg";

    public function rules(){
        return[
            ['field'=>'nama_admin',
            'label' => 'nama_admin',
            'rules' => 'required'],

            ['field'=>'email_admin',
            'label' => 'email_admin',
            'rules' => 'required'],

            ['field'=>'password_admin',
            'label' => 'password_admin',
            'rules' => 'required']
        ];
    }
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getById($id){
        return $this->db->get_where($this->_table, ["id_admin" => $id_admin])->row();
    }
    public function save(){
        $post = $this->input->post();
        $this->nama_admin=$post["nama_admin"];
        $this->email_admin=$post["email_admin"];
        if (empty($post["password_admin"])){
            $this->password_admin=md5($post["nama_admin"]);
        } else {
            $this->password_admin=md5($post["password_admin"]) ;
        }   
        $this->kelamin_admin = $post["kelamin_admin"];     
        $this->id_instansi=$post["id_instansi"];
        $this->id_jabatan=$post["id_jabatan"];
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $this->nama_admin=$post["nama_admin"];
        $this->email_admin=$post["email_admin"];
        if (empty($post["password_admin"])){
            $this->password_admin=md5($post["nama_admin"]);
        } else {
            $this->password_admin=md5($post["password_admin"]) ;
        }        
        $this->kelamin_admin = $post["kelamin_admin"];
        if(!empty($_FILES["foto"]["name"])){
            $this->foto = $this->_uploadImage();
        } else{
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id_admin' => $post['id_admin']));
    }

    public function delete($id_admin)
    {
        return $this->db->delete($this->_table, array("id_admin" => $id_admin));
    }
    
    public function _uploadImage(){
        $config['upload_path']      = './foto/admin';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['file_name']        = $this->nama_admin;
        $config['overwrite']        = true;
        $config['max_size']         = 1024; //1MB
        // $config['max_width']        = 1024;
        // $config['max_height']       = 768;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto')){
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    public function _deleteImage($id_admin){
        $img = $this->getById($id_admin);
        if($img->foto != "default.jpg"){
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/admin/$filename.*"));
        }
    }
}