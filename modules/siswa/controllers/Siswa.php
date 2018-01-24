<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Cadmin{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("biodata/Mbiodata");
      $this->load->model("tingkat/Mtingkat");
      $this->load->model("kelas/Mkelas");
      $this->load->model("jurusan/Mjurusan");
    $this->biodata = $this->Mbiodata->getData();
    $this->tingkat = $this->Mtingkat->getData();
    $this->kelas = $this->Mkelas->getData();
    $this->jurusan = $this->Mjurusan->getData();
  }

  function index()
  {
  $data = $this->getAksi();
   $data['bio'] = $this->biodata;
   $data['tkt'] = $this->tingkat;
   $data['kls'] = $this->kelas;
   $data['jur'] = $this->jurusan;
	$this->template->build("view",$data);
  }
  public function addedit($id=0){
		$data = $this->getSimpan($id);
    $data['bio'] = $this->Mbiodata;
    $data['tkt'] = $this->Mtingkat;
    $data['kls'] = $this->Mkelas;
    $data['jur'] = $this->Mjurusan;
		$this->template->build("form",$data);

	}
  private function validasi(){
		$this->form_validation->set_rules(
			'biodata',
			'tingkat',
			'kelas',
			'tahun_ajar',
			'jurusan',
			'trim|required|regex_match[/^[a-zA-Z\s_]+$/]'
		);

		return $this->form_validation->run();
	}

	public function validasi_form($id=0){
		$this->get_error_validasi($this->validasi(),$id);
	}

  public function review_approval($id = 0)
	{
		$siswa = $this->{$this->tmodel}->getById($id);
		//$notulis_detail = $this->Mnotulis_detail->getById($id1);
		//$this->load->library('email');
		$data = array(
			"sis" => $siswa,
			//"notul_detail" => $notulis_detail,
			//"peg" => $this->Mpegawai->getDataEmail(),
			"bio" => $this->biodata,
			"tkt" => $this->tingkat,
      "kls" => $this->kelas,
      "jrs" => $this->jurusan,
			//"peg_dev" => $this->Mpegawai
		);
		$this->template->build("detail",$data);
	}

  public function detail($id=0)
	{
		$this->review_approval($id);
	}

}
