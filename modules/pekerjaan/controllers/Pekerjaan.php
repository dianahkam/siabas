<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends Cadmin{
//private $mata_pelajaran;
  public function __construct()
  {
    parent::__construct();
    // $this->load->model("metpel/Mmetpel");
    // $this->mata_pelajaran = $this->Mmetpel->getData();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
  $data = $this->getAksi();
  //$data['metpel'] = $this->mata_pelajaran;
	$this->template->build("view",$data);
  }
  public function addedit($id=0){
		$data = $this->getSimpan($id);
  //  $data['metpel'] = $this->Mmetpel;
		$this->template->build("form",$data);

	}
  private function validasi(){
		$this->form_validation->set_rules(
			'nama',
			'Nama Pekerjaan',
			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}

}
