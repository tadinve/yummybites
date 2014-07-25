<?php
class Change_pwd extends CI_Model
{
  function __construct()
  {
parent::__construct();
    $this->load->database();
  }

function Change_pwd()
        {   

        $this->db->select('id');
        $this->db->from('register');
        $this->db->where('password',$this->input->post('password'));
        $query=$this->db->get(); 
        $data=$query->row();

       //print_r($query);
          
       //echo $query->num_rows;


        if ($query->num_rows > 0)
         {

                $id=$data->id;
                $row = $query->row();

                if($row==TRUE)                
                {

                    $data = array(
                      'password' => $this->input->post('pwd2'),
                     );
                    
                   
                   if($this->db->update('register', $data, array('id' => $id)))
                   {
                   return TRUE;
               }
                  //$this->db->update('register', $data);
                 //echo $this->db->last_query(); exit;
                else
                {
                    return FALSE;
                }
               }

                
                else
                {
                redirect('welcome/change_password');
                }


         }
         else{
            redirect('welcome/change_password?alert=password_wrong');
         }
}
        
        }
        ?>