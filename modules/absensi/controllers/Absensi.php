<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends Cadmin {

	
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
			'biodata',
			'Biodata',
			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);
		
		$this->form_validation->set_rules(
			'tgl',
			'Tanggal',
			'trim|required'
		);
		
		$this->form_validation->set_rules(
			'masuk',
			'Jam Masuk',
			'trim|required'
		);

		$this->form_validation->set_rules(
			'keluar',
			'Jam Keluar',
			'trim|required'
		);

		$this->form_validation->set_rules(
			'keterangan',
			'Keterangan',
			'trim|required'
		);
		

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}
}
