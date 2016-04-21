<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_riwayatkehamilan extends CI_Model{

    function get_list_riwayatkehamilan($params){
        $sql = "SELECT * FROM riwayat_kehamilan "
            ."INNER JOIN pasien ON riwayat_kehamilan.id_pasien=pasien.id_pasien "
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

    function get_total_riwayatkehamilan($params){
        $sql = "SELECT COUNT(*) as 'total' FROM riwayat_kehamilan "
            ."INNER JOIN pasien ON riwayat_kehamilan.id_pasien=pasien.id_pasien "
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

    function get_riwayatkehamilan_by_id($params){
        $sql = "SELECT * FROM riwayat_kehamilan "
            ."INNER JOIN pasien ON riwayat_kehamilan.id_pasien=pasien.id_pasien "
            ."WHERE id_riwayatkehamilan = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_riwayatkehamilan($params){
        return $this->db->insert('riwayat_kehamilan', $params);
    }

    function update_riwayatkehamilan($params, $update){
        return $this->db->update('riwayat_kehamilan', $params, $update);
    }

    function delete_riwayatkehamilan($params){
        $sql = "DELETE FROM riwayat_kehamilan WHERE id_riwayat = ?";
        return $this->db->query($sql, $params);
    }

}
