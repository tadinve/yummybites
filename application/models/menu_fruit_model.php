<?php class Menu_fruit_model extends CI_Model {
      public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	
function get_images()
{

    
    $this->db->select('*');
        $this->db->from('menu');
        $this->db->where(array('name'=> "fruit"));
        $this->db->order_by ("id", "asc");
//echo $start;
//$start=$start*1;
        
    
               $query=$this->db->get(); 
               $result = $query->result_object();
              
              //echo $this->db->last_query();
        
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
public function count() {


    $this->db->select('*');
        $this->db->from('menu');
    $query = $this->db->get();
      return $query->num_rows();
    }
}

?>