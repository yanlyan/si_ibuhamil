<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class strategi extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load model
        $this->load->model('m_tentang');
        // load library
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "tentang/strategi.html");
        // load js
        $this->smarty->load_javascript('summernote/summernote.js');
        // load css
        $this->smarty->load_style('summernote/summernote.css');

        $tentang_strategi = $this->m_tentang->get_tentang_by_jenis('strategi');
        $this->smarty->assign("tentang_strategi", $tentang_strategi);

        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function edit_process(){
        // set page rules
        $this->_set_page_rule("U");

        $tentang_strategi = $this->input->post('tentang_strategi');

        $params = array('tentang' => $tentang_strategi);
        $where = array('jenis_tentang' => 'strategi');

        if ($this->m_tentang->update_tentang($params, $where)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil disimpan");
        }else{
            $this->tnotification->sent_notification("error", "Data gagal disimpan");
        }
        redirect('tentang/strategi');
    }

}
