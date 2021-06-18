<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('daftar_data');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	function update_data(){
		return $this->db->get('daftar_data');
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}