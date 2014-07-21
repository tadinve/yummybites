<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
 public function __construct()
    {
    parent::__construct();
    $this->load->library("session");
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('login_model');
}
public function nocache()
    {
        $this->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
        $this->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
        $this->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
        $this->set_header('Pragma: no-cache');
    }
public function index()
	{
		$this->load->view('login');
    }
    public function dash_main()
    {
		//$this->load->view('index1');
        render_with_layout('dashboard.php','index1');
    }
    public function upload_form()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
		}


public function login_val()
        { 
        $userdata['userid'] = $this->input->post('userid');
        $userdata['password'] = $this->input->post('password');
              
        $value=$this->login_model->login_inst($userdata);
        
        if($value)
        {
        	$this->load->view('index1');    	 
        }
        else
        {
            $this->load->view('failure');
        }
       

    }  
    public function logout()
	{
		$this->session->sess_destroy();

if($this->session->userdata('userid')!='')
    	 {

				 	$this->load->view('index1');    	 	   
    	 }


if($this->session->userdata('userid')=='')
    	 {

				 	$this->load->view('login');    	 	   
    	 }




}


		
	}
	
    
