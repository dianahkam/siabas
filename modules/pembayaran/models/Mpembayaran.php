<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpembayaran extends CI_model {

	private $tabel = "pembayaran" ;
	
	public $biodata;
	public $jenis_bayar;
	public $tgl_deadline;
	public $tgl_bayar;
	public $bayar;
	

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
		$this->jenis_bayar = $this->input->post('jenis_bayar');
		$this->tgl_deadline = $this->input->post('tgl_deadline');
		$this->tgl_bayar = $this->input->post('tgl_bayar');
		$this->bayar = $this->input->post('bayar');
		
		
		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}
	public function update($id)
	{
		$this->biodata = $this->input->post('biodata');
		$this->jenis_bayar = $this->input->post('jenis_bayar');
		$this->tgl_deadline = $this->input->post('tgl_deadline');
		$this->tgl_bayar = $this->input->post('tgl_bayar');
		$this->bayar = $this->input->post('bayar');
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
