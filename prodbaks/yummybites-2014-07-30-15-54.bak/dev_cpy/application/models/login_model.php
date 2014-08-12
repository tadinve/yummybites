<?php
class Login_Model extends CI_Model
{
	function __construct()
	{
parent::__construct();
	$this->load->database();
	$this->load->library("session");
    $this->load->helper('form');
    $this->load->helper('url');
	}
	public function login_inst($user)
	{	
   $this -> db -> select('id,userid, password');
   $this -> db -> from('register');
   $this -> db -> where('userid', $user['userid'] );
   $this -> db -> where('password', $user['password']);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->row();
   if (count($result) > 0) {
$id=$result->id;
   	 

	
				return $id;
			} 
			else {
				return false;
			}

	}


	public function get_userdetails($id)
	{
	$this -> db -> select('id,userid, password');
   $this -> db -> from('register');
   $this -> db -> where('id', $id );
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->row();
   return $result;
	}



}