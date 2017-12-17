<?php 
	class Eigen extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectAll(){
			$this->db->select('*');
			$this->db->from('tb_eigen');

			return $this->db->get();
		}

		function selectByIdk(){
			$this->db->select('*');
			$this->db->from('tb_eigen');

			return $this->db->get();
		}
		function insert($data){
			$this->db->insert('tb_eigen',$data);

			return $this->db->insert_id();
		}
		function update($id,$data){
			$this->db->set($data);
			$this->db->where('id',$id);
			$this->db->update('tb_eigen');
		}


	}
 ?>