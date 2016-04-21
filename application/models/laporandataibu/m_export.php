<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_export extends CI_Model{

    function get_list_export($params){
        $sql = "SELECT * FROM rencana_persalinan "
            ."INNER JOIN pasien ON rencana_persalinan.id_pasien=pasien.id_pasien "
            ."WHERE pasien_nm LIKE ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_export($params){
        $sql = "SELECT COUNT(*) as 'total' FROM rencana_persalinan "
            ."INNER JOIN pasien ON rencana_persalinan.id_pasien=pasien.id_pasien "
            ."WHERE pasien_nm LIKE ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return array();
        }
    }

    function get_export_by_id($params){
        $sql = "SELECT * FROM rencana_persalinan "
            ."INNER JOIN pasien ON rencana_persalinan.id_pasien=pasien.id_pasien "
            ."WHERE id_rencana = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_export($params){
        return $this->db->insert('rencana_persalinan', $params);
    }

    function update_export($params, $update){
        return $this->db->update('rencana_persalinan', $params, $update);
    }

    function delete_export($params){
        $sql = "DELETE FROM rencana_persalinan WHERE id_rencana = ?";
        return $this->db->query($sql, $params);
    }

}
