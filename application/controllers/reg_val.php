<?php
class Reg_val extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('reg_model');
    }

public function regg_val()
{ 
        $user['name'] = $this->input->post('name');
        $user['userid'] = $this->input->post('userid');
        $user['password'] = $this->input->post('password');
        $value=$this->reg_model->reg_inst($user);
         if($value)
            { 

               redirect('welcome/login');
            }
            
            else
            {
                echo"failure";
            }
	}	
   }
?>
