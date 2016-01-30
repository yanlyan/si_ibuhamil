<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class informasi_penyakit extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function anemia_pada_ibu_hamil(){
		return 'info_penyakit/anemia_pada_ibu_hamil';
	}

	function resiko_anemia($kontent){
		return 'info_penyakit/'.$kontent;
	}

	function faktor_anemia($kontent){
		return 'info_penyakit/'.$kontent;
	}

	function penyebab_anemia(){
		return 'info_penyakit/penyebab_anemia';
	}

	function pencegahan_penanganan(){
		return 'info_penyakit/pencegahan_penanganan';
	}

	function penanganan_anemia(){
		return 'info_penyakit/penanganan_anemia';
	}

	function gejala_anemia(){
		return 'info_penyakit/gejala_anemia';
	}

}