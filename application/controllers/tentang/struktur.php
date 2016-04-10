
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// load base class if needed
require_once( APPPATH . 'controllers/base/OperatorBase.php' );

class struktur extends ApplicationBase{

    public function __construct(){
        parent::__construct();
        // load models
        $this->load->model('tentang/m_struktur');

        $this->load->library('pagination');
        $this->load->library('tnotification');
    }

    function index(){
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "tentang/struktur/list.html");
        // session
        $search = $this->tsession->userdata('search_struktur');
        $this->smarty->assign('search', $search);
        // parameter
        $nama_jabatan = !empty($search['nama_jabatan']) ? "%" . $search['nama_jabatan'] . "%" : "%";
        $params_search = array($nama_jabatan);

        // pagination
        $config['base_url'] = site_url("tentang/struktur/index/");
        $config['total_rows'] = $this->m_struktur->get_total_struktur($params_search);

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
        $params = array($nama_jabatan, ($start - 1), $config['per_page']);
        // get data
        $this->smarty->assign("rs_id", $this->m_struktur->get_list_struktur($params));
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
                "nama_jabatan" => $this->input->post('nama_jabatan'),
            );
            // set
            $this->tsession->set_userdata('search_struktur', $params);
        } else {
            // unset
            $this->tsession->unset_userdata('search_struktur');
        }
        //--
        redirect('tentang/struktur');
    }

    function add(){
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "tentang/struktur/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // display
        parent::display();
    }

    function add_process(){
        // set page rules
        $this->_set_page_rule("C");
        $this->tnotification->set_rules('nama_jabatan', 'nama jabatan', 'trim|required');
        $this->tnotification->set_rules('nama_karyawan', 'nama karyawan', 'trim|required');
        $this->tnotification->set_rules('penanggung_jawab', 'penanggung_jawab', 'trim|required');


        if ($this->tnotification->run() !== FALSE) {

            $params_insert = array(
                'nama_jabatan' => $this->input->post('nama_jabatan'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'penanggung_jawab' => $this->input->post('penanggung_jawab'),
            );

            if ($this->m_struktur->insert_struktur($params_insert)) {
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
        redirect('tentang/struktur/add');
    }

    function edit($nama_jabatan){
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "tentang/struktur/edit.html");
        // get data
        $result = $this->m_struktur->get_struktur_by_nama($nama_jabatan);
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

        $this->tnotification->set_rules('nama_jabatan', 'Nama jabatan', 'trim|required');
        $this->tnotification->set_rules('nama_karyawan', 'Nama Karyawan', 'trim|required');
        $this->tnotification->set_rules('penanggung_jawab', 'Penanggung Jawab', 'trim|required');

        if ($this->tnotification->run() !== FALSE) {

            $params_update = array(
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'penanggung_jawab' => $this->input->post('penanggung_jawab'),

            );

            $where = array(
                'nama_jabatan' => $this->input->post('nama_jabatan')
            );

            if ($this->m_struktur->update_struktur($params_update, $where)) {
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
        redirect('tentang/struktur/edit/'.$this->input->post('nama_jabatan'));
    }

    function delete($nama_jabatan){
        $this->_set_page_rule("D");
        if ($this->m_struktur->delete_struktur($nama_jabatan)) {
            // notification
            $this->tnotification->delete_last_field();
            $this->tnotification->sent_notification("success", "Data berhasil dihapus");
        }else{
            // default error
            $this->tnotification->sent_notification("error", "Data gagal dihapus");
        }
        redirect('tentang/struktur');
    }

}
