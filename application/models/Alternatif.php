<?php 
	class Alternatif extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectAll(){
			$this->db->select('*');
			$this->db->from('tb_alternatif');

			return $this->db->get();
		}

		function insert($data){
			$this->db->insert('tb_alternatif',$data);

			return $this->db->insert_id();
		}
	}
 ?>