<?php  defined('BASEPATH') OR exit('No direct script access allowed');


class Teknisi_model extends CI_Model{
    private $_table = "teknisi";

    public $id_teknisi;
    public $nama_teknisi;
    public $kelamin_teknisi;
    public $email_teknisi;
    public $password_teknisi;
    public $notelp_teknisi;

    public function rules(){
        return[
            ['field'=>'nama_teknisi',
            'label' => 'nama_teknisi',
            'rules' => 'required'],

            ['field'=>'kelamin_teknisi',
            'label' => 'kelamin_teknisi',
            'rules' => 'required'],

            ['field'=>'email_teknisi',
            'label' => 'email_teknisi',
            'rules' => 'required'],

            ['field'=>'password_teknisi',
            'label' => 'password_teknisi',
            'rules' => 'required'],

            ['field'=>'notelp_teknisi',
            'label' => 'notelp_teknisi',
            'rules' => 'required']
        ];
    }
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getById($id_teknisi){
        return $this->db->get_where($this->_table, ["id_teknisi" => $id_teknisi])->row();
    }
    public function save(){
        $post = $this->input->post();
        $this->id_teknisi=$post["id_teknisi"];
        $this->nama_teknisi=$post["nama_teknisi"];
        $this->kelamin_teknisi = $post["kelamin_teknisi"];

        $this->email_teknisi=$post["email_teknisi"];
        if (empty($post["password_teknisi"])){
            $this->password_teknisi=md5($post["nama_teknisi"]);
        } else {
            $this->password_teknisi=md5($post["password_teknisi"]) ;
        }        
        $this->notelp_teknisi=$post["notelp_teknisi"];

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update(){
        $post = $this->input->post();

        $this->id_teknisi=$post["id_teknisi"];
        $this->nama_teknisi=$post["nama_teknisi"];
        $this->email_teknisi=$post["email_teknisi"];
        $this->kelamin_teknisi = $post["kelamin_teknisi"];

        $this->notelp_teknisi = $post["notelp_teknisi"];

        $this->db->update($this->_table, $this, array('id_teknisi' => $post['id_teknisi']));
    }

    public function delete($id_teknisi)
    {
        return $this->db->delete($this->_table, array("id_teknisi" => $id_teknisi));
    }

}