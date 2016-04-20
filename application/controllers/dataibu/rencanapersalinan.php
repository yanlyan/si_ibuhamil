<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class rencanapersalinan extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('dataibu/m_rencanapersalinan');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "dataibu/rencanapersalinan/list.html");
        // session
        $search = $this->tsession->userdata('search_rencanapersalinan');
        $this->smarty->assign('search', $search);
        // parameter
        $pasien_nm = !empty($search['pasien_nm']) ? "%" . $search['pasien_nm'] . "%" : "%";
        $params_search = array($pasien_nm);

        // pagination
        $config['base_url'] = site_url("dataibu/rencanapersalinan/index/");
        $config['total_rows'] = $this->m_rencanapersalinan->get_total_rencanapersalinan($params_search);

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
        $this->smarty->assign("rs_id", $this->m_rencanapersalinan->get_list_rencanapersalinan($params));
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

    function view($id_rencanapersalinan){
            $this->load->model('master/m_pasien');

            // set page rules
            $this->_set_page_rule("R");
            // load js
            $this->smarty->load_javascript('summernote/summernote.js');
            $this->smarty->load_javascript('datetimepicker/moment.js');
            $this->smarty->load_javascript('datetimepicker/bootstrap-datetimepicker.js');
            // load css
            $this->smarty->load_style('summernote/summernote.css');
            $this->smarty->load_style('datetimepicker/bootstrap-datetimepicker.css');
            // set template content
            $this->smarty->assign("template_content", "dataibu/rencanapersalinan/view.html");
            // params
            $params = array("%", 0, 10000000000000);
            // get data pasien
            $this->smarty->assign("rs_pasien", $this->m_pasien->get_list_pasien($params));
            // get data
            $result = $this->m_rencanapersalinan->get_rencanapersalinan_by_id($id_rencanapersalinan);
            // assign variable
            $this->smarty->assign('result',$result);
            // notification
            $this->tnotification->display_notification();
            $this->tnotification->display_last_field();
            // display
            parent::display();
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
        $this->smarty->assign("template_content", "dataibu/rencanapersalinan/add.html");

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
        $this->tnotification->set_rules('golongan_darah', 'Golongan darah', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {
            $session = $this->tsession->userdata('session_operator');
            $params_insert = array(
                'id_pasien' => $this->input->post('pasien'),
                'id_user' => $session['user_id'],
                'golongan_darah' => $this->input->post('golongan_darah'),
                'penolong' => $this->input->post('penolong'),
                'tempat' => $this->input->post('tempat'),
                'pendamping' => $this->input->post('pendamping'),
                'calon_donor' => $this->input->post('calon_donor'),
                'diagnosa_medis' => $this->input->post('diagnosa_medis'),
                'leokimia' => $this->input->post('leokimia'),
                'klinik_fisik' => $this->input->post('klinik_fisik'),
                'riwayat_gizi' => $this->input->post('riwayat_gizi'),
                'pola_makan' => $this->input->post('pola_makan'),
                'asupan_gizi' => $this->input->post('asupan_gizi'),
                'intervensi_gizi' => $this->input->post('intervensi_gizi')
            );

            if ($this->m_rencanapersalinan->insert_rencanapersalinan($params_insert)) {
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
        redirect('dataibu/rencanapersalinan/add');
    }

    function edit($id_rencanapersalinan){
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
        $this->smarty->assign("template_content", "dataibu/rencanapersalinan/edit.html");
        // params
        $params = array("%", 0, 10000000000000);
        // get data pasien
        $this->smarty->assign("rs_pasien", $this->m_pasien->get_list_pasien($params));
        // get data
        $result = $this->m_rencanapersalinan->get_rencanapersalinan_by_id($id_rencanapersalinan);
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
        $this->tnotification->set_rules('golongan_darah', 'Golongan Darah', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {
            $params_update = array(
                'id_pasien' => $this->input->post('pasien'),
                'id_user' => $session['user_id'],
                'golongan_darah' => $this->input->post('golongan_darah'),
                'penolong' => $this->input->post('penolong'),
                'tempat' => $this->input->post('tempat'),
                'pendamping' => $this->input->post('pendamping'),
                'calon_donor' => $this->input->post('calon_donor'),
                'diagnosa_medis' => $this->input->post('diagnosa_medis'),
                'leokimia' => $this->input->post('leokimia'),
                'klinik_fisik' => $this->input->post('klinik_fisik'),
                'riwayat_gizi' => $this->input->post('riwayat_gizi'),
                'pola_makan' => $this->input->post('pola_makan'),
                'asupan_gizi' => $this->input->post('asupan_gizi'),
                'intervensi_gizi' => $this->input->post('intervensi_gizi'),
            );

            $where = array(
                'id_rencanapersalinan' => $this->input->post('id_rencanapersalinan')
            );

            if ($this->m_rencanapersalinan->update_rencanapersalinan($params_update, $where)) {
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
        redirect('dataibu/rencanapersalinan/edit/'.$this->input->post('id_rencanapersalinan'));
    }

    function delete($id_rencanapersalinan){
        $this->_set_page_rule("D");
        if ($this->m_rencanapersalinan->delete_rencanapersalinan($id_rencanapersalinan)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('dataibu/rencanapersalinan');
    }

}
