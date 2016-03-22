<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_tentang extends CI_Model{

    function get_tentang_by_jenis($params){
        $sql = "SELECT * FROM tentang WHERE jenis_tentang = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function update_tentang($params, $where){
        return $this->db->update('tentang', $params, $where);
    }

}
