<?php  defined('BASEPATH') OR exit('No direct script access allowed');


class Ticket_model extends CI_Model{
    private $_table = "ticket";
   
    public $id_ticket;
    public $judul_ticket;
    public $no_ticket;
    public $tanggalkerusakan;
    public $deskripsi;
    public $status;
    public $balasan;
    public $update_at;
    
    public $id_user;
    public $id_instansi;
    

    public function save(){
      $post = $this->input->post();

      date_default_timezone_set('Asia/Jakarta');
      $this->id_user=$this->session->userdata('userid');
      $this->judul_ticket=$post["judul_ticket"];
      $this->no_ticket=date('siHYmd');
      $this->tanggalkerusakan=$post["tanggalkerusakan"];
      $this->deskripsi=$post["deskripsi"];
      $this->id_instansi=$this->session->userdata('idinstansi');
      $this->status=$post["status"]="Waiting";  
      $this->update_at = date('Y-m-d H:i:s');
      $this->balasan =$post["balasan"]="Waiting for reply";

      $this->db->insert($this->_table, $this);
     } 

     public function update(){
      $post = $this->input->post();

      date_default_timezone_set('Asia/Jakarta');
      $this->id_ticket=$post["id_ticket"];

      $this->id_user=$this->session->userdata('userid');
      $this->judul_ticket=$post["judul_ticket"];
      $this->no_ticket=date('siHYmd');
      $this->tanggalkerusakan=$post["tanggalkerusakan"];
      $this->deskripsi=$post["deskripsi"];
      $this->id_instansi=$this->session->userdata('idinstansi');
      $this->status=$post["status"]="Waiting";  
      $this->update_at = date('Y-m-d H:i:s');
      $this->balasan =$post["balasan"]="Waiting for reply";
  

        $this->db->update($this->_table, $this, array('id_ticket' => $post['id_ticket']));
    } 

    public function getAll(){ 
      return $this->db->get($this->_table)->result_array();
    }
    

    public function getById($id_ticket){
      return $this->db->get_where($this->_table, ["id_ticket" => $id_ticket])->row();
    }
    
    public function delete($id_ticket){
      return $this->db->delete($this->_table, array("id_ticket" => $id_ticket));

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

    function getViewTicket($id)
    {
      $this->db->where('id_ticket', $id);
      $query = $this->db->get_where($this->_table);
      return $query->row_array();
    }

}
