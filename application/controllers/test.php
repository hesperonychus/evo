<?php
class Test extends CI_Controller{
	
	function index()
	{
	
		
				$this->load->view('test/li');
	}
	function edit(){
		$this->load->view('test/edit');
	}

}