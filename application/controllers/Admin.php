<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("Instansi_model");
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/home');    
        $this->load->view('template_admin/footer');
    }

    // INSTANSI 
    public function instansi(){
        $data["instansi"]= $this->Instansi_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_instansi',$data);    
        $this->load->view('template_admin/footer');
    }
    public function addinstansi(){
        $tambah = $this->Instansi_model;
        $validation =$this->form_validation;
        $validation->set_rules($tambah->rules());
        if($validation->run()){
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');

        }
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_add_instansi',$tambah);    
        $this->load->view('template_admin/footer');   
    }

}