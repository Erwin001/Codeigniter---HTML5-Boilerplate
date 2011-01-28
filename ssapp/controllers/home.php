<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$data['title'] = 'Codeigniter HTML5Boilerplate Template';
		
		$this->load->view('home_v', $data);
	}
}

/* End of file main.php */
/* Location: ./ssapp/controllers/home.php */