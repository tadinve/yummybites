<?php
class Subscribe_Model extends CI_Model
{
	function __construct()
	{
parent::__construct();
		$this->load->database();
	}
	public function subscribe_insert($user)
	{	        
		if($user!=0)
		{
		        $data=$this->db->insert("subscribe", $user);
		    }
		    else
		    {
		    	echo "enter valid info";
		    }

		        if($data!=0)
		        {
		        
		        	return true;
		        }
		        else
		        {		  
		        	return false;
		        }
	}
}