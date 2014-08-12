<?php

class Gallery_control extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library("session");
	    $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    	$this->load->model('login_model');
		$this->load->model('gallery_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');


	}

	function index()
	{
		$this->load->view('gallery_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '11024';
		$config['max_height']  = '7168';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
	if ( ! $this->upload->do_upload())
		{
			$session_id=$this->session->userdata('id');
	        $data=$this->login_model->get_userdetails($session_id);
	        $user['username']=$data->userid;
			$this->load->view('admin_header',$user);
	        $this->load->view('admin_sidebar',$user);
	        $error = array('error' => $this->upload->display_errors());
			$this->load->view('gallery_form', $error);
			$this->load->view('admin_footer',$user); 
		}
	else
		{
			$upload_data = $this->upload->data();
            $data_ary= array(

                'title'     => $upload_data['client_name'],
                'file'      => $upload_data['file_name'],
                'width'     => $upload_data['image_width'],
                'height'    => $upload_data['image_height'],
                'type'      => $upload_data['image_type'],
                'size'      => $upload_data['file_size'],
                'date'      => time(),
                
            );
            $img_insert=$this->gallery_model->insert($data_ary);
            $this->img_display();
		}
	}

	function img_display()
		{
			$config["total_rows"] = $this->gallery_model->count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config['num_links'] = 20;
			$config['use_page_numbers'] = TRUE;
			$config["base_url"] = $this->config->base_url().'/index.php/gallery_control/img_display';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)>0)? $this->uri->segment(3) : 1;		

    if($page!="")
    	{
			$data['display']=$this->gallery_model->get_images($config["per_page"], $page);
		}
	else
		{
			$data['display']=$this->gallery_model->get_images('4','1');
		}
 			$data["links"] = $this->pagination->create_links();
 			$this->load->view('header'); 
			$this->load->view('gallery',$data);
			$this->load->view('footer');
	
	 
	}
}

?>