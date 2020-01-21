<?php  defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model{
    private $_table = "user";

    public $id_user;
    public $nama_user;
    public $email_user;
    public $password_user;
    public $kelamin_user;

    public $id_instansi;
    public $id_jabatan;

    public function rules(){
        return[
            ['field'=>'nama_user',
            'label' => 'nama_user',
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
        $this->kelamin_user = $post["kelamin_user"];

        $this->email_user=$post["email_user"];
        if (empty($post["password_user"])){
            $this->password_user=md5($post["nama_user"]);
        } else {
            $this->password_user=md5($post["password_user"]) ;
        }
        $this->id_instansi=$post["id_instansi"];
        $this->id_jabatan=$post["id_jabatan"];
        $this->db->insert($this->_table, $this);
        //var_dump($post);
    }

    public function update(){
        $this->nama_user=$post["nama_user"];
        $this->email_user=$post["email_user"];
        $this->kelamin_user = $post["kelamin_user"];

        if (empty($post["password_user"])){
            $this->password=md5($post["nama_user"]);
        } else {
            $this->password=md5($post["password_user"]) ;
        }
        $this->id_instansi=$post["id_instansi"];
        $this->id_jabatan=$post["id_jabatan"];

        $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
    }

    public function delete($id_user)
    {
        return $this->db->delete($this->_table, array("id_user" => $id_user));
    }

    function login($email,$password){
        
        $check = $this->db->get_where($this->_table, array('email_user'=>$email, 'password_user'=>$password));
  		if($check->num_rows()>0){
  			return 1;
  		}else{
  			return 0;
  		}
  	}

  	function datauser($email,$password)
  	{
  		$query    = $this->db->get_where($this->_table, array('email_user'=>$email, 'password_user'=>$password));
  		$result   = $query->row_array();

  		return $result;
  	}

}
