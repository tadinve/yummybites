<?php class Image_control extends CI_Controller{
function index()
    {
        $this->load->library('pagination');
        $this->load->helper('url');
        $data['images']=$this->Image_model->get_images();
        $this->load->view('image_view',$data);  
    }
function do_upload()
    {
        $config = array(
        'allowed_types' => 'jpg|png|bmp', 
        'upload_path'=>'./uploads/',
        'max_size'=>2000);
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $config['num_links'] = 3;
        $config["total_rows"] = $this->image_model->count();
        $config["base_url"] = 'http://localhost/ci/index.php/pagination_controller/users_view';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;       
        $data["results"] = $this->image_model->get_images($config["per_page"], $page);
        //echo "<pre>";print_r($data["results"]);exit;
        $data["links"] = $this->pagination->create_links();
        $this->load->library('upload',$config);
    if (!$this->upload->do_upload()) 
    {
        $errors[]=array('error'=>$this->upload->display_errors());
        $this->load->view('image_view',$errors);
    }
        $image_path=$this->upload->data();
        $file_name=$image_path['file_name'];
        $config = array(
            'title' => $this->input->post('title'),
            'id'=>$this->input->post('id'),
            'image'=>$image
        );
        $insert=$this->db->insert('upload',$config);
        return $insert;
    }   
}
?>