<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function index()
	{
		$this->load->view('akun/v_akun');
    }
    
    public function list()
	{
		$this->load->view('dashboard/akun/v_akun');
	}
}
