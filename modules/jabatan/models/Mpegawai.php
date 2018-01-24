<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpegawai extends CI_Model {
	private $tabel = "pegawai";
	public $nip_nik ;
	public $nama ;
	public $jenis_kelamin ;
	public $agama ;                           
	public $tempat_lahir ;
	public $tgl_lahir ;
	public $alamat ;
	public $no_hp ;
	public $email ;
	public $pend_akhir ;
	public $nama_skl ;
	public $gelar ;
	public $tahun_masuk ;
	public $jabatan ;
	public $status_pgw ;

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
		$this->nip_nik = $this->input->post('nip_nik'); 
		$this->nama = $this->input->post('nama');
		$this->jenis_kelamin = $this->input->post('jenis_kelamin');
		$this->agama = $this->input->post('agama');
		$this->tempat_lahir = $this->input->post('tempat_lahir');
		$this->tgl_lahir = $this->input->post('tgl_lahir');
		$this->alamat = $this->input->post('alamat');
		$this->no_hp = $this->input->post('no_hp');
		$this->email = $this->input->post('email');
		$this->pend_akhir = $this->input->post('pend_akhir');
		$this->nama_skl = $this->input->post('nama_skl');
		$this->gelar = $this->input->post('gelar');
		$this->tahun_masuk = $this->input->post('tahun_masuk');
		$this->jabatan = $this->input->post('jabatan');
		$this->status_pgw = $this->input->post('status_pgw');
		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}

	public function update($id)
	{
		$this->nip_nik = $this->input->post('nip_nik'); 
		$this->nama = $this->input->post('nama');
		$this->jenis_kelamin = $this->input->post('jenis_kelamin');
		$this->agama = $this->input->post('agama');
		$this->tempat_lahir = $this->input->post('tempat_lahir');
		$this->tgl_lahir = $this->input->post('tgl_lahir');
		$this->alamat = $this->input->post('alamat');
		$this->no_hp = $this->input->post('no_hp');
		$this->email = $this->input->post('email');
		$this->pend_akhir = $this->input->post('pend_akhir');
		$this->nama_skl = $this->input->post('nama_skl');
		$this->gelar = $this->input->post('gelar');
		$this->tahun_masuk = $this->input->post('tahun_masuk');
		$this->jabatan = $this->input->post('jabatan');
		$this->status_pgw = $this->input->post('status_pgw');
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