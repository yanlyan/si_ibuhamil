<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pasien extends CI_Model{

    function get_list_pasien($params){
        $sql = "SELECT * FROM pasien WHERE pasien_nm LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_pasien($params){
        $sql = "SELECT COUNT(*) as 'total' FROM pasien WHERE pasien_nm LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_pasien_by_id($params){
        $sql = "SELECT * FROM pasien WHERE id_pasien = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_pasien($params){
        return $this->db->insert('pasien', $params);
    }

    function update_pasien($params, $update){
        return $this->db->update('pasien', $params, $update);
    }

    function delete_pasien($params){
        $sql = "DELETE FROM pasien WHERE id_pasien = ?";
        return $this->db->query($sql, $params);
    }

}
