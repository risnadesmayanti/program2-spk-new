<?php 
	class Kriteria extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectAll(){
			$this->db->select('*');
			$this->db->from('tb_kriteria');

			return $this->db->get();
		}

		function selectAllSort(){
			$this->db->select('*');
			$this->db->from('tb_kriteria');
			$this->db->order_by('eigen','desc');

			return $this->db->get();	
		}
		function selectById($id){
			$this->db->select('*');
			$this->db->from('tb_kriteria');
			$this->db->order_by('id','desc');

			return $this->db->get();
		}

		function insert($data){
			$this->db->insert('tb_kriteria',$data);
			return $this->db->insert_id();
		}
		function update($id,$data){
			$this->db->set($data);
			$this->db->where('id',$id);
			$this->db->update('tb_kriteria');
		}


	}
 ?>