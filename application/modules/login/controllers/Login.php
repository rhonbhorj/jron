<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model', 'model');
		$this->load->library('form_validation');
		$this->load->library('encryption');
	}


	public function index()
	{

		if ($this->session->userdata('level') === '2') {

			redirect(site_url('home'));
		} else {


			$this->load->view('login');
		}
	}


	public function test()
	{

		$plain_text = '08c90a689944d211b393c34d2ffe1ca1b302c068abf17ace7452f569a2d02cc7aa9314466226ece3a69331ba71b9224bc31d47db8dd2d61c1ea98d800ae1e38bPFfoMy2kdRs18O16rgwytb7FkfzkfluyMqCeJiQkkypQ9xTDT8tu3dp3DOTjI6Zh';
		//  $ciphertext = $this->encryption->encrypt($plain_text);

		// Outputs: This is a plain-text message!
		echo 	$this->encryption->decrypt($plain_text);
	}


	public function auth()
	{

		$udata = array(
			'username' => $this->input->post('user', TRUE),
			'password' => $this->input->post('pass', TRUE),
		);



		$check = $this->model->credentials($udata);


		// $check = true;
		if ($check) {

			if (md5($udata['password']) === $check->password) {
				// if ($check->password == $password) {
				$username = $udata['username'];
				$level    = "2";
				$role     = "admin";

				$sesdata = array(

					'username' => $username,
					'level'    => $level,
					'role'     => $role,

				);

				$this->session->set_userdata($sesdata);

				$this->session->set_flashdata("true", "Successfully Logged in!");
				redirect(site_url());
			} else {

				$this->session->set_flashdata("nopass", "Password is Wrong!");
				redirect(site_url());
			}
		} else {

			$this->session->set_flashdata("false", "The  username you entered is not connected to an account.");
			redirect(site_url());
		}
	}




	public function auth2()
	{


		$username = $this->input->post('user', TRUE);
		$password = $this->input->post('pass', TRUE);

		$check = $this->model->credentials1($username, $password);

		if ($check) {

			if ($check->password == md5($password)) {

				$username = $check->username;
				$level    = "2";
				$role     = "admin";

				$sesdata = array(

					'username' => $username,
					'level'    => $level,
					'role'     => $role,

				);

				$this->session->set_userdata($sesdata);

				$this->session->set_flashdata("true", "Successfully Logged in!");
				redirect(site_url('home'));
			} else {

				$this->session->set_flashdata("nopass", "Password is Wrong!");
				redirect(site_url());
			}
		} else {

			$this->session->set_flashdata("false", "The username you entered is not connected to an account.");
			redirect(site_url());
		}
	}



	public function dologin()
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




				if (md5($pdata['password']) === $check->password) {

					$username = $check->username;
					$level    = "2";
					$role     = "admin";

					$sesdata = array(

						'username' => $username,
						'level'    => $level,
						'role'     => $role,

					);

					$this->session->set_userdata($sesdata);
				} else {
					$data['response'] = "false";
					$data['errors'] = "Invalid User Password";
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
