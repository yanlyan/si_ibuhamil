<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class kegiatan extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('tentang/m_kegiatan');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "tentang/kegiatan/list.html");
        // session
        $search = $this->tsession->userdata('search_kegiatan');
        $this->smarty->assign('search', $search);
        // parameter
        $nama_kegiatan = !empty($search['nama_kegiatan']) ? "%" . $search['nama_kegiatan'] . "%" : "%";
        $params_search = array($nama_kegiatan);

        // pagination
        $config['base_url'] = site_url("tentang/kegiatan/index/");
        $config['total_rows'] = $this->m_kegiatan->get_total_kegiatan($params_search);

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
        $params = array($nama_kegiatan, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_kegiatan->get_list_kegiatan($params));
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
                "nama_kegiatan" => $this->input->post('nama_kegiatan'),
            );
            // set
            $this->tsession->set_userdata('search_kegiatan', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_kegiatan');
        }
        //--
        redirect('tentang/kegiatan');
    }

    function add(){
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "tentang/kegiatan/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('nama_kegiatan', 'Nama Kegiatan', 'trim|required');
        $this->tnotification->set_rules('tempat', 'Tempat', 'trim|required');
        $this->tnotification->set_rules('tanggal', 'Tanggal', 'trim|required');


        if ($this->tnotification->run() !== FALSE) {

            $params_insert = array(
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'tempat' => $this->input->post('tempat'),
                'tanggal' => $this->input->post('tanggal'),
            );

            if ($this->m_kegiatan->insert_kegiatan($params_insert)) {
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
        redirect('tentang/kegiatan/add');
    }

    function edit($id_kegiatan){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "tentang/kegiatan/edit.html");
        // get data
        $result = $this->m_kegiatan->get_kegiatan_by_id($id_kegiatan);
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
        $this->tnotification->set_rules('id_kegiatan', 'ID kegiatan', 'trim|required');
        $this->tnotification->set_rules('nama_kegiatan', 'Nama kegiatan', 'trim|required');
        $this->tnotification->set_rules('tempat', 'Tempat', 'trim|required');
        $this->tnotification->set_rules('tanggal', 'Tanggal', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {

            $params_update = array(
                'id_kegiatan' => $this->input->post('id_kegiatan'),
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'tempat' => $this->input->post('tempat'),
                'tanggal' => $this->input->post('tanggal'),

            );

            $where = array(
                'id_kegiatan' => $this->input->post('id_kegiatan')
            );

            if ($this->m_kegiatan->update_kegiatan($params_update, $where)) {
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
        redirect('tentang/kegiatan/edit/'.$this->input->post('id_kegiatan'));
    }

    function delete($id_kegiatan){
        $this->_set_page_rule("D");
        if ($this->m_kegiatan->delete_kegiatan($id_kegiatan)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('tentang/kegiatan');
    }

}
