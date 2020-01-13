<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

    public function __construct(){
        parent :: __construct();
        $this->load->model(array(
            "User_model",
            "Instansi_model",
            "Jabatan_model"    ));
    }
    public function login(){
        $this->load->view('loginandregister/login_view');
    }

    public function register(){
        $data["instansi"] = $this->Instansi_model->getAll();
        $data["jabatan"] = $this->Jabatan_model->getAll();
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