<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mabsensi extends CI_model {

	private $tabel = "absensi" ;
	
	public $biodata;
	public $tgl;
	public $masuk;
	public $keluar;
	public $keterangan;
	
	

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
		$this->biodata = $this->input->post('biodata');
		$this->tgl = $this->input->post('tgl');
		$this->masuk = $this->input->post('masuk');
		$this->keluar = $this->input->post('keluar');
		$this->keterangan = $this->input->post('keterangan');
		
		
		
		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}
	public function update($id)
	{
		$this->biodata = $this->input->post('biodata');
		$this->tgl = $this->input->post('tgl');
		$this->masuk = $this->input->post('masuk');
		$this->keluar = $this->input->post('keluar');
		$this->keterangan = $this->input->post('keterangan');
		
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
