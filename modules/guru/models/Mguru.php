<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mguru extends CI_model {

	private $tabel = "guru" ;
	
	public $pegawai;
	public $tingkat;
	public $kelas;
	public $tahun_ajar;
	public $jurusan;
	public $mapel;
	

	 public function getData()
	 {
	 	$data = array();
	 	$temp = $this->getAll();
	 	foreach ($temp as $k => $v) 
	 	{
	 		$data[$v["id"]] = $v;
	 	}

	 	return $data;
	 }

	 public function getAll()
	 {
	 	return $this->db->get($this->tabel)->
	 		result_array();
	 }
	 public function getById($id)
	 {
	 	$this->db->where("id",$id);
	 	$q = $this->db->get($this->tabel);
	 	return $q->result_array();
	 }
	 public function add()
	{
		$this->pegawai = $this->input->post('pegawai');
		$this->tingkat = $this->input->post('tingkat');
		$this->kelas = $this->input->post('kelas');
		$this->tahun_ajar = $this->input->post('tahun_ajar');
		$this->jurusan = $this->input->post('jurusan');
		$this->mapel = $this->input->post('mapel');
		
		
		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}
	public function update($id)
	{
		$this->pegawai = $this->input->post('pegawai');
		$this->tingkat = $this->input->post('tingkat');
		$this->kelas = $this->input->post('kelas');
		$this->tahun_ajar = $this->input->post('tahun_ajar');
		$this->jurusan = $this->input->post('jurusan');
		$this->mapel = $this->input->post('mapel');
		
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
