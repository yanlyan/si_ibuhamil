<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kegiatan extends CI_Model{

    function get_list_kegiatan($params){
        $sql = "SELECT * FROM kegiatan WHERE nama_kegiatan LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_kegiatan($params){
        $sql = "SELECT COUNT(*) as 'total' FROM kegiatan WHERE nama_kegiatan LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_kegiatan_by_id($params){
        $sql = "SELECT * FROM kegiatan WHERE id_kegiatan = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_kegiatan($params){
        return $this->db->insert('kegiatan', $params);
    }

    function update_kegiatan($params, $update){
        return $this->db->update('kegiatan', $params, $update);
    }

    function delete_kegiatan($params){
        $sql = "DELETE FROM kegiatan WHERE id_kegiatan = ?";
        return $this->db->query($sql, $params);
    }

}
