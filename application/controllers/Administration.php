<?php 
/**
 * 
 */
class Administration extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index($value='')
	{
		# code...
		$data['isdashboard'] = true;
		$this->load->view('common/header_admin',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('common/footer_admin',$data);

	}
	public function blank($value='')
	{

		$this->load->view('common/header_admin');
		$this->load->view('admin/blank');
		$this->load->view('common/footer_admin');
	}
}