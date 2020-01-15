<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model(array(
            "Instansi_model",
            "Jabatan_model",
            "User_model",
            "Keahlian_model",
            "Teknisi_model",
            "Admin_model")
        );
        $this->load->library('form_validation');
    }

    // =========BACK END CREATE===============
    public function adminAdd(){
        $tambah = $this->Admin_model;
        $tambah->save();
        $this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        redirect('Admin/admin');
    }
    
    public function jabatanAdd(){
        $tambah = $this->Jabatan_model;
        $tambah->save();
        $this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        redirect('Admin/jabatan');
    }
    public function teknisiAdd(){
        $tambah = $this->Teknisi_model;
        $tambah->save();
        $this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        redirect('Admin/teknisi');
    }
    public function userAdd()
    {
        	$tambah = $this->User_model;
            $tambah->save();
			$this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        	redirect('Admin/index');
    }
    public function keahlianAdd()
    {
        	$tambah = $this->Keahlian_model;
            $tambah->save();
			$this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        	redirect('Admin/keahlian');
    }

    //=============BACKEND EDIT==================================
    public function keahlianEdit(){
        $id_keahlian = $this->input->post('id_keahlian');
        $data = array(
            'nama_keahlian' => $this->input->post("nama_keahlian")
        );
        $this->Keahlian_model->ubah($data, $id_keahlian);
        $this->session->set_flashdata('success', 'Data Berhasil diubah');
        redirect('Admin/keahlian');
    }


//========BACK END EDIT=====================//
    public function instansiEdit($id_instansi= null){
       if(!isset($id_instansi)) redirect('Admin/instansi');
       $var= $this->Instansi_model;
       $validation=$this->form_validation;
       $validation->set_rules($var->rules());
       
       if($validation->run()){
           $var->update();
            $this->session->set_flashdata('success','Berhasil Disimpan');
        }
        $data["instansi"]= $var->getById($id_instansi);
        if(!$data["instansi"]) show_404();    
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_edit_instansi',$data);    
        $this->load->view('template_admin/footer');    
    }


    // =================INDEX============//
    public function index(){
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/home');    
        $this->load->view('template_admin/footer');
    }

    // ================ADMIN ==================//
    public function admin(){
        $data["admin"]= $this->Admin_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_admin',$data);    
        $this->load->view('template_admin/footer');
    }
    public function addadmin(){
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_add_admin');    
        $this->load->view('template_admin/footer');
    }


    //===============INSTANSI===============// 
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

    //USER
    public function user(){
        $data["instansi"]=$this->Instansi_model->getAll();
        $data["jabatan"]=$this->Jabatan_model->getAll();
        $data["user"]=$this->User_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_user',$data);    
        $this->load->view('template_admin/footer');       
    }


    public function addUser(){
        $data["instansi"] = $this->Instansi_model->getAll();
        $data["jabatan"] = $this->Jabatan_model->getAll();
        $tambah = $this->User_model;
        
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_add_user',$data,$tambah);    
        $this->load->view('template_admin/footer'); 
    }

    

    //==============JABATAN==============
    public function jabatan(){
        $data["jabatan"]= $this->Jabatan_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_jabatan',$data);    
        $this->load->view('template_admin/footer');   
    }

    public function addjabatan(){
        $tambah = $this->Jabatan_model;

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_add_jabatan', $tambah);    
        $this->load->view('template_admin/footer');

    }
    
    
    //Teknisi
    public function teknisi(){
        $data["keahlian"]= $this->Keahlian_model->getAll();
        $data["teknisi"]= $this->Teknisi_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_teknisi',$data);    
        $this->load->view('template_admin/footer');
     
    }
        
    public function addTeknisi(){
        $data["keahlian"] = $this->Keahlian_model->getAll();
        $tambah = $this->Teknisi_model;
        
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_add_teknisi',$data,$tambah);    
        $this->load->view('template_admin/footer'); 
    }


    //Keahlian
    public function keahlian(){
        $data["keahlian"]= $this->Keahlian_model->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_keahlian',$data);    
        $this->load->view('template_admin/footer');
    }

    public function addkeahlian(){
        $tambah = $this->Keahlian_model;

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/view_add_keahlian', $tambah);    
        $this->load->view('template_admin/footer');
    }
}