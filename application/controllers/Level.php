<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard/v_dashboard');
    }
    
    public function list()
	{
		$this->load->view('dashboard/level/v_level');
	}
}
