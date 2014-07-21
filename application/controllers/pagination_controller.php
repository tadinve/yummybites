<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pagination_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('pagination_model');
			$this->load->library('pagination');
			$this->load->helper('url');
	}
	


	public function users_view() {
		
		$config["per_page"] = 3;
		$config["uri_segment"] = 3;
		     $config['num_links'] = 3;

		$config['use_page_numbers'] = TRUE;
		$config["total_rows"] = $this->pagination_model->count();
		
		$config["base_url"] = 'http://localhost/ci/index.php/pagination_controller/users_view';
		$this->pagination->initialize($config);
 
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;		

		$data["results"] = $this->pagination_model->getAllImages($config["per_page"], $page);

		
		$data["links"] = $this->pagination->create_links();
		print_r($data);
		    exit;

		
	
		$this->load->view('items',$data);
 
	}
	
	
}
