<?php

class User_model extends CI_Model {


public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url','file'));
}


public function login($username,$password)
	{
		
		$sql = $this->db->query("select * from users where username='".$username."' and password='".$password."'");
		$data = $sql->result_array();
		return $data;
}


public function insert_registrasi($username,$email,$password){
	$data = array(
        'username'=>$username,
		'email'=>$email,
		'password'=>$password,
	);
	return $this->db->insert('user',$data);
}


} ?>
