<?php class Gallery_model extends CI_Model {
      public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	function insert($data_ary)
	{
        

           $result= $this->db->insert('gallery', $data_ary);

           return $result;
        
	}
function get_images($limit="", $start="")
{

$this->uri->segment(3);
    
    $this->db->select('*');
        $this->db->from('gallery');
        $this->db->order_by ("id", "asc");
//echo $start;
//$start=$start*1;
        if($start!==0 && $start!==1)
{
  $start=$start*10;
}
    $this->db->limit($limit, $start);
    
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
        $this->db->from('gallery');
    $query = $this->db->get();
      return $query->num_rows();
    }
}

?>