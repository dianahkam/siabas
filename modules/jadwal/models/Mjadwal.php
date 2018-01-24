<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjadwal extends CI_Model {
	private $tabel = "jadwal";
	public $mapel ;
	public $tingkat ;
	public $tahun_ajar ;
	public $jam_mulai ;                           
	public $kelas ;
	public $jam_selesai ;
	public $hari ;
	public function getData()
	{
		$data = array();
		$temp = $this->getAll();
		foreach ($temp as $k => $v) {
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
		$this->mapel = $this->input->post('mapel'); 
		$this->nama = $this->input->post('tingkat');
		$this->tahun_ajar = $this->input->post('tahun_ajar');
		$this->jam_mulai = $this->input->post('jam_mulai');
		$this->kelas = $this->input->post('kelas');
		$this->jam_selesai = $this->input->post('jam_selesai');
		$this->hari = $this->input->post('hari');
		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}

	public function update($id)
	{
		$this->mapel = $this->input->post('mapel'); 
		$this->nama = $this->input->post('tingkat');
		$this->tahun_ajar = $this->input->post('tahun_ajar');
		$this->jam_mulai = $this->input->post('jam_mulai');
		$this->kelas = $this->input->post('kelas');
		$this->jam_selesai = $this->input->post('jam_selesai');
		$this->hari = $this->input->post('hari');
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