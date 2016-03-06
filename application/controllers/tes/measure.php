<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class measure extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('tes/m_measure');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "tes/measure/list.html");
        // session
        $search = $this->tsession->userdata('search_diagnosa');
        $this->smarty->assign('search', $search);
        // parameter
        $hasil = !empty($search['hasil']) ? "%" . $search['hasil'] . "%" : "%";
        $params_search = array($hasil);

        // pagination
        $config['base_url'] = site_url("tes/measure/index/");
        $config['total_rows'] = $this->m_measure->get_total_diagnosa($params_search);

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
        $params = array($hasil, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_measure->get_list_diagnosa($params));
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
                "hasil" => $this->input->post('hasil'),
            );
            // set
            $this->tsession->set_userdata('search_diagnosa', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_diagnosa');
        }
        //--
        redirect('tes/measure');
    }

    function add(){
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "tes/measure/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('id_konsul', 'Id Konsul', 'trim|required');
        $this->tnotification->set_rules('hasil', 'Hasil', 'trim|required');
        $this->tnotification->set_rules('mb', 'Mb', 'trim|required');
        $this->tnotification->set_rules('md', 'Md', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {

            $params_insert = array(
                'id_konsul' => $this->input->post('id_konsul'),
                'hasil' => $this->input->post('hasil'),
                'mb' => $this->input->post('mb'),
                'md' => $this->input->post('md'),
            );

            if ($this->m_measure->insert_diagnosa($params_insert)) {
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
        redirect('tes/measure/add');
    }

    function edit($id){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "tes/measure/edit.html");
        // get data
        $result = $this->m_measure->get_diagnosa_by_id($id);
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

        $this->tnotification->set_rules('id', 'ID', 'trim|required');
        $this->tnotification->set_rules('id_konsul', 'Id_konsul', 'trim|required');
        $this->tnotification->set_rules('hasil', 'Hasil', 'trim|required');
        $this->tnotification->set_rules('mb', 'Mb', 'trim');
        $this->tnotification->set_rules('md', 'Md', 'trim');

        if ($this->tnotification->run() !== FALSE) {

            $params_update = array(
                'id_konsul' => $this->input->post('id_konsul'),
                'hasil' => $this->input->post('hasil'),
                'mb' => $this->input->post('mb'),
                'md' => $this->input->post('md'),
            );

            $where = array(
                'id' => $this->input->post('id')
            );

            if ($this->m_measure->update_diagnosa($params_update, $where)) {
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
        redirect('tes/measure/edit/'.$this->input->post('id'));
    }

    function delete($id){
        $this->_set_page_rule("D");
        if ($this->m_measure->delete_diagnosa($id)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('tes/measure');
    }

}
