<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
			parent :: __construct();
			$this->load->model(array(
					"Ticket_model"    ));
		 if(empty($this->session->userdata('userid'))){
				redirect('auth');
			}
	}

	public function index()
	{
		$this->load->view('dashboard/index',);
	}

	public function actionaddticket()
	{
		$data = array(
				'judul_ticket'      		  => $this->input->post('judul_ticket'),
				'nomor_ticket'       			=> date('sihYmd'),
				'user_id'          				=> $this->session->userdata('userid'),
				'keluhan_ticket'    		  => $this->input->post('keluhan'),
				'status'     							=> '0',
				'update_at'								=> date('Y-m-d h:i:s')
		);

		$this->Ticket_model->add($data);
		redirect('dashboard/ticket');
	}

	function ticket()
	{
		$data['data'] = $this->Ticket_model->list_ticket($this->session->userdata('userid'));
		$this->load->view('dashboard/data', $data);
	}

	function view_ticket($id)
	{
		$data['data'] = $this->Ticket_model->getticket($id);
		$this->load->view('dashboard/detail', $data);
	}
}
