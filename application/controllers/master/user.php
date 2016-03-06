<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class user extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('master/m_user');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "master/user/list.html");
        // session
        $search = $this->tsession->userdata('search_user');
        $this->smarty->assign('search', $search);
        // parameter
        $user_nm = !empty($search['user_nm']) ? "%" . $search['user_nm'] . "%" : "%";
        $params_search = array($user_nm);

        // pagination
        $config['base_url'] = site_url("master/user/index/");
        $config['total_rows'] = $this->m_user->get_total_user($params_search);

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
        $params = array($user_nm, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_user->get_list_user($params));
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
                "user_nm" => $this->input->post('user_nm'),
            );
            // set
            $this->tsession->set_userdata('search_user', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_user');
        }
        //--
        redirect('master/user');
    }

    function add(){
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "master/user/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('user_nm', 'Nama user', 'trim|required');
        $this->tnotification->set_rules('no_identitas', 'No. Identitas', 'trim|required');
        $this->tnotification->set_rules('user_alamat', 'Alamat', 'trim');
        $this->tnotification->set_rules('user_pekerjaan', 'Pekerjaan', 'trim');
        $this->tnotification->set_rules('no_telepon', 'No Telepon', 'trim');
        $this->tnotification->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim');

        if ($this->tnotification->run() !== FALSE) {

            $params_insert = array(
                'user_nm' => $this->input->post('user_nm'),
                'no_identitas' => $this->input->post('no_identitas'),
                'user_alamat' => $this->input->post('user_alamat'),
                'user_pekerjaan' => $this->input->post('user_pekerjaan'),
                'no_telepon' => $this->input->post('no_telepon'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            );

            if ($this->m_user->insert_user($params_insert)) {
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
        redirect('master/user/add');
    }

    function edit($id_user){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "master/user/edit.html");
        // get data
        $result = $this->m_user->get_user_by_id($id_user);
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
        $this->tnotification->set_rules('id_user', 'ID pasien', 'trim|required');
        $this->tnotification->set_rules('user_nm', 'Nama Pasien', 'trim|required');
        $this->tnotification->set_rules('no_identitas', 'No. Identitas', 'trim|required');
        $this->tnotification->set_rules('user_alamat', 'Alamat', 'trim');
        $this->tnotification->set_rules('user_pekerjaan', 'Pekerjaan', 'trim');
        $this->tnotification->set_rules('no_telepon', 'No Telepon', 'trim');
        $this->tnotification->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim');

        if ($this->tnotification->run() !== FALSE) {

            $params_update = array(
                'user_nm' => $this->input->post('user_nm'),
                'no_identitas' => $this->input->post('no_identitas'),
                'user_alamat' => $this->input->post('alamat'),
                'user_pekerjaan' => $this->input->post('pekerjaan'),
                'no_telepon' => $this->input->post('no_telepon'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            );

            $where = array(
                'id_user' => $this->input->post('id_user')
            );

            if ($this->m_user->update_user($params_update, $where)) {
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
        redirect('master/user/edit/'.$this->input->post('id_user'));
    }

    function delete($id_user){
        $this->_set_page_rule("D");
        if ($this->m_user->delete_user($id_user)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('master/user');
    }

}
