<?php
class Contact_control extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
            $this->load->library('form_validation');

    $this->load->model('contact_model');
    }
    public function index()
    {

        $this->load->view('footer');
        
}
    

public function contact_val()
{ 
        $user['fullname'] = $this->input->post('fullname');
        $user['email'] = $this->input->post('email');
        $user['message'] = $this->input->post('message');
if($this->input->post('fullname')!='')
{
        $value=$this->contact_model->contact_insert($user);
       // echo $value;
                $this->load->view('header'); 
        $this->load->view('contact_success');
                $this->load->view('footer');
    }
    else{
        echo "please enter your name";
    }
      
        }
	}	
   
?>