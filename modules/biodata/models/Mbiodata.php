<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mbiodata extends CI_Model {
  private $tabel = "biodata";
  public $nis;
	public $nisn;
public $nama;
public $jenis_kelamin;
public $tempat_lahir;
public $tgl_lahir;
public $alamat;
public $no_hp;
public $email;
public $agama;
public $asal_skl;
public $alamat_skl;
public $tahun_masuk;

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
	public function getSelect($id=0,$name="",$label="",$is_select2=false)
	{
		$data = array();
		$data = $this->getAll();

    if($name=="") $name = $this->tabel;
		$html = "";
    //$html .= "<div class='form-group'>";
    $html .= "<label>".ucwords(str_replace("_", " ", $this->tabel))."</label>";
    $html .= "<select name='".$name."' id='".$name."' class='form-control'";
    if($is_select2) $html .= " select2='true'";
    $html .= ">";
		$html .= "<option>-- Choose biodata -- </option>";
		foreach($data as $k => $v)
		{
			$html .= "<option value=".$v['id'];
			if($v['id']==$id)
				$html .= " selected";
			$html .= ">".ucwords(str_replace("_", " ", $v['nis']." - ".$v['nama']))."</option>";
		}
    $html .= "</select>";
//      $html .= "</div>";
		return $html;
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
		$this->nis = $this->input->post('nis');
    $this->nisn = $this->input->post('nisn');
    $this->nama = $this->input->post('nama');
    $this->jenis_kelamin = $this->input->post('jenis_kelamin');
    $this->tempat_lahir = $this->input->post('tempat_lahir');
    $this->tgl_lahir = $this->input->post('tgl_lahir');
    $this->alamat = $this->input->post('alamat');
    $this->no_hp = $this->input->post('no_hp');
    $this->email = $this->input->post('email');
    $this->agama = $this->input->post('agama');
    $this->asal_skl = $this->input->post('asal_skl');
    $this->alamat_skl = $this->input->post('alamat_skl');
    $this->tahun_masuk = $this->input->post('tahun_masuk');


		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}

	public function update($id)
	{
		$this->nis = $this->input->post('nis');
    $this->nisn = $this->input->post('nisn');
    $this->nama = $this->input->post('nama');
    $this->jenis_kelamin = $this->input->post('jenis_kelamin');
    $this->tempat_lahir = $this->input->post('tempat_lahir');
    $this->tgl_lahir = $this->input->post('tgl_lahir');
    $this->alamat = $this->input->post('alamat');
    $this->no_hp = $this->input->post('no_hp');
    $this->email = $this->input->post('email');
    $this->agama = $this->input->post('agama');
    $this->asal_skl = $this->input->post('asal_skl');
    $this->alamat_skl = $this->input->post('alamat_skl');
    $this->tahun_masuk = $this->input->post('tahun_masuk');
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
