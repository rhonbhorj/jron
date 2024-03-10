<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pincode extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model', 'model');
		$this->load->library('form_validation');
	}



	private function header()
	{
		if ($this->session->userdata('attemp') === false) {

			$this->session->set_userdata('attemp', 0);
		}

		$data['title'] = 'ajaxlogin';
		$this->load->view('templates/main_header', $data);
	}


	public function index()
	{
		$this->header();
		$this->load->view('pin');
	}
	public function wallet()
	{
		$this->header();
		$this->load->view('wallet/wallet');
	}



	public function count()
	{


		$data['response'] = true;
		$data['errors'] = "login successful";
		echo json_encode($data);
	}
	public function login()
	{

		//die('if tinawag to');
		$this->output->enable_profiler(false);
		$this->form_validation->set_rules('user', 'Username', 'required|max_length[35]');
		$this->form_validation->set_rules('pass', 'Password', 'required|max_length[35]');

		$success = $this->form_validation->run($this);


		if ($success) {
			$pdata = array(
				'username' => trim($this->input->post('user')),
				'password' => MD5(trim($this->input->post('pass'))),

			);


			// 			$data['response'] = "false";
			// 			$data['errors'] = 'Processing';
			$check = $this->model->credentials($pdata);
			if ($check) {




				if ($pdata['password'] === $check->password) {

					$username = $check->username;
					$level    = "2";
					$role     = "admin";

					$sesdata = array(

						'username' => $username,
						'level'    => $level,
						'role'     => $role,

					);

					$this->session->set_userdata($sesdata);
					$data['response'] = "true";
					$data['errors'] = "login successful";
				} else {
					$data['response'] = "false";
					$data['errors'] = "Invalidw User Password";
				}
			} else {
				$data['response'] = "false";
				$data['errors'] = "Username does not exist.";
			}
		} else {
			$data['response'] = "false";
			$data['errors'] = validation_errors();
		}

		echo json_encode($data);
	}
}
