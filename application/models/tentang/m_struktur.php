<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_struktur extends CI_Model{

    function get_list_struktur($params){
        $sql = "SELECT * FROM struktur WHERE nama_jabatan LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_struktur($params){
        $sql = "SELECT COUNT(*) as 'total' FROM struktur WHERE nama_jabatan LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_struktur_by_nama($params){
        $sql = "SELECT * FROM struktur WHERE nama_jabatan = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_struktur($params){
        return $this->db->insert('struktur', $params);
    }

    function update_struktur($params, $update){
        return $this->db->update('struktur', $params, $update);
    }

    function delete_struktur($params){
        $sql = "DELETE FROM struktur WHERE nama_jabatan = ?";
        return $this->db->query($sql, $params);
    }

}
