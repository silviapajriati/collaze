<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class misi extends CI_Controller {

	private $data;
	
	public function __construct()
	{
        parent::__construct();
        $this->data['controller'] = $this->uri->segment("misi");
		$this->data['pageTitle'] = "Misi";
	}
	
	public function index()
	{


		$data['content']    = $this->load->view('misi','',TRUE);
		$data['title']      = "Misi";

		$this->load->view('main',$data);


	}
	

}