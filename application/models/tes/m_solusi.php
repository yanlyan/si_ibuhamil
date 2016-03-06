<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_solusi extends CI_Model{

    function get_list_tips($params){
        $sql = "SELECT * FROM tips WHERE isi_pakar LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_tips($params){
        $sql = "SELECT COUNT(*) as 'total' FROM tips WHERE isi_pakar LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_tips_by_id($params){
        $sql = "SELECT * FROM tips WHERE id_tips = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_tips($params){
        return $this->db->insert('tips', $params);
    }

    function update_tips($params, $update){
        return $this->db->update('tips', $params, $update);
    }

    function delete_tips($params){
        $sql = "DELETE FROM tips WHERE id_tips = ?";
        return $this->db->query($sql, $params);
    }

}
