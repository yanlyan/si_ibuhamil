<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model{

    function get_list_com_user($params){
        $sql = "SELECT * FROM com_user WHERE user_name LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_com_user($params){
        $sql = "SELECT COUNT(*) as 'total' FROM com_user WHERE user_name LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_com_user_by_user($params){
        $sql = "SELECT * FROM com_user WHERE user_id = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_com_user($params){
        return $this->db->insert('com_user', $params);
    }

    function update_com_user($params, $update){
        return $this->db->update('com_user', $params, $update);
    }

    function delete_com_user($params){
        $sql = "DELETE FROM com_user WHERE user_id = ?";
        return $this->db->query($sql, $params);
    }

}
