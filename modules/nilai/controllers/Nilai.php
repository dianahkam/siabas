<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends Cadmin{

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
			'siswa',
			'mapel',
			'jenis',
			'nilai',
			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}

}
