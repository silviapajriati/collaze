<?php
class bendico_mod extends CI_Model{

    function save($data){

		$this->db->insert('bendico',$data);
	}

    function get_data(){

		$this->db->select('*');
		$this->db->from('bendico');
		$this->db->order_by('upload_date', 'DESC');
		return $this->db->get()->result();
		

    }
    
    function edit($id,$data){
  
        $this->db->where('id',$id);
        $this->db->update('bendico',$data);

        // $query = $this->db->update();
		// echo $this->db->last_query();
		// exit();

    }

    function delete($id){

		$this->db->where('id',$id);
		$this->db->delete('bendico');
	}
      
}    
?>