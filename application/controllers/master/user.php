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
        $search = $this->tsession->userdata('search_com_user');
        $this->smarty->assign('search', $search);
        // parameter
        $user_name = !empty($search['user_name']) ? "%" . $search['user_name'] . "%" : "%";
        $params_search = array($user_name);

        // pagination
        $config['base_url'] = site_url("master/user/index/");
        $config['total_rows'] = $this->m_user->get_total_com_user($params_search);

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
        $params = array($user_name, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_user->get_list_com_user($params));
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
                "user_name" => $this->input->post('user_name'),
            );
            // set
            $this->tsession->set_userdata('search_com_user', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_com_user');
        }
        //--
        redirect('master/user');
    }

    function add(){
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "master/user/add.html");
        // load js
        $this->smarty->load_javascript('datetimepicker/moment.js');
        $this->smarty->load_javascript('datetimepicker/bootstrap-datetimepicker.js');
        // load css
        $this->smarty->load_style('datetimepicker/bootstrap-datetimepicker.css');
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('user_name', 'Nama user', 'trim|required');
        $this->tnotification->set_rules('user_pass', 'Sandi user', 'trim|required');
        $this->tnotification->set_rules('user_mail', 'Email user', 'trim|required');
        $this->tnotification->set_rules('user_st', 'status user', 'trim|required');


        if ($this->tnotification->run() !== FALSE) {

            $params_insert = array(
                'user_name' => $this->input->post('user_name'),
                'user_pass' => $this->input->post('user_pass'),
                'user_mail' => $this->input->post('user_mail'),
                'user_st' => $this->input->post('user_st'),

            );

            if ($this->m_user->insert_com_user($params_insert)) {
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

    function edit($user_id){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "master/user/edit.html");
        // load js
        $this->smarty->load_javascript('datetimepicker/moment.js');
        $this->smarty->load_javascript('datetimepicker/bootstrap-datetimepicker.js');
        // load css
        $this->smarty->load_style('datetimepicker/bootstrap-datetimepicker.css');
        // get data
        $result = $this->m_user->get_com_user_by_user($user_id);
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
        $this->tnotification->set_rules('user_name', 'Nama user', 'trim|required');
        $this->tnotification->set_rules('user_pass', 'Sandi user', 'trim|required');
        $this->tnotification->set_rules('user_mail', 'Email user', 'trim|required');
        $this->tnotification->set_rules('user_st', 'status user', 'trim|required');


        if ($this->tnotification->run() !== FALSE) {

            $params_update = array(
                'user_name' => $this->input->post('user_name'),
                'user_pass' => $this->input->post('user_pass'),
                'user_mail' => $this->input->post('user_mail'),
                'user_st' => $this->input->post('user_st'),
            );

            $where = array(
                'user_id' => $this->input->post('user_id')
            );

            if ($this->m_user->update_com_user($params_update, $where)) {
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
        redirect('master/user/edit/'.$this->input->post('user_id'));
    }

    function delete($user_id){
        $this->_set_page_rule("D");
        if ($this->m_user->delete_com_user($user_id)) {
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
