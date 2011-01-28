<?php

class Main extends Controller {

	function Main()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('main');
	}
}

/* End of file main.php */
/* Location: ./system/application/controllers/main.php */