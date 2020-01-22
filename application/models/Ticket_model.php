<?php  defined('BASEPATH') OR exit('No direct script access allowed');


class Ticket_model extends CI_Model{
    private $_table = "ticket";
   
    public $id_ticket;
    public $judul_ticket;
    public $no_ticket;
    public $deskripsi;
    public $status;
    public $balasan;
    public $id_user;
    public $update_at;
  

    public function save(){
      $post = $this->input->post();
      date_default_timezone_set('Asia/Jakarta');
      $this->id_user=$this->session->userdata('userid');
      $this->judul_ticket=$post["judul_ticket"];
      $this->no_ticket=date('siHYmd');
      $this->deskripsi=$post["deskripsi"];
      $this->update_at = date('Y-m-d H:i:s');
      $this->db->insert($this->_table, $this);
     } 

    public function getAll(){ 
      return $this->db->get($this->_table)->result_array();
    }
    

    public function getById($id_ticket){
      return $this->db->get_where($this->_table, ["id_ticket" => $id_ticket])->row();
    }
    
    
    




     public function _status(){

    }
    // public function add($data)
    // {
    //   $this->db->insert($this->_table, $data);
    // }

    // function list_ticket($userid)
    // {
    //   $this->db->where('id_user', $userid);
    //   $this->db->order_by('update_at', 'DESC');
    //   $query = $this->db->get($this->_table);
    //   return $query->result_array();
    // }

    // function getticket($id)
    // {
    //   $this->db->where('id_ticket', $id);
    //   $query = $this->db->get_where($this->_table);
    //   return $query->row_array();
    // }

}
