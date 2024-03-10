<?php defined('BASEPATH') or exit('No direct script access allowed');

class Loginapi extends MX_Controller
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

		$data['title'] = 'apilogin';
		$this->load->view('templates/main_header', $data);
	}


	public function index()
	{
		$username = '3';


		$level    = '21';
		$role     = "admin";

		$sesdata = array(

			'username' => $username,
			'level'    => $level,
			'role'     => $role,

		);
		$this->session->set_userdata($sesdata);

		// $code = $this->session->userdata('level');


		// if ($this->session->userdata('level') === '2') {


		// 	redirect(site_url('home'), 'refresh');
		// } else {



		$this->header();
		$this->load->view('loginapi/login');
		// }
	}

	public function login()
	{

		//die('if tinawag to');
		$this->output->enable_profiler(false);
		$this->form_validation->set_rules('user', 'Username', 'required|max_length[35]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[35]');

		$success = $this->form_validation->run($this);


		if ($success) {
			$pdata = array(
				'postusername' => trim($this->input->post('user')),
				'postpassword' => trim($this->input->post('password')),
				'try' => $_SERVER['HTTP_USER_AGENT'],

			);
			$this->load->helper('login');

			$check = logindata($pdata);

			// 			$data['response'] = "false";
			// 			$data['errors'] = 'Processing';
			$jdecod = json_decode($check, true);





			if ($jdecod['status'] === true) {

				$username = 'asd';
				$level    = "2";
				$role     = "admins";

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
				$data['errors'] = $jdecod['msg'];
			}
		} else {
			$data['response'] = "false";
			$data['errors'] = validation_errors();
		}

		echo json_encode($data);
	}




	public function login1()
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
