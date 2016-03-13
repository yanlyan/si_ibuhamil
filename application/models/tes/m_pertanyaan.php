<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pertanyaan extends CI_Model{

    function get_list_konsultasi($params){
        $sql = "SELECT * FROM konsultasi WHERE nama_konsul LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_all_konsultasi(){
        $sql = "SELECT * FROM konsultasi";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_konsultasi($params){
        $sql = "SELECT COUNT(*) as 'total' FROM konsultasi WHERE nama_konsul LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_konsultasi_by_id($params){
        $sql = "SELECT * FROM konsultasi WHERE id_konsul = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_konsultasi($params){
        return $this->db->insert('konsultasi', $params);
    }

    function update_konsultasi($params, $update){
        return $this->db->update('konsultasi', $params, $update);
    }

    function delete_konsultasi($params){
        $sql = "DELETE FROM konsultasi WHERE id_konsul = ?";
        return $this->db->query($sql, $params);
    }

}
