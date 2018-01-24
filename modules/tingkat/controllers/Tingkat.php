<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tingkat extends Cadmin {

	
	public function __construct(){
		parent::__construct();

	}

	public function index()
	{
		$data = $this->getAksi();
		$this->template->build("view",$data);

	}
	public function addedit($id=0){
		$data = $this->getSimpan($id);
		$this->template->build("form",$data);
	}
	private function validasi(){
		
		$this->form_validation->set_rules(
			'nama',
			
			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);
		

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}
}
