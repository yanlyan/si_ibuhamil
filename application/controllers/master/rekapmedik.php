<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class Rekapmedik extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('master/m_rekapmedik');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "master/rekapmedik/list.html");
        // session
        $search = $this->tsession->userdata('search_rekapmedik');
        $this->smarty->assign('search', $search);
        // parameter
        $rekapmedik_nm = !empty($search['rekapmedik_nm']) ? "%" . $search['rekapmedik_nm'] . "%" : "%";
        $params_search = array($rekapmedik_nm);

        // pagination
        $config['base_url'] = site_url("master/rekapmedik/index/");
        $config['total_rows'] = $this->m_rekapmedik->get_total_rekapmedik($params_search);

        $config['uri_segment'] = 4;
        $config['per_page'] = 10;
        $this->pagination->initialize($config);
        $pagination['data'] = $this->pagination->create_links();

        // pagination attribute
        $start = $this->uri->segment(4, 0) + 1;
        $end = $this->uri->segment(4, 0) + $config['per_page'];
        $end = (($end > $config['total_rows']) ? $config['total_rows'] : $end);
        $pagination['start'] = ($config['total_rows'] == 0) ? 0 : $start;
        $pagination['end'] = $end;
        $pagination['total'] = $config['total_rows'];

        // pagination assign value
        $this->smarty->assign("pagination", $pagination);
        $this->smarty->assign("no", $start);

        // /* end of pagination ---------------------- */
        $params = array($rekapmedik_nm, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_rekapmedik->get_list_rekapmedik($params));
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function search_process(){
        // set page rules
        $this->_set_page_rule("R");
        //--
        if ($this->input->post('save') == 'Cari') {
            $params = array(
                "rekapmedik_nm" => $this->input->post('rekapmedik_nm'),
            );
            // set
            $this->tsession->set_userdata('search_rekapmedik', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_rekapmedik');
        }
        //--
        redirect('master/rekapmedik');
    }

    function add(){
        $this->load->model('master/m_pasien');
        // set page rules
        $this->_set_page_rule("C");
        // load js
        $this->smarty->load_javascript('summernote/summernote.js');
        $this->smarty->load_javascript('datetimepicker/moment.js');
        $this->smarty->load_javascript('datetimepicker/bootstrap-datetimepicker.js');
        // load css
        $this->smarty->load_style('summernote/summernote.css');
        $this->smarty->load_style('datetimepicker/bootstrap-datetimepicker.css');
        // set template content
        $this->smarty->assign("template_content", "master/rekapmedik/add.html");

        // params
        $params = array("%", 0, 10000000000000);
        // get data pasien
        $this->smarty->assign("rs_pasien", $this->m_pasien->get_list_pasien($params));
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('pasien', 'Pasien', 'trim|required');
        $this->tnotification->set_rules('anamnese[s]', 'Anamnese S', 'trim|required');
        $this->tnotification->set_rules('anamnese[o]', 'Anamnese O', 'trim|required');
        $this->tnotification->set_rules('anamnese[a]', 'Anamnese A', 'trim|required');
        $this->tnotification->set_rules('anamnese[p]', 'Anamnese P', 'trim|required');
        $this->tnotification->set_rules('diagnosis', 'Diagnosis', 'trim|required');
        $this->tnotification->set_rules('icd', 'ICD', 'trim');
        $this->tnotification->set_rules('tindakan', 'Terapi / Tindakan', 'trim|required');
        $this->tnotification->set_rules('tgl_periksa', 'Tanggal Periksa', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {
            $session = $this->tsession->userdata('session_operator');
            $anamnese = array(
                "S" => $this->input->post('anamnese[s]'),
                "O" => $this->input->post('anamnese[o]'),
                "A" => $this->input->post('anamnese[a]'),
                "P" => $this->input->post('anamnese[p]'),
            );
            $params_insert = array(
                'id_pasien' => $this->input->post('pasien'),
                'id_user' => $session['user_id'],
                'tgl_periksa' => $this->input->post('tgl_periksa'),
                'anamnese_pxfisik' => json_encode($anamnese),
                'diagnosis' => $this->input->post('diagnosis'),
                'icd' => $this->input->post('icd'),
                'terapi_tindakan' => $this->input->post('tindakan')
            );

            if ($this->m_rekapmedik->insert_rekapmedik($params_insert)) {
                // notification
                $this->tnotification->delete_last_field();
                $this->tnotification->sent_notification("success", "Data berhasil disimpan");
            }else{
                // default error
                $this->tnotification->sent_notification("error", "Data gagal disimpan waktu insert");
            }
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal disimpan, waktu validasi");
        }
        redirect('master/rekapmedik/add');
    }

    function edit($id_rekapmedik){
        $this->load->model('master/m_pasien');

        // set page rules
        $this->_set_page_rule("U");
        // load js
        $this->smarty->load_javascript('summernote/summernote.js');
        $this->smarty->load_javascript('datetimepicker/moment.js');
        $this->smarty->load_javascript('datetimepicker/bootstrap-datetimepicker.js');
        // load css
        $this->smarty->load_style('summernote/summernote.css');
        $this->smarty->load_style('datetimepicker/bootstrap-datetimepicker.css');
        // set template content
        $this->smarty->assign("template_content", "master/rekapmedik/edit.html");
        // params
        $params = array("%", 0, 10000000000000);
        // get data pasien
        $this->smarty->assign("rs_pasien", $this->m_pasien->get_list_pasien($params));
        // get data
        $result = $this->m_rekapmedik->get_rekapmedik_by_id($id_rekapmedik);
        // assign variable
        $this->smarty->assign('result',$result);
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function edit_process(){
        // set page rules
        $this->_set_page_rule("U");
        // input validation
        $this->tnotification->set_rules('pasien', 'Pasien', 'trim|required');
        $this->tnotification->set_rules('anamnese[s]', 'Anamnese S', 'trim|required');
        $this->tnotification->set_rules('anamnese[o]', 'Anamnese O', 'trim|required');
        $this->tnotification->set_rules('anamnese[a]', 'Anamnese A', 'trim|required');
        $this->tnotification->set_rules('anamnese[p]', 'Anamnese P', 'trim|required');
        $this->tnotification->set_rules('diagnosis', 'Diagnosis', 'trim|required');
        $this->tnotification->set_rules('icd', 'ICD', 'trim');
        $this->tnotification->set_rules('tindakan', 'Terapi / Tindakan', 'trim|required');
        $this->tnotification->set_rules('tgl_periksa', 'Tanggal Periksa', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {

            $anamnese = array(
                "S" => $this->input->post('anamnese[s]'),
                "O" => $this->input->post('anamnese[o]'),
                "A" => $this->input->post('anamnese[a]'),
                "P" => $this->input->post('anamnese[p]'),
            );
            $params_update = array(
                'id_pasien' => $this->input->post('pasien'),
                // 'id_user' => $session['user_id'],
                'tgl_periksa' => $this->input->post('tgl_periksa'),
                'anamnese_pxfisik' => json_encode($anamnese),
                'diagnosis' => $this->input->post('diagnosis'),
                'icd' => $this->input->post('icd'),
                'terapi_tindakan' => $this->input->post('tindakan')
            );

            $where = array(
                'id_rekapmedik' => $this->input->post('id_rekapmedik')
            );

            if ($this->m_rekapmedik->update_rekapmedik($params_update, $where)) {
                // notification
                $this->tnotification->delete_last_field();
                $this->tnotification->sent_notification("success", "Data berhasil disimpan");
            }else{
                // default error
                $this->tnotification->sent_notification("error", "Data gagal disimpan");
            }
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal disimpan");
        }
        redirect('master/rekapmedik/edit/'.$this->input->post('id_rekapmedik'));
    }

    function delete($id_rekapmedik){
        $this->_set_page_rule("D");
        if ($this->m_rekapmedik->delete_rekapmedik($id_rekapmedik)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('master/rekapmedik');
    }

}
