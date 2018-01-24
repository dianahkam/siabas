<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtabungan extends CI_model {

	private $tabel = "tabungan" ;
	
	public $biodata;
	public $tgl;
	public $status_tabungan;
	public $jumlah;
	
	

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
		$this->biodata = $this->input->post('pegawai');
		$this->tgl = $this->input->post('tingkat');
		$this->status_tabungan = $this->input->post('kelas');
		$this->jumlah = $this->input->post('tahun_ajar');
		
		
		
		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}
	public function update($id)
	{
		$this->biodata = $this->input->post('pegawai');
		$this->tgl = $this->input->post('tingkat');
		$this->status_tabungan = $this->input->post('kelas');
		$this->jumlah = $this->input->post('tahun_ajar');
		
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
