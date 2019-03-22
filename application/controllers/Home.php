<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index($value='')
	{
		# code...
		$this->load->view('common/header_home');
		$this->load->view('home/index');
		$this->load->view('common/footer_home');
	}
}