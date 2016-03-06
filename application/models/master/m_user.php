<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model{

    function get_list_user($params){
        $sql = "SELECT * FROM user WHERE user_nm LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_user($params){
        $sql = "SELECT COUNT(*) as 'total' FROM user WHERE user_nm LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_user_by_id($params){
        $sql = "SELECT * FROM user WHERE id_user = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_user($params){
        return $this->db->insert('user', $params);
    }

    function update_user($params, $update){
        return $this->db->update('user', $params, $update);
    }

    function delete_user($params){
        $sql = "DELETE FROM user WHERE id_user = ?";
        return $this->db->query($sql, $params);
    }

}
