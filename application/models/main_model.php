<?php

class main_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function login($input) {
        $array = array(
            'username' => $input['username'],
            'password' => $input['password']
        );
        $this->db->where($array);
        $query = $this->db->get('user');
        return $query->num_rows();
    }

    function setSessionUserLogin($data_primary) {
        $query = $this->db->get_where('user', $data_primary);
        return $query->result_array();
    }
    
    function register_user($input){
        if($this->db->insert('user', $input)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function insert_hasil_konsul($input){
        if($this->db->insert('hasil_konsul', $input)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function getAllUser(){
        return $this->db->get_where('user', array('level'=>'0'))->result_array();
    }
    
    function get_user_stat($id){
        return $this->db->get_where('hasil_konsul', array('id_user' => $id))->result_array();
    }
    
    function delete_user($id){
        $this->db->where('id_user', $id);
        if($this->db->delete('user')){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    function getUserByID($id){
         return $this->db->get_where('user', array('id_user'=>$id))->row_array();
    }

    function updateUser($id, $data){
        $this->db->where('id_user', $id);
        if($this->db->update('user', $data)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    
    function get_konsul_tips($primary){
        return $this->db->get_where('tips', array('kategori' => $primary))->row_array();
    }

    function update_home($data){
        $this->db->where('id_home', 1);
        if($this->db->update('home_tbl', $data)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function getHome(){
        return $this->db->get_where('home_tbl', array('id_home' => 1))->row_array();
    }

    function getInfoPenyakit(){
        return $this->db->get_where('info_penyakit', array('id_info' => 1))->row_array();
    }

    function update_info_penyakit($data){
        $this->db->where('id_info', 1);
        if($this->db->update('info_penyakit', $data)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function getKebutuhanGizi(){
        return $this->db->get_where('kebutuhan_gizi', array('id_kebutuhan' => 1))->row_array();
    }

    function update_kebutuhan_gizi($data){
        $this->db->where('id_kebutuhan', 1);
        if($this->db->update('kebutuhan_gizi', $data)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}
