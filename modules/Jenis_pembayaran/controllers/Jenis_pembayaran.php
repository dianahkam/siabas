<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_pembayaran extends Cadmin {

	
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
			'Full Name',
			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);
		$this->form_validation->set_rules(
			'singkatan',
			'Singkatan',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'biaya',
			'Biaya',
			'trim|required'
		);

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}
}
