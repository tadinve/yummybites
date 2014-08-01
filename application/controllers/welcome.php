<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
 public function __construct()
    {
	    parent::__construct();
	    $this->load->library("session");
	    $this->load->helper(array('form', 'url'));
	    $this->load->helper('url');
	    $this->load->library('upload');
	    $this->load->model('reg_model');
	    $this->load->model('image_model');
        $this->load->library('form_validation');
    	$this->load->model('subscribe_model');
    	$this->load->model('login_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');
		$this->load->model('gallery_model');
		$this->load->model('item_single_model');
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 

	}
	
public function index()
	{

		$this->load->view('header'); 
 		$this->load->view('home'); 
		$this->load->view('footer'); 
        		
    }

public function nocache()
    {
        $this->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
        $this->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
        $this->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
        $this->set_header('Pragma: no-cache');
    }

    public function all_cartoon()
	{

		$this->load->view('header'); 
 		$this->load->view('all_cartoon'); 
		$this->load->view('footer');
        		
    }

    public function all_edible()
	{

		$this->load->view('header'); 
 		$this->load->view('all_edible'); 
		$this->load->view('footer');
        		
    }

    public function all_valentaine()
	{

		$this->load->view('header'); 
 		$this->load->view('all_valentaine'); 
		$this->load->view('footer');
        		
    }

    public function all_fruit()
	{

		$this->load->view('header'); 
 		$this->load->view('all_fruit'); 
		$this->load->view('footer');
        		
    }

    public function all_engagement()
	{

		$this->load->view('header'); 
 		$this->load->view('all_engagement'); 
		$this->load->view('footer');
        		
    }


public function all_flower()
	{

		$this->load->view('header'); 
 		$this->load->view('all_flower'); 
		$this->load->view('footer');
        		
    }

public function gallery()
	{

		$this->load->view('header'); 
 		$this->load->view('gallery'); 
		$this->load->view('footer');
        		
    }


public function item_cartoon()
	{

		$this->load->view('header'); 
 		$this->load->view('item_cartoon'); 
		$this->load->view('footer');
        		
    }

public function item_single()
	{		

		$pid=$this->item_single_model->get_images();
		$data['id']=$pid[0]->id;
		$data['category']=$pid[0]->category;
		$data['file']=$pid[0]->file;
		$data['cream']=$pid[0]->cream;
		$data['sugar']=$pid[0]->sugar;
		$data['price']=$pid[0]->price;
		$data['cocoapowder']=$pid[0]->cocoapowder;
		$data['bakingpowder']=$pid[0]->bakingpowder;
		$data['bicarbonate']=$pid[0]->bicarbonate;
		$data['eggs']=$pid[0]->eggs;
		$data['milk']=$pid[0]->milk;
		$data['vegoil']=$pid[0]->vegoil;
		$this->load->view('header'); 
 		$this->load->view('item_single',$data); 
		$this->load->view('footer');
    }

public function paypal()
{
	$data['price']=$this->input->post('price');
		$data['cream']=$this->input->post('cream_hidden');
		$data['sugar']=$this->input->post('sugar_hidden');
		$data['cocoapowder']=$this->input->post('cocoapowder_hidden');
		$data['bakingpowder']=$this->input->post('bakingpowder_hidden');$data['eggs']=$this->input->post('eggs_hidden');
		$data['bicarbonate']=$this->input->post('bicarbonate_hidden');$data['milk']=$this->input->post('milk_hidden');$data['vegoil']=$this->input->post('vegoil_hidden');
		$data['file']=$this->input->post('file_hidden');
		$data['quantity']=$this->input->post('quantity');
				$data['category']=$this->input->post('category_hidden');

		$this->load->view('paypalheader'); 

	$this->load->view('paypal',$data);
			$this->load->view('paypalfooter'); 


}

public function item_edible()
	{

		$this->load->view('header'); 
 		$this->load->view('item_edible'); 
		$this->load->view('footer');
        		
    }

public function item_engagement()
	{

		$this->load->view('header'); 
 		$this->load->view('item_engagement'); 
		$this->load->view('footer');
        		
    }

public function item_flower()
	{

		$this->load->view('header'); 
 		$this->load->view('item_flower'); 
		$this->load->view('footer');
        		
    }

public function item_fruit()
	{

		$this->load->view('header'); 
 		$this->load->view('item_fruit'); 
		$this->load->view('footer');
        		
    }

    public function aboutus()
	{

		$this->load->view('header'); 
 		$this->load->view('aboutus'); 
		$this->load->view('footer');
        		
    }

public function item_valentaine()
	{

		$this->load->view('header'); 
 		$this->load->view('item_valentaine'); 
		$this->load->view('footer');
        		
    }

public function contact1()
	{

		$this->load->view('header'); 
 		$this->load->view('contact1'); 
        		
    }



public function checkout()
	{

		$this->load->view('header'); 
 		$this->load->view('checkout'); 
		$this->load->view('footer');
        		
    }

public function contact()
	{

		$this->load->view('header'); 
 		$this->load->view('contact'); 
		$this->load->view('footer');
        		
    }

public function items()
	{

		$this->load->view('header'); 
 		$this->load->view('items'); 
		$this->load->view('footer');
        		
    }

public function menu()
	{

		$this->load->view('header'); 
 		$this->load->view('menu'); 
		$this->load->view('footer');
        		
    }

public function reserve_seats()
	{

		$this->load->view('header'); 
 		$this->load->view('reserve_seats'); 
		$this->load->view('footer');
        		
    }
public function home()
	{

		$this->load->view('header'); 
 		$this->load->view('home'); 
		$this->load->view('footer');
        		
    }


public function subscribe_val()
	{ 
        $user['name'] = $this->input->post('name');
        $user['email'] = $this->input->post('email');
        $value=$this->subscribe_model->subscribe_insert($user);

	if($value!=0)
		{
	        $this->load->view('subscription_success');
    	}
	else
		{
        	echo "please enter your name";
    	}
      
    }


public function subscription_success()
	{
		$this->load->view('subscription_success');
	}

	
public function upload_form()
	{
		$session_id=$this->session->userdata('id');
        $data=$this->login_model->get_userdetails($session_id);
        $user['username']=$data->userid;
		$this->load->view('admin_header',$user);
        $this->load->view('admin_sidebar',$user);
		$this->load->view('upload_form', array('error' => ' ' ));
		$this->load->view('admin_footer',$user);  
	}


public function menu_form()
	{
		$session_id=$this->session->userdata('id');
        $data=$this->login_model->get_userdetails($session_id);
        $user['username']=$data->userid;
		$this->load->view('admin_header',$user);
        $this->load->view('admin_sidebar',$user);
		$this->load->view('menu_form', array('error' => ' ' ));
		$this->load->view('admin_footer',$user);  
	}

public function gallery_form()
	{
		$session_id=$this->session->userdata('id');
        $data=$this->login_model->get_userdetails($session_id);
        $user['username']=$data->userid;
		$this->load->view('admin_header',$user);
        $this->load->view('admin_sidebar',$user);
		$this->load->view('gallery_form', array('error' => ' ' ));
		$this->load->view('admin_footer',$user);  
	}

public function upload_success()
	{
		$session_id=$this->session->userdata('id');
        $data=$this->login_model->get_userdetails($session_id);
        $user['username']=$data->userid;
		$this->load->view('admin_header',$user);
        $this->load->view('admin_sidebar',$user);
		$this->load->view('upload_success', array('error' => ' ' ));
		$this->load->view('admin_footer',$user);  
	}

public function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
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
                'description' => $this->input->post('description'),
            	'price' =>  $this->input->post('price'),
            );
        $img_insert=$this->image_model->insert($data_ary);
        $this->img_display();
		}
	}

public function img_display()
		{
			$config["total_rows"] = $this->image_model->count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config['num_links'] = 20;
			$config['use_page_numbers'] = TRUE;
			$config["base_url"] = $this->config->base_url().'/index.php/welcome/img_display';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)>0)? $this->uri->segment(3) : 1;		

    if($page!="")
    	{
			$data['display']=$this->image_model->get_images($config["per_page"], $page);
		}
	else
		{
			$data['display']=$this->image_model->get_images('4','1');
		}
 			$data["links"] = $this->pagination->create_links();
	if($data['display']>0)
		{
			//print_r($data["links"]);
			$this->load->view('header'); 
			$this->load->view('items',$data);
			$this->load->view('footer');
		        		
	  	}	
	}

public function index1()
	{
		if($this->session->userdata('userid')=='')
	    {
			$this->load->view('login_dashboard');    	 	   
	    }

   		if($this->session->userdata('userid')!='')
    	{
			$this->load->view('index1');    	 	   
    	}

	}

/*public function reg_val()
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

	
public function register_dashboard()
	{

		$this->load->view('register_dashboard');
	} */

	
public function dashboard()
	{
		
 	$this->load->view('login_dashboard');

	}

public function login_val()
    { 
        $userdata['userid'] = $this->input->post('userid');
        $userdata['password'] = $this->input->post('password');
        $value=$this->login_model->login_inst($userdata);

//print_r($value);exit;
    if($value)
        {
        	$this->session->set_userdata('id',$value);
        	//echo $this->session->userdata('id');exit;
        	redirect('welcome/admin_home');
        //	echo $this->session->userdata($value);
        	   	 
        }
    else
	    {
        	redirect('welcome/dashboard?login=failed');
	    }  
    }
	

public function admin_home()
	{
		if($this->session->userdata('id')!=''){
		$session_id=$this->session->userdata('id');
        $data=$this->login_model->get_userdetails($session_id);
        $user['username']=$data->userid;
        	//echo $data['username'];exit;
        $this->load->view('admin_header',$user);
        $this->load->view('admin_sidebar',$user);  
        $this->load->view('index1',$user);
        $this->load->view('admin_footer',$user);  
	}

	else{redirect('welcome/dashboard?login=failed');}
}


public function logout()
	{

		$this->session->sess_destroy();
if($this->session->userdata('id')=='')
{

redirect('welcome/dashboard','refresh');  
}
else
{
	redirect('welcome/dashboard?login=failed');
    	}
}

	
	 
	


public function change_password()
          {
          	          	

		$session_id=$this->session->userdata('id');
        $data=$this->login_model->get_userdetails($session_id);
        $user['username']=$data->userid;
        	//echo $data['username'];exit;
                  	$error = array('error' => $this->upload->display_errors());

        $this->load->view('admin_header',$user);
        $this->load->view('admin_sidebar',$user); 
          	$this->load->view('change_password',array('error' => ' ' ));
        $this->load->view('admin_footer',$user);  

            //$data = array( "main_content" => 'includes/memberadmin/memberadmin_cpass');
               // $this->load->view('includes/memberadmin/template',$data);
          }

}