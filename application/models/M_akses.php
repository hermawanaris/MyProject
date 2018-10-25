<?php
class M_akses extends CI_Model{

	public $table = 'akses';
    public $id = 'akses_kd';
    public $order = 'ASC';

	function get_all_akses(){
		$hsl=$this->db->query("SELECT * FROM akses ORDER BY akses_kd ASC");
		return $hsl;
	}	
} 