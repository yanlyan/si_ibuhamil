<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class Export extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('laporandataibu/m_export');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");

        $this->load->model('master/m_pasien');

        // set template content
        $this->smarty->assign("template_content", "laporandataibu/list_pasien.html");
        // session
        $search = $this->tsession->userdata('search_export');
        $this->smarty->assign('search', $search);
        // parameter
        $pasien_nm = !empty($search['pasien_nm']) ? "%" . $search['pasien_nm'] . "%" : "%";
        $params_search = array($pasien_nm);

        // pagination
        $config['base_url'] = site_url("laporandataibu/export/index/");
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

    function rekapmedik($id_pasien){
        // set page rules
        $this->_set_page_rule("R");

        $this->load->model('laporandataibu/m_rekapmedik');

        // set template content
        $this->smarty->assign("template_content", "laporandataibu/list_rekapmedik.html");
        // session
        $search = $this->tsession->userdata('search_rekapmedik');
        $this->smarty->assign('search', $search);
        // parameter
        $pasien_nm = !empty($search['pasien_nm']) ? "%" . $search['pasien_nm'] . "%" : "%";
        $params_search = array($id_pasien, $pasien_nm);

        // pagination
        $config['base_url'] = site_url("laporandataibu/export/rekapmedik/".$id_pasien."/");
        $config['total_rows'] = $this->m_rekapmedik->get_total_rekapmedik($params_search);

        $config['uri_segment'] = 4;
        $config['per_page'] = 10;
        $this->pagination->initialize($config);
        $pagination['data'] = $this->pagination->create_links();

        // pagination attribute
        $start = $this->uri->segment(5, 0) + 1;
        $end = $this->uri->segment(5, 0) + $config['per_page'];
        $end = (($end > $config['total_rows']) ? $config['total_rows'] : $end);
        $pagination['start'] = ($config['total_rows'] == 0) ? 0 : $start;
        $pagination['end'] = $end;
        $pagination['total'] = $config['total_rows'];

        // pagination assign value
        $this->smarty->assign("pagination", $pagination);
        $this->smarty->assign("no", $start);

        // /* end of pagination ---------------------- */
        $params = array($id_pasien, $pasien_nm, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_rekapmedik->get_list_rekapmedik($params));
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function view($data_type, $id) {
        switch ($data_type) {
            case 'rekapmedik':
                $view_file = 'rekapmedik';
                break;
            case 'riwayatkehamilan':
                $view_file = 'riwayatkehamilan';
                break;
            case 'rencanapersalinan':
                $view_file = 'rencanapersalinan';
                break;

            default:
                $view_file = 'rekapmedik';
                break;
        }

        $params = array($id);

        $this->load->model('laporandataibu/m_rekapmedik');
        $data['result'] = $this->m_rekapmedik->get_rekapmedik_by_id($params);

        $this->load->view('laporandataibu/' . $view_file, $data);
    }

    function pdf($data_type, $id) {
        switch ($data_type) {
            case 'rekapmedik':
                $view_file = 'rekapmedik';
                break;
            case 'riwayatkehamilan':
                $view_file = 'riwayatkehamilan';
                break;
            case 'rencanapersalinan':
                $view_file = 'rencanapersalinan';
                break;

            default:
                $view_file = 'rekapmedik';
                break;
        }

        $data = array();
        //load the view and saved it into $html variable
        $html = $this->load->view('laporan/'.$view_file, $data, true);

        //this the the PDF filename that user will get to download
        $pdfFilePath = $view_file . ".pdf";

        //load mPDF library
        $this->load->library('m_pdf');

       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);

        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
    }

    function search_process(){
        // set page rules
        $this->_set_page_rule("R");
        //--
        if ($this->input->post('save') == 'Cari') {
            $params = array(
                "pasien_nm" => $this->input->post('pasien_nm'),
            );
            // set
            $this->tsession->set_userdata('search_rencanapersalinan', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_rencanapersalinan');
        }
        //--
        redirect('dataibu/rencanapersalinan');
    }
}
