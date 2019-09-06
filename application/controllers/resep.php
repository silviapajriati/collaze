<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resep extends CI_Controller {

	private $data;
	
	public function __construct()
	{
        parent::__construct();
        $this->data['controller'] = $this->uri->segment("resep");
		$this->data['pageTitle'] = "Resep";
		$this->load->model('resep_mod');
	}
	
	public function index()
	{

		$vdata['user']		= $this->session->userdata('user');
		$data['content']    = $this->load->view('resep',$vdata,TRUE);
		$data['title']      = "Resep";

		$this->load->view('main',$data);


	}
	
	function add(){

		$upload_form	= $this->input->post('upload_form');
		$title			= $this->input->post('title');
		$cara			= $this->input->post('cara');
		$upload_date	= date('Y-m-d H:i:s');

		$data = array(

	
			'judul' 		=> $title,
			'cara'			=> $cara,
			'upload_form' 	=> $upload_form,
			'upload_date' 	=> $upload_date
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

						
			$this->resep_mod->save($data);


	}

	function edit(){

		$id				= $this->input->post('hid_id');
		$upload_form	= $this->input->post('namefile');
		$title			= $this->input->post('title');
		$cara			= $this->input->post('cara');
		$upload_date	= date('Y-m-d H:i:s');

		$data = array(
			'judul' 			=> $title,
			'upload_form' 		=> $upload_form,
			'cara'				=> $cara,
			'upload_date' 		=> $upload_date
		);
		
			$this->resep_mod->edit($id,$data);


	}

	function get_resep(){

		$data 	= $this->resep_mod->get_data();

		if($data != NULL){

			foreach($data as $r){

				$array_item[] = array(

					'id'			=> $r->id,
					'judul'			=> $r->judul,
					'cara'			=> $r->cara,
					'upload_form'	=> $r->upload_form,
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

		$this->resep_mod->delete($id);

		return true;

	}
}