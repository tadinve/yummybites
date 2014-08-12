<?php
class Reg_Model extends CI_Model
{
	function __construct()
	{
parent::__construct();
		$this->load->database();
	}
	public function reg_inst($user)
	{	        
		        $data=$this->db->insert("register", $user);
		        
		        if($data)
		        {
		        
		        	return true;
		        }
		        else
		        {		  
		        	return false;
		        }
	}

	public function login_inst($user)
	{	        

		       // $data=$this->db->insert("register", $user);
		$user['userid'] = $this->input->post('userid');
        $user['password'] = $this->input->post('password');
		      $this -> db -> select('userid, password');
   $this -> db -> from('register');
   $this -> db -> where('userid', $user['userid'] );
   $this -> db -> where('password', $user['password']);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   if($query -> num_rows() == 1)
   {
   	redirect('welcome/signin');
     //return $query->result();
   }
   else
   {
   	echo 'failure';
     //return false;
   }
exit;
	}

}
?>
