<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class Riwayatkehamilan extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('dataibu/m_riwayatkehamilan');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "dataibu/riwayatkehamilan/list.html");
        // session
        $search = $this->tsession->userdata('search_riwayatkehamilan');
        $this->smarty->assign('search', $search);
        // parameter
        $pasien_nm = !empty($search['pasien_nm']) ? "%" . $search['pasien_nm'] . "%" : "%";
        $params_search = array($pasien_nm);

        // pagination
        $config['base_url'] = site_url("dataibu/riwayatkehamilan/index/");
        $config['total_rows'] = $this->m_riwayatkehamilan->get_total_riwayatkehamilan($params_search);

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
        $this->smarty->assign("rs_id", $this->m_riwayatkehamilan->get_list_riwayatkehamilan($params));
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
            $this->tsession->set_userdata('search_riwayatkehamilan', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_riwayatkehamilan');
        }
        //--
        redirect('dataibu/riwayatkehamilan');
    }

    function view($id_riwayatkehamilan){
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
        $this->smarty->assign("template_content", "dataibu/riwayatkehamilan/view.html");
        // params
        $params = array("%", 0, 10000000000000);
        // get data pasien
        $this->smarty->assign("rs_pasien", $this->m_pasien->get_list_pasien($params));
        // get data
        $result = $this->m_riwayatkehamilan->get_riwayatkehamilan_by_id($id_riwayatkehamilan);
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
        $this->smarty->assign("template_content", "dataibu/riwayatkehamilan/add.html");

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
        $this->tnotification->set_rules('hamil_ke', 'Hamil Ke', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {
            $session = $this->tsession->userdata('session_operator');
            $params_insert = array(
                'id_pasien' => $this->input->post('pasien'),
                'id_user' => $session['user_id'],
                'hamil_ke' => $this->input->post('hamil_ke'),
                'haid' => $this->input->post('haid'),
                'bb_sebelum' => $this->input->post('bb_sebelum'),
                'mual_muntah' => $this->input->post('mual_muntah'),
                'pusing' => $this->input->post('pusing'),
                'nyeri_perut' => $this->input->post('nyeri_perut'),
                'gerak_janin' => $this->input->post('gerak_janin'),
                'nafsu_makan' => $this->input->post('nafsu_makan'),
                'pendarahan' => $this->input->post('pendarahan'),
                'penyakit_diderita' => $this->input->post('penyakit_diderita'),
                'kebiasaan' => $this->input->post('kebiasaan'),
                'status_tt' => $this->input->post('status_tt'),
                'hiv' => $this->input->post('hiv'),
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'lila' => $this->input->post('lila'),
                'bentuk_tubuh' => $this->input->post('bentuk_tubuh'),
                'kesadaran' => $this->input->post('kesadaran'),
                'muka' => $this->input->post('muka'),
                'kulit' => $this->input->post('kulit'),
                'mata' => $this->input->post('mata'),
                'mulut' => $this->input->post('mulut'),
                'gigi' => $this->input->post('gigi'),
                'pembesaran_kelenjar' => $this->input->post('pembesaran_kelenjar'),
                'dada' => $this->input->post('dada'),
                'paru_nafas' => $this->input->post('paru_nafas'),
                'jantung' => $this->input->post('jantung'),
                'payudara' => $this->input->post('payudara'),
                'tangan_tungkai' => $this->input->post('tangan_tungkai'),
                'reflek' => $this->input->post('reflek')
            );

            if ($this->m_riwayatkehamilan->insert_riwayatkehamilan($params_insert)) {
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
        redirect('dataibu/riwayatkehamilan/add');
    }

    function edit($id_riwayatkehamilan){
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
        $this->smarty->assign("template_content", "dataibu/riwayatkehamilan/edit.html");
        // params
        $params = array("%", 0, 10000000000000);
        // get data pasien
        $this->smarty->assign("rs_pasien", $this->m_pasien->get_list_pasien($params));
        // get data
        $result = $this->m_riwayatkehamilan->get_riwayatkehamilan_by_id($id_riwayatkehamilan);
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
        $this->tnotification->set_rules('hamil_ke', 'Hamil Ke', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {
            $params_update = array(
                'id_pasien' => $this->input->post('pasien'),
                'id_user' => $session['user_id'],
                'hamil_ke' => $this->input->post('hamil_ke'),
                'haid' => $this->input->post('haid'),
                'bb_sebelum' => $this->input->post('bb_sebelum'),
                'mual_muntah' => $this->input->post('mual_muntah'),
                'pusing' => $this->input->post('pusing'),
                'nyeri_perut' => $this->input->post('nyeri_perut'),
                'gerak_janin' => $this->input->post('gerak_janin'),
                'nafsu_makan' => $this->input->post('nafsu_makan'),
                'pendarahan' => $this->input->post('pendarahan'),
                'penyakit_diderita' => $this->input->post('penyakit_diderita'),
                'kebiasaan' => $this->input->post('kebiasaan'),
                'status_tt' => $this->input->post('status_tt'),
                'hiv' => $this->input->post('hiv'),
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'lila' => $this->input->post('lila'),
                'bentuk_tubuh' => $this->input->post('bentuk_tubuh'),
                'kesadaran' => $this->input->post('kesadaran'),
                'muka' => $this->input->post('muka'),
                'kulit' => $this->input->post('kulit'),
                'mata' => $this->input->post('mata'),
                'mulut' => $this->input->post('mulut'),
                'gigi' => $this->input->post('gigi'),
                'pembesaran_kelenjar' => $this->input->post('pembesaran_kelenjar'),
                'dada' => $this->input->post('dada'),
                'paru_nafas' => $this->input->post('paru_nafas'),
                'jantung' => $this->input->post('jantung'),
                'payudara' => $this->input->post('payudara'),
                'tangan_tungkai' => $this->input->post('tangan_tungkai'),
                'reflek' => $this->input->post('reflek')
            );

            $where = array(
                'id_riwayatkehamilan' => $this->input->post('id_riwayatkehamilan')
            );

            if ($this->m_riwayatkehamilan->update_riwayatkehamilan($params_update, $where)) {
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
        redirect('dataibu/riwayatkehamilan/edit/'.$this->input->post('id_riwayatkehamilan'));
    }

    function delete($id_riwayatkehamilan){
        $this->_set_page_rule("D");
        if ($this->m_riwayatkehamilan->delete_riwayatkehamilan($id_riwayatkehamilan)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('dataibu/riwayatkehamilan');
    }

}
