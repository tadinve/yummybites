<?php class Menu_model extends CI_Model {
      public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	function insert($data_ary)
	{
        

           $result= $this->db->insert('menu', $data_ary);

           return $result;
        
	}
  function get_shipping($data)
  {
    $result=$this->db->insert('shipping',$data);
    return $result;
  }
  function get_shippingaddress($data)
  {
    $result=$this->db->insert('shipping_address',$data);
    return $result;
  }
function get_images($limit="", $start="",$categoryid)
{


    $this->uri->segment(3);
    
    if($categoryid==2)
    {
       $this->db->select('*');
    $this->db->from('menu');
    $this->db->where(array('name'=> "fruit"));
    $this->db->order_by("id", "asc");
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
        foreach ($query->result() as $row) 
        {
        $data[] = $row;
        }
      return $data;
        }
    }
    elseif($categoryid==1)
    {
       $this->db->select('*');
    $this->db->from('menu');
    $this->db->where(array('name'=> "flower"));
    $this->db->order_by("id", "asc");
      if($start!==0 && $start!==1)
        {
          $start=$start*10;
        }
      $this->db->limit($limit, $start);
      $query=$this->db->get(); 
      $result = $query->result_object();
  return $result;

      if ($query->num_rows() > 0) 
        {
        foreach ($query->result() as $row) 
        {
        $data[] = $row;
        }
      return $data;
        }
    }
    elseif($categoryid==3)
    {
       $this->db->select('*');
    $this->db->from('menu');
    $this->db->where(array('name'=> "edible"));
    $this->db->order_by("id", "asc");
      if($start!==0 && $start!==1)
        {
          $start=$start*10;
        }
      $this->db->limit($limit, $start);
      $query=$this->db->get(); 
      $result = $query->result_object();
  return $result;

      if ($query->num_rows() > 0) 
        {
        foreach ($query->result() as $row) 
        {
        $data[] = $row;
        }
      return $data;
        }
    }
   elseif($categoryid==5)
    {
       $this->db->select('*');
    $this->db->from('menu');
    $this->db->where(array('name'=> "engagement"));
    $this->db->order_by("id", "asc");
      if($start!==0 && $start!==1)
        {
          $start=$start*10;
        }
      $this->db->limit($limit, $start);
      $query=$this->db->get(); 
      $result = $query->result_object();
  return $result;

      if ($query->num_rows() > 0) 
        {
        foreach ($query->result() as $row) 
        {
        $data[] = $row;
        }
      return $data;
        }
    }
    elseif($categoryid==7)
    {
       $this->db->select('*');
    $this->db->from('menu');
    $this->db->where(array('name'=> "engagement"));
    $this->db->order_by("id", "asc");
      if($start!==0 && $start!==1)
        {
          $start=$start*10;
        }
      $this->db->limit($limit, $start);
      $query=$this->db->get(); 
      $result = $query->result_object();
  return $result;

      if ($query->num_rows() > 0) 
        {
        foreach ($query->result() as $row) 
        {
        $data[] = $row;
        }
      return $data;
        }
    }
    elseif($categoryid==6)
    {
       $this->db->select('*');
    $this->db->from('menu');
    $this->db->where(array('name'=> "cartoon"));
    $this->db->order_by("id", "asc");
      if($start!==0 && $start!==1)
        {
          $start=$start*10;
        }
      $this->db->limit($limit, $start);
      $query=$this->db->get(); 
      $result = $query->result_object();
  return $result;

      if ($query->num_rows() > 0) 
        {
        foreach ($query->result() as $row) 
        {
        $data[] = $row;
        }
      return $data;
        }
    }
   
    
}
function count() {


    $this->db->select('*');
        $this->db->from('menu');
    $query = $this->db->get();
      return $query->num_rows();
    }
    function get_adminimages($limit="", $start="")
{


    $this->uri->segment(3);
    
   
       $this->db->select('*');
    $this->db->from('menu');
    $this->db->where(array('id' => 'id'));

    $this->db->order_by("id", "asc");
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
        foreach ($query->result() as $row) 
        {
        $data[] = $row;
        }
      return $data;
        }
    }
}

?>