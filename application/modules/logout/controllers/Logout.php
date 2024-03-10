<?php defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('logout_model', 'model');
        $this->load->library('form_validation');
    }


    public function index()
    {

        $this->session->sess_destroy();
        redirect(site_url("loginapi"));
    }
}
