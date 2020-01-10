<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

    public function login(){
        $this->load->view('loginandregister/login_view');
    }
}