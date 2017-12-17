<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome2 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function aasort(&$array, $key) {
	    $sorter=array();
	    $ret=array();
	    reset($array);
	    foreach ($array as $ii => $va) {
	        $sorter[$ii]=$va[$key];
	    }
	    arsort($sorter);
	    foreach ($sorter as $ii => $va) {
	        $ret[$ii]=$array[$ii];
	    }
	    $array=$ret;
	}
	public function index()
	{
		$this->calculateEigen();
		$t = $this->calculateEigen2();
		$data['alternatif'] = $this->Alternatif->selectAll()->result_array();
		$i=0;
		$h = array(array());
		foreach($t as $tt){
			$h[$i]["nama"] = $data['alternatif'][$i]['nama'];
			$h[$i]['value'] = $tt;
			$i++;
		}
		$this->aasort($h,"value");
		$data['rekomendasi'] = $h;
		// arsort($data['rekomendasi']);
		//var_dump($data['rekomendasi']);
		$data['kriteria'] = $this->Kriteria->selectAll()->result_array();
		$data['sort'] = $this->Kriteria->selectAllSort()->result_array();
		//$this->load->view('index2',$data);
		$this->load->view('overview', $data);
		// var_dump($data['rekomendasi']);
	}

	public function report_user()
	{
		$this->calculateEigen();
		$t = $this->calculateEigen2();
		$data['alternatif'] = $this->Alternatif->selectAll()->result_array();
		$i=0;
		$h = array(array());
		foreach($t as $tt){
			$h[$i]["nama"] = $data['alternatif'][$i]['nama'];
			$h[$i]['value'] = $tt;
			$i++;
		}
		$this->aasort($h,"value");
		$data['rekomendasi'] = $h;
		// arsort($data['rekomendasi']);
		// var_dump($data['rekomendasi']);
		$data['kriteria'] = $this->Kriteria->selectAll()->result_array();
		$data['sort'] = $this->Kriteria->selectAllSort()->result_array();
		$this->load->view('report_user',$data);
		// var_dump($data['rekomendasi']);
	}

	

	public function inputk(){
		$data = $this->input->post('kriteria');
		$data = $this->input->post('deskripsi');
		$kriteria['kriteria'] = $data['kriteria'];
		$kriteria['deskripsi'] = $data['deskripsi'];
		$iid = $this->Kriteria->insert($kriteria);

		$data['arr'][$this->Kriteria->selectAll()->num_rows()-1] = "1/1";
		for ($i=0; $i < $this->Kriteria->selectAll()->num_rows() ; $i++) { 
			$matriks['x'] = $i;
			$matriks['y'] = $this->Kriteria->selectAll()->num_rows()-1;
			$temp = explode('/',$data['arr'][$i]);
			$matriks['value'] = $temp[0]/$temp[1];
			// var_dump($matriks);
			// echo "<br>";
			$this->Matriks->insert($matriks);
		}

		for ($i=0; $i < $this->Kriteria->selectAll()->num_rows() ; $i++) { 
			$matriks['x'] = $this->Kriteria->selectAll()->num_rows()-1;
			$matriks['y'] = $i;
			$temp = explode('/',$data['arr'][$i]);
			$matriks['value'] = $temp[1]/$temp[0];
			// var_dump($matriks);
			if($i != $this->Kriteria->selectAll()->num_rows()-1) $this->Matriks->insert($matriks);
		}

		$kriter = $this->Kriteria->selectAll()->result_array();
		// var_dump($data['arra']);
		// $data['arra'][$this->Alternatif->selectAll()->num_rows()-1] = "1";
		for ($i=0; $i < $this->Alternatif->selectAll()->num_rows() ; $i++) { 
			$ins['idk'] = $iid;
			$ins['ida'] = $i;
			$ins['value'] = $data['arra'][$i];
			$this->Eigen->insert($ins);
			for($j=0; $j < $this->Alternatif->selectAll()->num_rows(); $j++){
				// var_dump($i."----".$j);
				if($i == $j){
					$matriks['x'] = $i;
					$matriks['y'] = $j;
					$matriks['idk'] = $iid;
					// $temp = explode('/',$data['arra'][$i]);
					$matriks['value'] = 1;	
				}else{
					$matriks['x'] = $i;
					$matriks['y'] = $j;
					$matriks['idk'] = $iid;
					// $temp = explode('/',$data['arra'][$i]);
					$matriks['value'] = $data['arra'][$i]/$data['arra'][$j];
				}

				$this->Matriks2->insert($matriks);
			}
			// var_dump($matriks);
			// echo "<br>";
		}

		// for ($i=0; $i < $this->Alternatif->selectAll()->num_rows() ; $i++) { 
		// 	$matriks['x'] = $this->Alternatif->selectAll()->num_rows()-1;
		// 	$matriks['y'] = $i;
		// 	$matriks['idk'] = $iid;
		// 	$temp = explode('/',$data['arra'][$i]);
		// 	$matriks['value'] = $temp[1]/$temp[0];
		// 	// var_dump($matriks);
		// 	if($i != $this->Alternatif->selectAll()->num_rows()-1) $this->Matriks->insert($matriks);
		// }

		// $mat2['arra']

		redirect('Welcome/');

	}
	public function inputa(){
		$data = $this->input->post();
		$alt['nama'] = $data['mobil'];
		$alt['deskripsi'] = $data['deskmobil'];
		$eig['ida'] = $this->Alternatif->insert($alt);

		foreach($data['arrv'] as $key => $val){
			$eig['idk'] = $key;
			$eig['value'] = $val;
			$this->Eigen->insert($eig);
		}

		foreach($data['arrv'] as $key => $v){
			$dataEigen = $this->Eigen->selectByIdk($key)->result_array();
			// $dataEigen2 = $this->Eigen->sele
			for($i=0;$i<$this->Alternatif->selectAll()->num_rows();$i++){
				$mat['x'] = $i;
				$mat['y'] = $this->Alternatif->selectAll()->num_rows()-1;
				$mat['idk'] = $key;
				if($i != $this->Alternatif->selectAll()->num_rows()-1){
					$mat['value'] = $dataEigen[$i]['ida']/$v;
				}else{
					$mat['value'] = 1;
				}
				$this->Matriks2->insert($mat);
			}
			for($i=0;$i<$this->Alternatif->selectAll()->num_rows();$i++){
				$mat['x'] = $this->Alternatif->selectAll()->num_rows()-1;
				$mat['y'] = $i;
				$mat['idk'] = $key;
				if($i != $this->Alternatif->selectAll()->num_rows()-1){
					$mat['value'] = $dataEigen[$i]['ida']/$v;
					$this->Matriks2->insert($mat);
				}
			}
		}
		// var_dump($data);
		redirect('Welcome/');
	}
	public function calculateEigen(){
		$data = $this->Matriks->selectAll()->result_array();
		foreach($data as $val){
			$mat[$val['x']][$val['y']] = $val['value'];
		}
		$eigen = $this->Matriks->calculate($mat,$mat,$this->Kriteria->selectAll()->num_rows(),$this->Kriteria->selectAll()->num_rows(),$this->Kriteria->selectAll()->num_rows());
		
		$id = $this->Kriteria->selectAll()->result_array();
		// var_dump($id);
		for($i=0;$i<$this->Kriteria->selectAll()->num_rows();$i++){
			$updated['eigen'] = $eigen[$i];
			$this->Kriteria->update($id[$i]['id'],$updated);
		}
	}
	public function calculateEigen2(){
		$last = array(array());
		$kriteria = $this->Kriteria->selectAll()->result_array();
		$j = 0;
		foreach($kriteria as $krit){
			$data = $this->Matriks2->selectByIdk($krit['id'])->result_array();
			$row = 0;
			foreach($data as $val){
				$mat[$val['x']][$val['y']] = $val['value'];
				if($val['y'] > $row){
					//var_dump($val['y']);
					$row = $val['x'];
				}
			}
			$eigen = $this->Matriks2->calculate($mat,$mat,$row+1,$row+1,$row+1);
			foreach($eigen as $loop => $val){
				// var_dump($loop);
				$last[$loop][$j] = $val;
			}
			$j++;
		}
		$matk = array(array());
		$j = 0;
		foreach($kriteria as $krit){
			$matk[$j][0] = $krit['eigen'];
			$j++;
		}

		// echo "<pre>";
		// var_dump($check);
		// echo "<pre/>";
		return $this->Matriks2->calculate($last,$matk,$this->Alternatif->selectAll()->num_rows(),1,$this->Kriteria->selectAll()->num_rows());
		// $id = $this->Kriteria->selectAll()->result_array();
		// var_dump($id);
		// for($i=0;$i<$this->Kriteria->selectAll()->num_rows();$i++){
			// $updated['eigen'] = $eigen[$i];
			// $this->Kriteria->update($id[$i]['id'],$updated);
		// }		
	}
}
