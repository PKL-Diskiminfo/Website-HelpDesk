<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
			parent :: __construct();
			$this->load->model(array(
				"Ticket_model",
				"Instansi_model" ,
				"User_model"));
		 if(empty($this->session->userdata('userid'))){
				redirect('auth');
			}
			$this->load->helper('date');

	}

	public function index()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar_user');

		$this->load->view('user/index');
		$this->load->view('template_admin/footer');

	}

	public function actionaddticket()
	{
		$data = array(
				'judul_ticket'      		  => $this->input->post('judul_ticket'),
				'no_ticket'       			=> date('sihYmd'),
				'id_user'          				=> $this->session->userdata('userid'),
				'deskripsi' 		   		  => $this->input->post('deskripsi'),
				'status'     							=> 'Waiting',
				'update_at'								=> date('Y-m-d h:i:s')
		);

		$this->Ticket_model->add($data);
		redirect('user/ticket');
	}

	
	function ticketPerson()
	{
		$var= $this->User_model;
		$data['data'] = $this->Ticket_model->getAll();
		// $data[' instansi'] = $this->Instansi_model->getById();
		$data["user"]= $var->getById('iduser');

		// $data['data'] = $this->Ticket_model->list_ticket($this->session->userdata('userid'));
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar_user');
		$this->load->view('user/data_ticketing', $data);
		$this->load->view('template_admin/footer');
	}
	function ticket()
	{
		$var= $this->Instansi_model;
		$data['data'] = $this->Ticket_model->getAll();
		// $data[' instansi'] = $this->Instansi_model->getById();
		$data["instansi"]= $var->getById('idinstansi');

		// $data['data'] = $this->Ticket_model->list_ticket($this->session->userdata('userid'));
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar_user');
		$this->load->view('user/data', $data);
		$this->load->view('template_admin/footer');
	}

	function view_ticket($id_ticket)
	{
		$data['data'] = $this->Ticket_model->getViewTicket('id_ticket');
		$this->load->view('user/detail', $data);
	}

	function addKeluhan(){
			$data["instansi"] = $this->Instansi_model->getAll();	

			$tambah = $this->Ticket_model;
            $tambah->save();
			$this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        	redirect('Dashboard/index');
	}
}
