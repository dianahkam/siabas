<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends Cadmin {

	
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
			'Isi Biodata',
			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);
		$this->form_validation->set_rules(
			'jenis_bayar',
			'Jenis Pembayaran',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'tgl_deadline',
			'Tanggal Deadline',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'tgl_bayar',
			'Tanggal Pembayaran',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'bayar',
			'Pembayaran',
			'trim|required'
		);

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}
}
