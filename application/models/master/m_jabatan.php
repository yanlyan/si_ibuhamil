<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_jabatan extends CI_Model{

    function get_list_jabatan($params){
        $sql = "SELECT * FROM jabatan WHERE nama_jabatan LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_jabatan($params){
        $sql = "SELECT COUNT(*) as 'total' FROM jabatan WHERE nama_jabatan LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_jabatan_by_id($params){
        $sql = "SELECT * FROM jabatan WHERE id_jabatan = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_jabatan($params){
        return $this->db->insert('jabatan', $params);
    }

    function update_jabatan($params, $update){
        return $this->db->update('jabatan', $params, $update);
    }

    function delete_jabatan($params){
        $sql = "DELETE FROM jabatan WHERE id_jabatan = ?";
        return $this->db->query($sql, $params);
    }

}
