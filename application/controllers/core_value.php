<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class core_value extends CI_Controller {

	private $data;
	
	public function __construct()
	{
        parent::__construct();
        $this->data['controller'] = $this->uri->segment("core_value");
		$this->data['pageTitle'] = "Core Value";
	}
	
	public function index()
	{


		$data['content']    = $this->load->view('core_value','',TRUE);
		$data['title']      = "Core Value";

		$this->load->view('main',$data);


	}
	

}