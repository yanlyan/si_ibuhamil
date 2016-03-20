<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class karyawan extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('tentang/m_karyawan');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "tentang/karyawan/list.html");
        // session
        $search = $this->tsession->userdata('search_karyawan');
        $this->smarty->assign('search', $search);
        // parameter
        $nama_karyawan = !empty($search['nama_karyawan']) ? "%" . $search['nama_karyawan'] . "%" : "%";
        $params_search = array($nama_karyawan);

        // pagination
        $config['base_url'] = site_url("tentang/karyawan/index/");
        $config['total_rows'] = $this->m_karyawan->get_total_karyawan($params_search);

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
        $params = array($nama_karyawan, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_karyawan->get_list_karyawan($params));
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
                "nama_karyawan" => $this->input->post('nama_karyawan'),
            );
            // set
            $this->tsession->set_userdata('search_karyawan', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_karyawan');
        }
        //--
        redirect('tentang/karyawan');
    }

    function add(){
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "tentang/karyawan/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('nik', 'Nik', 'trim|required');
        $this->tnotification->set_rules('nama_karyawan', 'Nama karyawan', 'trim|required');
        $this->tnotification->set_rules('alamat', 'alamat', 'trim|required');
        $this->tnotification->set_rules('no_tlp', 'No tlp', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {

            $params_insert = array(
                'nik' => $this->input->post('nik'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'alamat' => $this->input->post('alamat'),
                'no_tlp' => $this->input->post('no_tlp'),
            );

            if ($this->m_karyawan->insert_karyawan($params_insert)) {
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
        redirect('tentang/karyawan/add');
    }

    function edit($id_karyawan){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "tentang/karyawan/edit.html");
        // get data
        $result = $this->m_karyawan->get_karyawan_by_id($id_karyawan);
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
        $this->tnotification->set_rules('id_karyawan', 'ID karyawan', 'trim|required');
        $this->tnotification->set_rules('nik', 'Nik', 'trim|required');
        $this->tnotification->set_rules('nama_karyawan', 'Nama karyawan', 'trim|required');
        $this->tnotification->set_rules('no_tlp', 'No_tlp', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {

            $params_update = array(
                'nik' => $this->input->post('nik'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'alamat' => $this->input->post('alamat'),
                'no_tlp' => $this->input->post('no_tlp'),

            );

            $where = array(
                'id_karyawan' => $this->input->post('id_karyawan')
            );

            if ($this->m_karyawan->update_karyawan($params_update, $where)) {
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
        redirect('tentang/karyawan/edit/'.$this->input->post('id_karyawan'));
    }

    function delete($id_karyawan){
        $this->_set_page_rule("D");
        if ($this->m_karyawan->delete_karyawan($id_karyawan)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('tentang/karyawan');
    }

}
