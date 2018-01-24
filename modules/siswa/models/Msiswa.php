<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Msiswa extends CI_Model {
	private $tabel = "siswa";
	public $biodata;
	public $tingkat;
	public $kelas;
	public $tahun_ajar;
	public $jurusan;

//diperlukan jika relasi antar table
  public function getData()
	{
		$data = array();
		$temp = $this->getAll();
		foreach ($temp as $k) {
			$data[$k['id']] = $k;
		}
		return $data;
	}

	public function getAll()
	{
		return $this->db->get($this->tabel)->result_array();
	}

	public function getById($id)
	{
		$this->db->where("id",$id);
		$q = $this->db->get($this->tabel);
		return $q->result_array();
	}
  public function add()
	{
	$this->biodata = $this->input->post('biodata');
    $this->tingkat = $this->input->post('tingkat');
    $this->kelas = $this->input->post('kelas');
    $this->tahun_ajar = $this->input->post('tahun_ajar');
    $this->jurusan = $this->input->post('jurusan');


		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}

	public function update($id)
	{
	$this->biodata = $this->input->post('biodata');
    $this->tingkat = $this->input->post('tingkat');
    $this->kelas = $this->input->post('kelas');
    $this->tahun_ajar = $this->input->post('tahun_ajar');
    $this->jurusan = $this->input->post('jurusan');
    	$this->db->update(
			$this->tabel,
			$this,
			array("id"=>$id)
		);

		if($this->db->affected_rows()>=0)
			return true;
		else
			return false;
	}

	public function delete()
	{
		$id = $this->input->post("id");
		$this->db->delete(
			$this->tabel,
			array("id"=>$id)
		);

		return $this->db->affected_rows();
	}
}
/* End of file ${TM_FILENAME:${1/(.+)/l.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)//:application/controllers/${1/(.+)/l.php/}} */
