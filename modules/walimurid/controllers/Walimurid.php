<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walimurid extends Cadmin{
private $biodata;
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model("biodata/Mbiodata");
    $this->biodata = $this->Mbiodata->getData();
    $this->load->model("pekerjaan/Mpekerjaan");
    $this->pekerjaan = $this->Mpekerjaan->getData();
  }

  function index()
  {
  $data = $this->getAksi();
  $data['bio'] = $this->biodata;
  $data['pek'] = $this->pekerjaan;
	$this->template->build("view",$data);
  }
  public function addedit($id=0){
		$data = $this->getSimpan($id);
		$data['bio'] = $this->Mbiodata;
		$data['pek'] = $this->Mpekerjaan;
		$this->template->build("form",$data);

	}
  private function validasi(){
		$this->form_validation->set_rules(
			'bidata',
			'hubungan',
			'nama',
			'alamat',
			'no_hp',
			'pendidikan',
			'pekerjaan',

			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}

}
