<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class pencegahan extends ApplicationBase{

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
        $this->smarty->assign("template_content", "info/pencegahan.html");
        // load js
        $this->smarty->load_javascript('summernote/summernote.js');
        // load css
        $this->smarty->load_style('summernote/summernote.css');

        $info_pencegahan = $this->m_info->get_info_by_jenis('pencegahan');
        $this->smarty->assign("info_pencegahan", $info_pencegahan);

        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function edit_process(){
        // set page rules
        $this->_set_page_rule("U");

        $info_pencegahan = $this->input->post('info_pencegahan');

        $params = array('info' => $info_pencegahan);
        $where = array('jenis_info' => 'pencegahan');

        if ($this->m_info->update_info($params, $update)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil disimpan");
        }else{
            $this->tnotification->sent_notification("error", "Data gagal disimpan");
        }
        redirect('info/pencegahan');
    }

}
