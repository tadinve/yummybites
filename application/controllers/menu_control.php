<?php

class Menu_control extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library("session");
	    $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    	$this->load->model('login_model');
		$this->load->model('menu_model');
		
				$this->load->model('item_single_model');

		$this->load->model('pagination_model');
		$this->load->library('pagination');
		$this->load->library('cart');


	}

	function index()
	{
		$this->load->view('menu_form', array('error' => ' ' ));
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
			$this->load->view('menu_form', $error);
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
               'category' => $this->input->post('category'),
            	'vegoil' =>  $this->input->post('vegoil'),
            	'cream' =>  $this->input->post('cream'),

            	'name' =>  $this->input->post('name'),
            	'sugar' => $this->input->post('sugar'),
            	'price' => $this->input->post('price'),

            	'description' =>  $this->input->post('description'),
            	'cocoapowder' => $this->input->post('cocoapowder'),
            	'bakingpowder' => $this->input->post('bakingpowder'),

            	'bicarbonate' =>  $this->input->post('bicarbonate'),
            	'eggs' => $this->input->post('eggs'),
            	'milk' => $this->input->post('milk'),

            );
            $img_insert=$this->menu_model->insert($data_ary);

		
if($data_ary['name'] = 'Cartoon')
			{
           $config["total_rows"] = $this->menu_model->count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config['num_links'] = 20;
			$config['use_page_numbers'] = TRUE;
			$config["base_url"] = $this->config->base_url().'/index.php/menu_control/img_display1';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)>0)? $this->uri->segment(3) : 1;		

    if($page!="")
    	{
			$data['display']=$this->menu_model->get_adminimages($config["per_page"], $page);
		}
	else
		{
			$data['display']=$this->menu_model->get_adminimages('3','1');
			print_r($data);
		}
 			$data["links"] = $this->pagination->create_links();
 			$this->load->view('header'); 
			$this->load->view('all_cartoon',$data);
			$this->load->view('footer');
	
        }
if($data_ary['name'] = 'flower')
			{
            $this->img_display1($data_ary);
        }
        if($data_ary['name'] = 'fruit')
			{
            $config["total_rows"] = $this->menu_model->count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config['num_links'] = 20;
			$config['use_page_numbers'] = TRUE;
			$config["base_url"] = $this->config->base_url().'/index.php/menu_control/img_display1';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)>0)? $this->uri->segment(3) : 1;		

    if($page!="")
    	{
			$data['display']=$this->menu_model->get_adminimages($config["per_page"], $page);
		}
	else
		{
			$data['display']=$this->menu_model->get_adminimages('3','1');
			print_r($data);
		}
 			$data["links"] = $this->pagination->create_links();
 			$this->load->view('header'); 
			$this->load->view('all_cartoon',$data);
			$this->load->view('footer');
	
        }
        if($data_ary['name'] = 'edible')

			{
            $config["total_rows"] = $this->menu_model->count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config['num_links'] = 20;
			$config['use_page_numbers'] = TRUE;
			$config["base_url"] = $this->config->base_url().'/index.php/menu_control/img_display1';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)>0)? $this->uri->segment(3) : 1;		

    if($page!="")
    	{
			$data['display']=$this->menu_model->get_adminimages($config["per_page"], $page);
		}
	else
		{
			$data['display']=$this->menu_model->get_adminimages('3','1');
			print_r($data);
		}
 			$data["links"] = $this->pagination->create_links();
 			$this->load->view('header'); 
			$this->load->view('all_cartoon',$data);
			$this->load->view('footer');
	
        }
        if($data_ary['name'] = 'engagement')
			{
            $config["total_rows"] = $this->menu_model->count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config['num_links'] = 20;
			$config['use_page_numbers'] = TRUE;
			$config["base_url"] = $this->config->base_url().'/index.php/menu_control/img_display1';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)>0)? $this->uri->segment(3) : 1;		

    if($page!="")
    	{
			$data['display']=$this->menu_model->get_adminimages($config["per_page"], $page);
		}
	else
		{
			$data['display']=$this->menu_model->get_adminimages('3','1');
			print_r($data);
		}
 			$data["links"] = $this->pagination->create_links();
 			$this->load->view('header'); 
			$this->load->view('all_cartoon',$data);
			$this->load->view('footer');
	
        }
         if($data_ary['name'] = 'valentine')
			{
            $config["total_rows"] = $this->menu_model->count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config['num_links'] = 20;
			$config['use_page_numbers'] = TRUE;
			$config["base_url"] = $this->config->base_url().'/index.php/menu_control/img_display1';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)>0)? $this->uri->segment(3) : 1;		

    if($page!="")
    	{
			$data['display']=$this->menu_model->get_adminimages($config["per_page"], $page);
		}
	else
		{
			$data['display']=$this->menu_model->get_adminimages('3','1');
			print_r($data);
		}
 			$data["links"] = $this->pagination->create_links();
 			$this->load->view('header'); 
			$this->load->view('all_cartoon',$data);
			$this->load->view('footer');
	
        }
		}
	}

	function img_display()
		{

 
      $cat_id=$this->input->post('categoryid');

      if($cat_id>0)
      {
           
      $data['categoryid']=$cat_id;
      $this->session->set_userdata('categoryid',$cat_id);
      $id=$this->session->userdata('categoryid'); 
      }
      else
      {
      	$id=$this->session->userdata('categoryid');
        $data['categoryid']=$id;
      
      

      }        



if(strlen($data['categoryid'])!=0){
	  //$this->session->set_userdata('categoryid',$data['categoryid']);

			$config["total_rows"] = $this->menu_model->count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config['num_links'] = 20;
			$config['use_page_numbers'] = TRUE;
			$config["base_url"] = $this->config->base_url().'/index.php/menu_control/img_display';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)>0)? $this->uri->segment(3) : 1;		
          
    if($page!="")
    	{
			$data['display']=$this->menu_model->get_images($config["per_page"], $page,$data['categoryid']);

			
		}
	else
		{
			$data['display']=$this->menu_model->get_images('3','1',$data['categoryid']);
		}

 			$data["links"] = $this->pagination->create_links();
 			$this->load->view('header'); 
			$this->load->view('all_cartoon',$data,$this->session->all_userdata());
			$this->load->view('footer');
	
	 

}
        
	
	}
	
	function img_display1()
		{

			
			$config["total_rows"] = $this->menu_model->count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$config['num_links'] = 20;
			$config['use_page_numbers'] = TRUE;
			$config["base_url"] = $this->config->base_url().'/index.php/menu_control/img_display1';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)>0)? $this->uri->segment(3) : 1;		

    if($page!="")
    	{
			$data['display']=$this->menu_model->get_adminimages($config["per_page"], $page);
			
		}
	else
		{
			$data['display']=$this->menu_model->get_adminimages('3','1');
		}
 			$data["links"] = $this->pagination->create_links();
 			$this->load->view('header'); 
			$this->load->view('all_cartoon',$data);
			$this->load->view('footer');
	
	 
	}
	function item_single()
	{
			$data['display']=$this->itemsingle_model->get_images();
			$this->load->view('header'); 
			$this->load->view('item_single',$data);
			$this->load->view('footer');
	

	}
	function shipping()
	{
		$data['weight']=$this->input->post('weight');
		$data['flavour']=$this->input->post('flavour');
		$data['message']=$this->input->post('message');

		$data['quantity']=$this->input->post('quantity');
		

		$result=$this->menu_model->get_shipping($data);
		

	}
	function shipping_address()
	{
		$data['inputName']=$this->input->post('inputName');
		$data['inputEmail']=$this->input->post('inputEmail');
		$data['inputPhone']=$this->input->post('inputPhone');
		$data['inputAddress']=$this->input->post('inputAddress');
		$data['inputZip']=$this->input->post('inputZip');
		$data['terms']=$this->input->post('terms');

		$data['inputCountry']=$this->input->post('inputCountry');

		$result=$this->menu_model->get_shippingaddress($data);
		
	}
	public function cart()
	{//echo 'hi';exit;
	


		$catid=$this->input->post('cat_id');
		$pid=$this->item_single_model->get_details($catid);
		
        	
        $data['categoryid']=$pid[0]->id;
		$data['category']=$pid[0]->category;
		$data['file']=$pid[0]->file;
		$data['price']=$pid[0]->price;
		//$a = array('desk_id' => $catid);
		
		# on f
	# pull the existing IDs out of the session
		$new_items = $this->session->userdata('new_items',$data);
		# on first load, the array may not be initialized
		if (!is_array($new_items))
 		 $new_items = array();
  		# append $desk_id to the list of viewed items
		$new_items[] = $data;
		# put the new list back into the session

		$this->session->set_userdata('new_items', $new_items);

		//$this->session->set_flashdata('new_items', $new_items);


		$sessionid=$this->session->userdata('new_items');
		    // print_r(array_keys($sessionid));


        echo json_encode($sessionid);
        exit;
        	   	 
       
		
		//print_r($data);exit;
		
		//$this->db->insert("cart", $data); 
		
	}
	function cart1()
	{//echo 'hi';exit;
		$catid=$this->input->post('cat_id');
		$pid=$this->item_single_model->get_details($catid);
		
        	
        $data['categoryid']=$pid[0]->id;
		$data['category']=$pid[0]->category;
		$data['file']=$pid[0]->file;
		$data['price']=$pid[0]->price;
		$a = array('desk_id' => $catid);
	# pull the existing IDs out of the session
		$new_items =  $this->session->userdata('new_items',$data);
		# on first load, the array may not be initialized
		if (!is_array($new_items))
 		 $new_items = array();
  		# append $desk_id to the list of viewed items
		$new_items[] = $data;
		# put the new list back into the session
		$this->session->set_userdata('new_items', $new_items);

		
		$sessionid=$this->session->userdata('new_items');

        echo json_encode($sessionid);
        exit;
		
	}
//function reset_session()
//{
 
 	//$newdata = array();

   public function delete_row()
     {
     	$new_items=$this->session->userdata('new_items');

     	print_r($new_items);
     	

     	echo $catid=$this->input->post('category_id');
     	foreach ($new_items as $i => $catid) 
     	{

     	unset($new_items['categoryid'][$i]);
     	unset($new_items['category'][$i]);
     	unset($new_items['file'][$i]);
     	unset($new_items['price'][$i]);
     	unset($new_items[$i]);
		$this->session->set_userdata('new_items',$new_items);
     	$sessionid=$this->session->userdata('new_items');
     	//print_r($sessionid);
     	 echo json_encode($sessionid);
        exit;

     }


     	//print_r($sessionid[$catid]['categoryid']);
     	//print_r($sessionid[$catid]);
     	//for($x=0;$x<$sessionid[$catid];$x++)
     	//{
     		//print_r($sessionid[$catid]);
     	//unset($sessionid['categoryid']);
     	//print_r($sessionid);
    // }
     	//$this->session->set_userdata('new_items',$sessionid);
     	//$sessionid=$this->session->userdata('new_items');
     	//print_r($sessionid);
  /*  if ($sessionid['categoryid']==$catid) 
    {
    unset($this->newdata[$catid]['categoryid']);
    unset($this->newdata[$catid]['category']);
    unset($this->newdata[$catid]['price']);
    unset($this->newdata[$catid]['file']);

    $this->session->set_userdata(array('contents' => $this->newdata));

   $contents=$this->session->userdata('contents'); */
    

   
	//} 
}
}

?>