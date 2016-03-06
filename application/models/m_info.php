<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_info extends CI_Model{

    function get_info_by_jenis($params){
        $sql = "SELECT * FROM info_penyakit WHERE jenis_info = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function update_info($params, $where){
        return $this->db->update('info_penyakit', $params, $where);
    }

}
