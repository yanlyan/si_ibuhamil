<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class penyebab extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load model
        $this->load->model('m_info');
        // load library
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "info/penyebab.html");
        // load js
        $this->smarty->load_javascript('summernote/summernote.js');
        // load css
        $this->smarty->load_style('summernote/summernote.css');

        $info_penyebab = $this->m_info->get_info_by_jenis('penyebab');
        $this->smarty->assign("info_penyebab", $info_penyebab);

        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function edit_process(){
        // set page rules
        $this->_set_page_rule("U");

        $info_penyebab = $this->input->post('info_penyebab');

        $params = array('info' => $info_penyebab);
        $where = array('jenis_info' => 'penyebab');

        if ($this->m_info->update_info($params, $update)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil disimpan");
        }else{
            $this->tnotification->sent_notification("error", "Data gagal disimpan");
        }
        redirect('info/penyebab');
    }

}
