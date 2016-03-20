<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class visi extends ApplicationBase{

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
        $this->smarty->assign("template_content", "tentang/visi.html");
        // load js
        $this->smarty->load_javascript('summernote/summernote.js');
        // load css
        $this->smarty->load_style('summernote/summernote.css');

        $tentang_visi = $this->m_tentang->get_tentang_by_jenis('visi');
        $this->smarty->assign("tentang_visi", $tentang_visi);

        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    function edit_process(){
        // set page rules
        $this->_set_page_rule("U");

        $info_visi = $this->input->post('tentang_visi');

        $params = array('tentang' => $tentang_visi);
        $where = array('jenis_tentang' => 'visi');

        if ($this->m_tentang->update_tentang($params, $where)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil disimpan");
        }else{
            $this->tnotification->sent_notification("error", "Data gagal disimpan");
        }
        redirect('tentang/visi');
    }

}
