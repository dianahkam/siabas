<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Cadmin {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*$pesan = "<h1>Percobaan</h1>";
		$this->load->library("email");
		$this->email->from('cs@naura-solusi.com');
		$this->email->reply_to('cs@naura-solusi.com');
		$this->email->to("zaki_swr@yahoo.com");
		$this->email->subject("i-ACT Approval");
		$this->email->message($pesan);
		$this->email->set_mailtype('html');
		$this->email->send();*/

		// $a = "abc.kamu.xlsx";
		// if(substr_count($a, ".")>1)
		// {
		// 	$temp = substr($a, strlen($a)-5);
		// 	echo substr($temp,strpos($temp, "."));
		// }
		// echo substr($a, strpos($a,"."));
		$this->template->build("welcome_message");
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
