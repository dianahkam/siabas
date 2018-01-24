<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjurusan extends CI_model {

	private $tabel = "jurusan" ;

	public $nama;


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
	 	$html .= "<option>-- Choose jurusan -- </option>";
	 	foreach($data as $k => $v)
	 	{
	 		$html .= "<option value=".$v['id'];
	 		if($v['id']==$id)
	 			$html .= " selected";
	 		$html .= ">".ucwords(str_replace("_", " ", $v['nama']))."</option>";
	 	}
	 	$html .= "</select>";
	 //      $html .= "</div>";
	 	return $html;
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



		$this->db->insert(
			$this->tabel,
			$this
		);

		return $this->db->affected_rows();
	}
	public function update($id)
	{
		$this->nama = $this->input->post('nama');

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
