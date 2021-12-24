<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	
	function index()
	{
		// $this->load->model('M_agenda');
  //       $data['agenda'] = $this->M_agenda->tampildata();
		// $this->load->view('templates/frontend/header');
		$this->load->view('index');
		// $this->load->view('templates/frontend/footer');
	}
}
 ?>