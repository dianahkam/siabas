<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends Cadmin {

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
			'mapel',
			'Mata Pelajaran',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'tingkat',
			'Tingkat',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'tahun_ajar',
			'Tahun Ajar Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'jam_mulai',
			'Jam Dimulai Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'kelas',
			'Kelas Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'jam_selesai',
			'Jam Selesai Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'hari',
			'Hari Name',
			'trim|required'
		);

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}
}
