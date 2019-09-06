<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	private $data;
	
	public function __construct()
	{
		parent::__construct();
		$CI=&get_instance();
		$this->data['controller'] = $this->uri->segment("home");
		$this->data['pageTitle'] = "Home";
		$this->load->model('home_mod');
		$this->load->library("session");
		$this->load->helper('url');
	}
	
	public function index(){

		
		$data['content']    = $this->load->view('home','',TRUE);
		$data['title']      = "Home";
		$this->load->view('main',$data);
		
	}




}
