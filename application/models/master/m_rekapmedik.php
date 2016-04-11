<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekapmedik extends CI_Model{

    function get_list_rekapmedik($params){
        $sql = "SELECT * FROM rekap_medik "
            ."INNER JOIN pasien ON rekap_medik.id_pasien=pasien.id_pasien "
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

    function get_total_rekapmedik($params){
        $sql = "SELECT COUNT(*) as 'total' FROM rekap_medik "
            ."INNER JOIN pasien ON rekap_medik.id_pasien=pasien.id_pasien "
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

    function get_rekapmedik_by_id($params){
        $sql = "SELECT * FROM rekap_medik WHERE id_rekapmedik = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $anamnese_pxfisik = json_decode($result['anamnese_pxfisik']);
            $result['anamnese_s'] = $anamnese_pxfisik->S;
            $result['anamnese_o'] = $anamnese_pxfisik->O;
            $result['anamnese_a'] = $anamnese_pxfisik->A;
            $result['anamnese_p'] = $anamnese_pxfisik->P;
            $query->free_result();
            return $result;
        } else {
            return NULL;
        }
    }

    function insert_rekapmedik($params){
        return $this->db->insert('rekap_medik', $params);
    }

    function update_rekapmedik($params, $update){
        return $this->db->update('rekap_medik', $params, $update);
    }

    function delete_rekapmedik($params){
        $sql = "DELETE FROM rekap_medik WHERE id_rekapmedik = ?";
        return $this->db->query($sql, $params);
    }

}
