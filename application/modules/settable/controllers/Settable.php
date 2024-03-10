<?php defined('BASEPATH') or exit('No direct script access allowed');

class Settable extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{



		$this->load->view('login');
	}

	public function addtest()
	{
		$this->load->database();
		echo $this->db->query("ALTER TABLE users ADD shoa text NULL");
	}




	public function up()
	{
		$this->dbforge->add_field(array(
			'blog_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'blog_title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'blog_description' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
		));

		$this->dbforge->create_table('userd');
	}

	public function down()
	{
		$this->dbforge->drop_table('blog');
	}
}
