<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require_once(APPPATH. "controllers/base/OperatorBase.php");

class tes extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('master/m_pasien');
        $this->load->model('tes/m_pertanyaan');
        // load libraries
        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "tes/tes/list.html");
        // session
        $search = $this->tsession->userdata('search_pasien');
        $this->smarty->assign('search', $search);
        // parameter
        $pasien_nm = !empty($search['pasien_nm']) ? "%" . $search['pasien_nm'] . "%" : "%";
        $params_search = array($pasien_nm);

        // pagination
        $config['base_url'] = site_url("tes/tes/index/");
        $config['total_rows'] = $this->m_pasien->get_total_pasien($params_search);

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
        $params = array($pasien_nm, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_pasien->get_list_pasien($params));
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function tes($params){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "tes/tes/tes.html");

        // session
        $session_jawaban = $this->tsession->userdata('session_jawaban');


        $params_search = array('%');

        // pagination
        $config['base_url'] = site_url("tes/tes/tes/$params/index/");
        $config['total_rows'] = $this->m_pertanyaan->get_total_konsultasi($params_search);

        $config['uri_segment'] = 6;
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $pagination['data'] = $this->pagination->create_links();

        // pagination attribute
        $start = $this->uri->segment(6, 0) + 1;
        $end = $this->uri->segment(6, 0) + $config['per_page'];
        $end = (($end > $config['total_rows']) ? $config['total_rows'] : $end);
        $pagination['start'] = ($config['total_rows'] == 0) ? 0 : $start;
        $pagination['end'] = $end;
        $pagination['total'] = $config['total_rows'];

        // pagination assign value
        $this->smarty->assign("pagination", $pagination);
        $this->smarty->assign("no", $start);
        $this->smarty->assign("end", $end);

        // /* end of pagination ---------------------- */


        // get pertanyaan
        $params_pertanyaan = array('%', ($start - 1), $config['per_page']);
        $rs_pertanyaan = $this->m_pertanyaan->get_list_konsultasi($params_pertanyaan);

        $pasien = $this->m_pasien->get_pasien_by_id($params);

        // assign data
        $this->smarty->assign("rs_pertanyaan", $rs_pertanyaan);
        $this->smarty->assign("pasien", $pasien);
        $this->smarty->assign("jawaban", $session_jawaban);

        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function process_tes(){
        // set page rules
        $this->_set_page_rule("U");

        $session_jawaban = $this->tsession->userdata('session_jawaban');
        $rs_pertanyaan = $this->input->post('pertanyaan');
        $rs_jawaban = $this->input->post('jawaban');

        foreach ($rs_pertanyaan as $key => $pertanyaan) {
            $session_jawaban[$pertanyaan] = $rs_jawaban[$pertanyaan];
        }

        

        $this->tsession->set_userdata('session_jawaban', $session_jawaban);

        redirect($this->input->post('redirect'));
    }



}
