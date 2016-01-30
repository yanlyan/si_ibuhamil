<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function visi_misi(){
		return ('profile/visi_misi');
	}

	function strategi_kebijakan(){
		return ('profile/strategi_kebijakan');
	}

	function organisasi(){
		$img = $this->db->get_where('setting', array('id_setting'=> 1))->row_array();
		return $img['img_org'];
	}
}