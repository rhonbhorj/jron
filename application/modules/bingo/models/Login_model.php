<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
  public function __construct()
  {
  }


  public function credentials_old($username, $password)
  {

    $result = $this->db->get_where('users', ['username' => $username])->row();

    return $result ? $result : false;
  }
  public function credentials($data)
  {

    $result = $this->db->get_where('users', ['username' => $data['username']])->row();

    return $result ? $result : false;
  }
}
