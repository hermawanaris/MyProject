<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    function auth_login($username,$password){
        $query=$this->db->query("SELECT * FROM v_akun_pegawai WHERE (akun_username='$username' AND akun_password=MD5('$password')) AND akun_blokir='Tidak' LIMIT 1");
        return $query;
    }
    
}
