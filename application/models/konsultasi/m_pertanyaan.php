<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pertanyaan extends CI_Model{

    function get_list_pertanyaan($params){
        $sql = "SELECT * FROM pertanyaan WHERE nama_konsul LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_pertanyaan($params){
        $sql = "SELECT COUNT(*) as 'total' FROM pertanyaan WHERE nama_konsul LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_pertanyaan_by_id($params){
        $sql = "SELECT * FROM pertanyaan WHERE nama_konsul = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_pertanyaan($params){
        return $this->db->insert('pertanyaan', $params);
    }

    function update_pertanyaan($params, $update){
        return $this->db->update('pertanyaan', $params, $update);
    }

    function delete_pertanyaan($params){
        $sql = "DELETE FROM pertanyaan WHERE nama_konsul = ?";
        return $this->db->query($sql, $params);
    }

}
