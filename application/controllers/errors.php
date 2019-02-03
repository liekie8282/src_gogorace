<?php
class Errors extends CI_controller{
	public function notfound(){
		$this->load->view('templates/header');		
		$this->load->view('errors/404');
		$this->load->view('templates/footer');
		
	}
}
?>