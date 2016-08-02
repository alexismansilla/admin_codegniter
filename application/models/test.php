<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Model{

	public function add(){
		if($this->input->post('date')){
			$data = array(
				'date' => $this->input->post('date')
			);
			$this->db->insert('test', $data);
		}else{
			redirect('/');
		}
	}

	public function get(){
		$query = $this->db->get('test');
		if($query->num_rows() > 0){
			foreach($query->result() as $d){
				$data[] = $d;
			}	
		}
		return $data;
	}

	public function remove($id){
		$this->db->delete('test', array('id' => $id));
		return;
	}

	public function edit($id){
		$data = $this->db->get_where('test', array('id' => $id))->row();
		return $data;
	}

	public function update($id){
		if($this->input->post('date')){	
			$data = array(
				'date' => $this->input->post('date')
			);
			$this->db->where('id', $id);
			$this->db->update('test', $data);
		}
	}
}
