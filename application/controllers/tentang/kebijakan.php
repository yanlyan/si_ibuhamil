<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class kebijakan extends ApplicationBase{

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
        $this->smarty->assign("template_content", "tentang/kebijakan.html");
        // load js
        $this->smarty->load_javascript('summernote/summernote.js');
        // load css
        $this->smarty->load_style('summernote/summernote.css');

        $tentang_kebijakan = $this->m_tentang->get_tentang_by_jenis('kebijakan');
        $this->smarty->assign("tentang_kebijakan", $tentang_kebijakan);

        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function edit_process(){
        // set page rules
        $this->_set_page_rule("U");

        $tentang_kebijakan = $this->input->post('tentang_kebijakan');

        $params = array('tentang' => $tentang_kebijakan);
        $where = array('jenis_tentang' => 'kebijakan');

        if ($this->m_tentang->update_tentang($params, $where)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil disimpan");
        }else{
            $this->tnotification->sent_notification("error", "Data gagal disimpan");
        }
        redirect('tentang/kebijakan');
    }

}
