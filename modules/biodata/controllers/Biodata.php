<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends Cadmin{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
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
			'nis',
			'nisn',
			'nama',
			'jenis_kelamin',
			'tempat_lahir',
			'tgl_lahir',
			'alamat',
			'no_hp',
			'email',
			'agama',
			'asal_sekolah',
			'alamat_sekolah',
			'tahun_masuk',
			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}

}
