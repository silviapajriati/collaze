<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class visi extends CI_Controller {

	private $data;
	
	public function __construct()
	{
        parent::__construct();
        $this->data['controller'] = $this->uri->segment("visi");
		$this->data['pageTitle'] = "Visi";
	}
	
	public function index()
	{


		$data['content']    = $this->load->view('visi','',TRUE);
		$data['title']      = "Visi";

		$this->load->view('main',$data);


	}
	

}