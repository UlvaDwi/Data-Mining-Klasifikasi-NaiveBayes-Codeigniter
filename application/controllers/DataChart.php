<?php


class DataChart extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Chart_Model');
	}

	function index()
	{
		$data['total'] =  $this->Chart_Model->total_rows();
		$data['hasil']=$this->Chart_Model->Jum_kelayakan();
		// $data['hasil1']=$this->Chart_Model->Jum_pkh();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('index',$data);
		$this->load->view('templates/footer');
	}
	// function pkh()
	// {
	// 	//$data1=$this->Chart_Model->Jum_pkh();
	// 	$data['hasil']=$this->Chart_Model->Jum_pkh();
	// 	$this->load->view('templates/header');
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('index',$data);
	// 	$this->load->view('templates/footer');
	// }



	
}
?>