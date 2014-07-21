<?php
class Subscribe_control extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
            $this->load->library('form_validation');

    $this->load->model('subscribe_model');
    }
    public function index()
    {

        $this->load->view('footer');
        
}
    

public function subscribe_val()
{ 
        $user['name'] = $this->input->post('name');
        $user['email'] = $this->input->post('email');
if($user['name']!=0 && $user['email']!=0)
{
        $value=$this->subscribe_model->subscribe_insert($user);
        $this->load->view('subscription_success');
    }
    else{
        echo "please enter your name";
    }
      
        }
	}	
   
?>