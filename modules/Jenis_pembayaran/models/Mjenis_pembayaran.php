<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjenis_pembayaran extends CI_model {

	private $tabel = "jenis_pembayaran" ;
	
	public $nama;
	public $singkatan;
	public $biaya;
	

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
		$this->nama = $this->input->post('nama');
		$this->singkatan = $this->input->post('singkatan');
		$this->biaya = $this->input->post('biaya');
		
		
		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}
	public function update($id)
	{
		$this->nama = $this->input->post('nama');
		$this->singkatan = $this->input->post('singkatan');
		$this->biaya = $this->input->post('biaya');
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
