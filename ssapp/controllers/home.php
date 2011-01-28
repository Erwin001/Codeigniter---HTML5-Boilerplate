<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('home_v');
	}
}

/* End of file main.php */
/* Location: ./ssapp/controllers/home.php */