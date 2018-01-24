<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Cadmin{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->template->build("view");
  }

}
