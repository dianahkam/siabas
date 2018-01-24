<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mwalimurid extends CI_Model {
  private $tabel = "wali_murid";
  public $biodata;
  public $hubungan;
  public $nama;
  public $alamat;
  public $no_hp;
  public $pendidikan;
  public $pekerjaan;

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
    	$this->hubungan = $this->input->post('hubungan');
    	$this->nama = $this->input->post('nama');
    	$this->alamat = $this->input->post('alamat');
    	$this->no_hp = $this->input->post('no_hp');
    	$this->pendidikan = $this->input->post('pendidikan');
    	$this->pekerjaan = $this->input->post('pekerjaan');
    	

		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}

	public function update($id)
	{
		$this->biodata = $this->input->post('biodata');
    	$this->hubungan = $this->input->post('hubungan');
    	$this->nama = $this->input->post('nama');
    	$this->alamat = $this->input->post('alamat');
    	$this->no_hp = $this->input->post('no_hp');
    	$this->pendidikan = $this->input->post('pendidikan');
    	$this->pekerjaan = $this->input->post('pekerjaan');
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
