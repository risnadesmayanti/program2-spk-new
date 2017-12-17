<?php 
	class Matriks extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectAll(){
			$this->db->select('*');
			$this->db->from('tb_matriks');

			return $this->db->get();
		}
		function selectById($id){
			$this->db->select('*');
			$this->db->from('tb_matriks');
			$this->db->order_by('id','desc');

			return $this->db->get();
		}

		function insert($data){
			$this->db->insert('tb_matriks',$data);
		}

		function calculate($a,$b,$b_a,$k_b,$k_a){
			// echo "<pre>";
			// var_dump($a);
			// echo "</pre>";
			// var_dump($b);
			$res = array(array());
			for($j = 0 ; $j < $k_b;$j++){
				for($i = 0; $i < $b_a; $i++){
					$res[$i][$j] = 0;
					for($k = 0;$k < $k_a;$k++){
						$res[$i][$j] = $res[$i][$j] + ($a[$i][$k] * $b[$k][$j]);
					}
				}
			}

			for($i = 0; $i < $b_a;$i++){
				$sum[$i] = 0;
				for($j=0;$j < $k_b;$j++){
					$sum[$i] += $res[$i][$j];
				}
			}
			$total = 0;
			for($i=0;$i<$b_a;$i++){
				$total += $sum[$i];
			}
			// echo "<pre>";
			// var_dump($sum);
			// echo "</pre>";
			for($i=0;$i<$b_a;$i++){
				$eigen[$i] = $sum[$i] / $total; 
			}
			return $eigen;
			// var_dump($eigen);
			// $cek = 0;
			// for($i=0;$i<$b_a;$i++){
			// 	$cek += $eigen[$i];
			// }
			// var_dump($cek);	
		}
	}
 ?>