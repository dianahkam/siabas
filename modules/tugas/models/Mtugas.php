<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtugas extends CI_model {

	private $tabel = "tugas" ;
	
	public $guru;
	public $siswa;
	public $tgl;
	public $tgl_deadline;
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
		$this->guru = $this->input->post('guru');
		$this->siswa = $this->input->post('siswa');
		$this->tgl = $this->input->post('tgl');
		$this->tgl_deadline = $this->input->post('tgl_deadline');
		$this->keterangan = $this->input->post('keterangan');
		
		
		
		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}
	public function update($id)
	{
		$this->guru = $this->input->post('guru');
		$this->siswa = $this->input->post('siswa');
		$this->tgl = $this->input->post('tgl');
		$this->tgl_deadline = $this->input->post('tgl_deadline');
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
