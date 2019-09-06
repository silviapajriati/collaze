<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

	private $data;
	
	public function __construct()
	{
        parent::__construct();
        $this->data['controller'] = $this->uri->segment("about");
		$this->data['pageTitle'] = "About";
	}
	
	public function index()
	{


		$data['content']    = $this->load->view('about','',TRUE);
		$data['title']      = "About";

		$this->load->view('main',$data);


	}
	

}