<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bendico extends CI_Controller {

	private $data;
	
	public function __construct()
	{
        parent::__construct();
        $this->data['controller'] = $this->uri->segment("bendico");
		$this->data['pageTitle'] = "bendico";
		$this->load->model('bendico_mod');
	}
	
	public function index()
	{

		$vdata['user']		= $this->session->userdata('user');
		$data['content']    = $this->load->view('bendico',$vdata,TRUE);
		$data['title']      = "bendico";

		$this->load->view('main',$data);


	}
	
	function add(){

		$upload_form	= $this->input->post('upload_form');
		$desc			= $this->input->post('desc');
		$upload_date	= date('Y-m-d H:i:s');

		$data = array(

	
			'desc' 				=> $desc,
			'upload_form' 		=> $upload_form,
			'status'			=> 0,
			'upload_date' 		=> $upload_date
			);

			// var_dump($data);
			// exit();
	
			if(isset($_FILES['upload_form'])){		
				
		
				$temp						= explode(".",$_FILES['upload_form']['name']);			
				$filename 					= date('YmdHis');
				$fix_filename 				= $filename.".".end($temp);
				$config['upload_path']   	= './upload/';			
				$config['allowed_types'] 	= 'pdf|doc|docx|jpg|png|pptx|jpeg';
				$config['file_name'] 		= $filename;
				$config['overwrite'] 		= true;
		
				$this->load->library('upload', $config);
				
				$this->upload->initialize($config);
		
				if($this->upload->do_upload('upload_form')){
		
					$data['upload_form'] = $fix_filename;
				}
				else{
					
					echo $this->upload->display_errors();
				}		
			}

						
			$this->bendico_mod->save($data);


	}

	function edit(){

		$id				= $this->input->post('hid_id');
		$upload_form	= $this->input->post('namefile');
		$desc			= $this->input->post('desc');
		$upload_date	= date('Y-m-d H:i:s');

		$data = array(
			'desc' 				=> $desc,
			'upload_form' 		=> $upload_form,
			'status'			=> 0,
			'upload_date' 		=> $upload_date
		);
		
			$this->bendico_mod->edit($id,$data);


	}

	function get_bendico(){

		$data 	= $this->bendico_mod->get_data();

		if($data != NULL){

			foreach($data as $r){

				$array_item[] = array(

					'id'			=> $r->id,
					'desc'			=> $r->desc,
					'upload_form'	=> $r->upload_form,
					'status'		=> $r->status,
					'upload_date'	=> $r->upload_date
				);
			}

		}else{
			 
			$array_item = array();
		}

		echo json_encode($array_item);
	}

	function delete(){

		$id = $this->input->post('id');

		$this->bendico_mod->delete($id);

		return true;

	}
}