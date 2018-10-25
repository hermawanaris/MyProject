<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akses extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('m_akses');
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('login');
            redirect($url);
        };
	}
	
	public function index()
	{
		$x['data']=$this->m_akses->get_all_akses();
        $this->load->view('dashboard/akses/v_akses',$x);
    }

}
