<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class solusi extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('tes/m_solusi');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "tes/solusi/list.html");
        // session
        $search = $this->tsession->userdata('search_tips');
        $this->smarty->assign('search', $search);
        // parameter
        $isi_pasien = !empty($search['isi_pasien']) ? "%" . $search['isi_pasien'] . "%" : "%";
        $params_search = array($isi_pasien);

        // pagination
        $config['base_url'] = site_url("tes/solusi/index/");
        $config['total_rows'] = $this->m_solusi->get_total_tips($params_search);

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
        $params = array($isi_pasien, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_solusi->get_list_tips($params));
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
                "isi_pasien" => $this->input->post('isi_pasien'),
            );
            // set
            $this->tsession->set_userdata('search_tips', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_tips');
        }
        //--
        redirect('tes/solusi');
    }

    function add(){
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "tes/solusi/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('isi_pakar', 'Isi Pakar', 'trim|required');
        $this->tnotification->set_rules('isi_pasien', 'Isi Pasien', 'trim|required');
        $this->tnotification->set_rules('kategori', 'Kategori', 'trim');


        if ($this->tnotification->run() !== FALSE) {

            $params_insert = array(
                'isi_pakar' => $this->input->post('isi_pakar'),
                'isi_pasien' => $this->input->post('isi_pasien'),
                'Kategori' => $this->input->post('kategori'),
            );

            if ($this->m_solusi->insert_tips($params_insert)) {
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
        redirect('tes/solusi/add');
    }

    function edit($id_tips){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "tes/solusi/edit.html");
        // get data
        $result = $this->m_solusi->get_tips_by_id($id_tips);
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
        $this->tnotification->set_rules('isi_pakar', 'Isi Pakar', 'trim');
        $this->tnotification->set_rules('isi_pasien', 'Isi Pasien', 'trim');
        $this->tnotification->set_rules('kategori', 'Kategori', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {

            $params_update = array(
                'isi_pakar' => $this->input->post('isi_pakar'),
                'isi_pasien' => $this->input->post('isi_pasien'),
                'kategori' => $this->input->post('kategori'),
            );

            $where = array(
                'id_tips' => $this->input->post('id_tips')
            );

            if ($this->m_solusi->update_tips($params_update, $where)) {
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
        redirect('tes/solusi/edit/'.$this->input->post('id_tips'));
    }

    function delete($id_tips){
        $this->_set_page_rule("D");
        if ($this->m_solusi->delete_tips($id_tips)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('tes/solusi');
    }

}
