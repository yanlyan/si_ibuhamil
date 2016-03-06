<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_measure extends CI_Model{

    function get_list_diagnosa($params){
        $sql = "SELECT * FROM diagnosa WHERE id_konsul LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_diagnosa($params){
        $sql = "SELECT COUNT(*) as 'total' FROM diagnosa WHERE id_konsul LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_diagnosa_by_id($params){
        $sql = "SELECT * FROM diagnosa WHERE id = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_diagnosa($params){
        return $this->db->insert('diagnosa', $params);
    }

    function update_diagnosa($params, $update){
        return $this->db->update('diagnosa', $params, $update);
    }

    function delete_diagnosa($params){
        $sql = "DELETE FROM diagnosa WHERE id = ?";
        return $this->db->query($sql, $params);
    }

}
