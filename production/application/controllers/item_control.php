<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Item_control extends CI_Controller {
public function index() { 
$this->db->order_by('rand()'); 
$images = $this->db->get('upload'); 
$this->load->view('items/view', array('images'=>$images->result())); }
?>