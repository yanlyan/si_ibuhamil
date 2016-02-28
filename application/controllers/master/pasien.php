<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class pasien extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('master/m_pasien');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "master/pasien/list.html");
        // session
        $search = $this->tsession->userdata('search_pasien');
        $this->smarty->assign('search', $search);
        // parameter
        $pasien_nm = !empty($search['pasien_nm']) ? "%" . $search['pasien_nm'] . "%" : "%";
        $params_search = array($pasien_nm);

        // pagination
        $config['base_url'] = site_url("master/pasien/index/");
        $config['total_rows'] = $this->m_pasien->get_total_pasien($params_search);

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
        $params = array($pasien_nm, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_pasien->get_list_pasien($params));
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
                "pasien_nm" => $this->input->post('pasien_nm'),
            );
            // set
            $this->tsession->set_userdata('search_pasien', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_pasien');
        }
        //--
        redirect('master/pasien');
    }

    function add(){
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "master/pasien/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('pasien_nm', 'Nama Pasien', 'trim|required');
        $this->tnotification->set_rules('no_identitas', 'No. Identitas', 'trim|required');
        $this->tnotification->set_rules('pasien_alamat', 'Alamat', 'trim');
        $this->tnotification->set_rules('pasien_pekerjaan', 'Pekerjaan', 'trim');
        $this->tnotification->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim');

        if ($this->tnotification->run() !== FALSE) {

            $params_insert = array(
                'pasien_nm' => $this->input->post('pasien_nm'),
                'no_identitas' => $this->input->post('no_identitas'),
                'pasien_alamat' => $this->input->post('pasien_alamat'),
                'pasien_pekerjaan' => $this->input->post('pasien_pekerjaan'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            );

            if ($this->m_pasien->insert_pasien($params_insert)) {
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
        redirect('master/pasien/add');
    }

    function edit($id_pasien){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "master/pasien/edit.html");
        // get data
        $result = $this->m_pasien->get_pasien_by_id($id_pasien);
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
        $this->tnotification->set_rules('id_pasien', 'ID pasien', 'trim|required');
        $this->tnotification->set_rules('pasien_nm', 'Nama Pasien', 'trim|required');
        $this->tnotification->set_rules('no_identitas', 'No. Identitas', 'trim|required');
        $this->tnotification->set_rules('pasien_alamat', 'Alamat', 'trim');
        $this->tnotification->set_rules('pasien_pekerjaan', 'Pekerjaan', 'trim');
        $this->tnotification->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim');

        if ($this->tnotification->run() !== FALSE) {

            $params_update = array(
                'pasien_nm' => $this->input->post('pasien_nm'),
                'no_identitas' => $this->input->post('no_identitas'),
                'pasien_alamat' => $this->input->post('pasien_alamat'),
                'pasien_pekerjaan' => $this->input->post('pasien_pekerjaan'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            );

            $where = array(
                'id_pasien' => $this->input->post('id_pasien')
            );

            if ($this->m_pasien->update_pasien($params_update, $where)) {
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
        redirect('master/pasien/edit/'.$this->input->post('id_pasien'));
    }

    function delete($id_pasien){
        $this->_set_page_rule("D");
        if ($this->m_pasien->delete_pasien($id_pasien)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('master/pasien');
    }

}
