<?php class Pagination_model extends CI_Model {
      public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
	
	
  public function getAllImages($limit="", $start="")
  {
$this->uri->segment(3);
		
		$this->db->select('*');
        $this->db->from('upload');
      
		if($limit!="" && $start!="")
		{
		$this->db->limit($limit, $start);
		}

               $query=$this->db->get(); 
               $result = $query->result_object();
              
		    
		    return $result;

		    if ($query->num_rows() > 0) 
		    {
				foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;


}
	// get total number of users
public function count() {


		$this->db->select('*');
        $this->db->from('upload');
		$query = $this->db->get();
			return $query->num_rows();
		}

} ?>