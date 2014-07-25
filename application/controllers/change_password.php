<?php
class Change_password extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('change_pwd');
        $this->load->model('login_model');
    }
        public function change_fun()
        {

        $this->form_validation->set_rules('password','trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2','trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2','trim|required|min_length[4]|max_length[32]|matches[password]');

        if ($this->form_validation->run()==TRUE)
        {
            
            $query=$this->change_pwd->change_pwd();
                if($query==1)
                {
                    $session_id=$this->session->userdata('id');
                    $data=$this->login_model->get_userdetails($session_id);
                    $user['username']=$data->userid;
                    $this->load->view('admin_header',$user);
                    $this->load->view('admin_sidebar',$user);
                    $this->load->view('password_success');
                    $this->load->view('admin_footer');
                }            

        }
    }
}   
   
?>