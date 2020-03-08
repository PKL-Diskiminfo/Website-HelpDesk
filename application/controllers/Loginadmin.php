<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginadmin extends CI_Controller
{

    private $_admin    = "admin";
    // private $_user	= "user";

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            "User_model",
            "Admin_model",
            "Instansi_model",
            "Ticket_model"
        ));
        $this->load->library('session');

           if($this->session->userdata('email_admin')){
              echo "ada sesi";
                }else{
              echo "tidak";
                }
    }

    public function index()
    {
        $this->load->view('loginandregister/login_admin');
    }

    public function admin()
    {
        $email    = $this->input->post('email_admin');
        $password = md5($this->input->post('password_admin'));
        $hasil        = $this->Admin_model->login($email, $password);
        if ($hasil == 1) {
            $adminlogin    = $this->Admin_model->datauser($email, $password);
            $data_session = array(

                'username'    => $adminlogin['nama_admin'],
                'useremail'   => $adminlogin['email_admin'],
                'adminid'      => $adminlogin['id_admin']
            );
            $this->session->set_userdata($data_session);
            redirect('Admin');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Please correct your email or password</div>');
            redirect('loginadmin');
        }
    }
    
    public function logout()
	{
			$this->session->unset_userdata('admin');
			redirect(base_url("index"));
	}
}
