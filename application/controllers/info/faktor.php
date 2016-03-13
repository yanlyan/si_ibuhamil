<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class faktor extends ApplicationBase{

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
        $this->smarty->assign("template_content", "info/faktor.html");
        // load js
        $this->smarty->load_javascript('summernote/summernote.js');
        // load css
        $this->smarty->load_style('summernote/summernote.css');

        $info_faktor = $this->m_info->get_info_by_jenis('faktor');
        $this->smarty->assign("info_faktor", $info_faktor);

        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function edit_process(){
        // set page rules
        $this->_set_page_rule("U");

        $info_faktor = $this->input->post('info_faktor');

        $params = array('info' => $info_faktor);
        $where = array('jenis_info' => 'faktor');

        if ($this->m_info->update_info($params, $where)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil disimpan");
        }else{
            $this->tnotification->sent_notification("error", "Data gagal disimpan");
        }
        redirect('info/faktor');
    }

}
