<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tests  extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('test');
  }

	public function index(){
		$this->data['date'] = $this->test->get();
		$this->load->view('test', $this->data);
	}

	public function save(){
		$this->test->add();
		redirect('/');
	}

	public function remove(){		
    $id = $this->uri->segment(3);
    $this->test->remove($id);
    redirect('/');
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$query	=	$this->test->edit($id);

		$this->data['id'] 	= $query->id;
		$this->data['date'] = $query->date;
		
		$this->load->view('edit', $this->data);
	}

	public function update(){
		$id = $this->input->post('id');
		$this->test->update($id);
		redirect('/');
	}
}

