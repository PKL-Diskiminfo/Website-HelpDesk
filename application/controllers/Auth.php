<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

    private $_admin	= "admin";
    private $_user	= "user";

    public function __construct(){
        parent :: __construct();
        $this->load->library('session');
        $this->load->model(array(
            "User_model",
            "Admin_model",
            "Instansi_model",
            "Ticket_model"  ));
       if($this->session->userdata('email_admin')){
          echo "ada sesi";
            }else{
          echo "tidak";
            }
    }
    public function index(){
        $this->load->view('loginandregister/login_view');
    }
    
    public function login()
    {
      $email    = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$hasil		= $this->User_model->login($email,$password);
			if ($hasil==1) {
			$userlogin	= $this->User_model->datauser($email,$password);
			$data_session = array(
								'username'    => $userlogin['nama_user'],
                'useremail'   => $userlogin['email_user'],
                'userid'      => $userlogin['id_user'],
                'idinstansi'  => $userlogin['id_instansi']
                
							);
			$this->session->set_userdata($data_session);
			   redirect('dashboard');
			}else{
				 $this->session->set_flashdata('message', 'Please correct your email or password.');
				 redirect('auth');
			}
    }
    
    public function register(){
        $data["instansi"] = $this->Instansi_model->getAll();
        $this->load->view('loginandregister/register_view',$data);
    }



    // BackEnd
    public function userAdd()
    {
        	$tambah = $this->User_model;
          $tambah->save();
			    $this->session->set_flashdata('success', 'Berhasil Daftar, Silahkan Login');
        	redirect('Auth/login');
    }

}
 