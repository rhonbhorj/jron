<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{

		if ($this->session->userdata('level') !== '2') {

			redirect(base_url());
		} else {

			$this->load->view('main-header');
			$this->load->view('home');
			$this->load->view('main-footer');
		}
	}
}
