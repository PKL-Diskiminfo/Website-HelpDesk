<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller{

    public function index(){
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/home');    
            $this->load->view('template_admin/footer');


    }


}