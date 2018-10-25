<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        
    }
	public function index()
	{
		$this->load->view('v_login');
        if ($this->session->userdata('masuk') != False) {
            redirect('dashboard');
        }
	}

	function auth()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);
        
        $cek_login = $this->m_login->auth_login($username, $password);
              
        if ($cek_login->num_rows() > 0) {
            $data = $cek_login->row_array();
            $this->session->set_userdata('masuk', TRUE);
            if ($data['akses_nama'] == 'Administrator') { //Akses admin
                $this->session->set_userdata('akses_nama', 'Administrator'); 
                $this->session->set_userdata('ses_username', $data['akun_username']);               
                $this->session->set_userdata('ses_email', $data['akun_email']);;               
                $this->session->set_userdata('ses_nip', $data['akun_nip']);;              
                $this->session->set_userdata('ses_akses_nama', $data['akses_nama']);;  
                $this->session->set_userdata('ses_namaLengkap', $data['pegawai_namaLengkap']);; 
                $this->session->set_userdata('ses_foto', $data['pegawai_foto']);; 
                redirect('dashboard');
      
            } elseif ($data['akses_nama'] == 'Direktur') { //Direktur
                $this->session->set_userdata('akses_nama', 'Direktur'); 
                $this->session->set_userdata('ses_username', $data['akun_username']);               
                $this->session->set_userdata('ses_email', $data['akun_email']);;               
                $this->session->set_userdata('ses_nip', $data['akun_nip']);;              
                $this->session->set_userdata('ses_akses_nama', $data['akses_nama']);;  
                $this->session->set_userdata('ses_namaLengkap', $data['pegawai_namaLengkap']);; 
                $this->session->set_userdata('ses_foto', $data['pegawai_foto']);; 
                redirect('dashboard');

            }  else { //Operator
                $this->session->set_userdata('akses_nama', 'Operator'); 
                $this->session->set_userdata('ses_username', $data['akun_username']);               
                $this->session->set_userdata('ses_email', $data['akun_email']);;               
                $this->session->set_userdata('ses_nip', $data['akun_nip']);;              
                $this->session->set_userdata('ses_akses_nama', $data['akses_nama']);;  
                $this->session->set_userdata('ses_namaLengkap', $data['pegawai_namaLengkap']);; 
                $this->session->set_userdata('ses_foto', $data['pegawai_foto']);; 
                redirect('dashboard');
                
            }
            
        } else { // jika username dan password tidak ditemukan atau salah
			//akses verifikator
			$url = base_url('login');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">Username atau Password Salah!!!.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			redirect($url);
        }
        
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('login');
        redirect($url);
    }
}
