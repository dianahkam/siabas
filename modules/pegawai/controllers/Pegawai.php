<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends Cadmin {

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
			'nip_nik',
			'Nip NikName',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'nama',
			'Nama Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'jenis_kelamin',
			'Jenis Kelamin Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'agama',
			'Agama Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'tempat_lahir',
			'Tempat Lahir Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'tgl_lahir',
			'Tanggal Lahir Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'alamat',
			'Alamat Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'no_hp',
			'No Handphone Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'email',
			'E-mail Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'pend_akhir',
			'Pendidikan Terakhir Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'nm_skl',
			'Nama Sekolah Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'gelar',
			'Gelar Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'tahun_masuk',
			'Tahun Masuk Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'jabatan',
			'Jabatan Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'status_pgw',
			'Status Name',
			'trim|required'
		);

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}
}
