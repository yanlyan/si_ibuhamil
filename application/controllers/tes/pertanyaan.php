<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class pertanyaan extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('tes/m_pertanyaan');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "tes/pertanyaan/list.html");
        // session
        $search = $this->tsession->userdata('search_konsultasi');
        $this->smarty->assign('search', $search);
        // parameter
        $nama_konsul = !empty($search['nama_konsul']) ? "%" . $search['nama_konsul'] . "%" : "%";
        $params_search = array($nama_konsul);

        // pagination
        $config['base_url'] = site_url("tes/pertanyaan/index/");
        $config['total_rows'] = $this->m_pertanyaan->get_total_konsultasi($params_search);

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
        $params = array($nama_konsul, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_pertanyaan->get_list_konsultasi($params));
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
                "nama_konsul" => $this->input->post('nama_konsul'),
            );
            // set
            $this->tsession->set_userdata('search_konsultasi', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_konsultasi');
        }
        //--
        redirect('tes/pertanyaan');
    }

    function add(){
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "tes/pertanyaan/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('id_konsul', 'Id konsultasi', 'trim|required');
        $this->tnotification->set_rules('nama_konsul', 'Nama Konsul', 'trim|required');
        $this->tnotification->set_rules('type', 'Type', 'trim');

        if ($this->tnotification->run() !== FALSE) {

            $params_insert = array(
                'id_konsul' => $this->input->post('id_konsul'),
                'nama_konsul' => $this->input->post('nama_konsul'),
                'type' => $this->input->post('type'),
            );

            if ($this->m_pertanyaan->insert_konsultasi($params_insert)) {
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
        redirect('tes/pertanyaan/add');
    }

    function edit($id_konsul){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "tes/pertanyaan/edit.html");
        // get data
        $result = $this->m_pertanyaan->get_konsultasi_by_id($id_konsul);
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
        $this->tnotification->set_rules('id_konsul', 'ID Konsul', 'trim|required');
        $this->tnotification->set_rules('nama_konsul', 'Nama Konsul', 'trim|required');
        $this->tnotification->set_rules('type', 'Type', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {

            $params_update = array(
                'nama_konsul' => $this->input->post('nama_konsul'),
                'type' => $this->input->post('type'),

            );

            $where = array(
                'id_konsul' => $this->input->post('id_konsul')
            );

            if ($this->m_pertanyaan->update_konsultasi($params_update, $where)) {
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
        redirect('tes/pertanyaan/edit/'.$this->input->post('id_konsul'));
    }

    function delete($id_konsul){
        $this->_set_page_rule("D");
        if ($this->m_pertanyaan->delete_konsultasi($id_konsul)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('tes/pertanyaan');
    }

}
