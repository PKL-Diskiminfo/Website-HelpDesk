<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisi extends CI_Controller {

	public function __construct(){
			parent :: __construct();
			$this->load->model(array(
				"Ticket_model",
				"Instansi_model" ,
				"User_model"));
		//  if(empty($this->session->userdata('userid'))){
		// 		redirect('auth');
		// 	}
		// 	$this->load->helper('date');

    }

    public function index(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar_teknisi');
		$this->load->view('teknisi/dashboard');
		$this->load->view('template_admin/footer');
    }
}