<?php class Item_single_model extends CI_Model {
      public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
 public function get_images()
{
    			$id=$this->input->get('id');

        $query=$this->db->get_where ('menu',array('id' => $id));
		$result = $query->result_object();
        return $result;
         

    }


     public function get_details($aa)
	{
        $query=$this->db->get_where ('menu',array('id' => $aa));
		$result = $query->result_object();
        return $result;
    }




}