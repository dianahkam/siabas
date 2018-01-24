<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends Cadmin {

	
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
			'guru',
			'Nama Guru',
			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);
		$this->form_validation->set_rules(
			'siswa',
			'Siswa',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'tgl',
			'Tanggal',
			'trim|required'
		);
		
		$this->form_validation->set_rules(
			'tgl_deadline',
			'Tanggal Deadline',
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
