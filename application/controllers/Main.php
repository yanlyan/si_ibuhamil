<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    var $data;

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->model('main_model');
        $this->data['content'] = "home/home";
        $this->data['home'] = $this->main_model->getHome();
        $this->load->view('main', $this->data);
    }

    function info_penyakit($page = '') {
        $this->load->model('main_model');
        $this->data['data'] = $this->main_model->getInfoPenyakit();
        if ($page == null OR $page == '') {
            $this->data['content'] = "info_penyakit/info_penyakit";
            $this->load->view('main', $this->data);
        } elseif ($page == 'anemia_pada_ibu_hamil') {
            $this->load->model('informasi_penyakit');
            $this->load->view($this->informasi_penyakit->anemia_pada_ibu_hamil(), $this->data);
        } elseif ($page == 'resiko_anemia') {
            $this->load->model('informasi_penyakit');
            $konten = $this->input->post('konten');
            $this->load->view($this->informasi_penyakit->resiko_anemia($konten), $this->data);
        } elseif ($page == 'faktor_anemia') {
            $this->load->model('informasi_penyakit');
            $konten = $this->input->post('konten');
            $this->load->view($this->informasi_penyakit->faktor_anemia($konten), $this->data);
        } elseif ($page == 'penyebab_anemia') {
            $this->load->model('informasi_penyakit');
            $this->load->view($this->informasi_penyakit->penyebab_anemia(), $this->data);
        } elseif ($page == 'pencegahan_penanganan') {
            $this->load->model('informasi_penyakit');
            $this->load->view($this->informasi_penyakit->pencegahan_penanganan(), $this->data);
        } elseif ($page == 'penanganan_anemia') {
            $this->load->model('informasi_penyakit');
            $this->load->view($this->informasi_penyakit->penanganan_anemia(), $this->data);
        } elseif ($page == 'gejala_anemia') {
            $this->load->model('informasi_penyakit');
            $this->load->view($this->informasi_penyakit->gejala_anemia(), $this->data);
        } else {
            redirect('main');
        }
    }

    function profile($page = '') {
        if ($page == null OR $page == '') {
            $this->load->model('profile_model');
            $this->data['image'] = $this->profile_model->organisasi();
            $this->data['content'] = "profile/profile";
            $this->load->view('main', $this->data);
        } elseif ($page == 'visi_misi') {
            $this->load->model('profile_model');
            $this->data['content'] = $this->profile_model->visi_misi();
            $this->load->view('main', $this->data);
        } elseif ($page == 'strategi_kebijakan') {
            $this->load->model('profile_model');
            $this->data['content'] = $this->profile_model->strategi_kebijakan();
            $this->load->view('main', $this->data);
        } else {
            redirect('main');
        }
    }

    function kebutuhan_gizi($page = '') {
        $this->load->model('main_model');
        $this->data['data'] = $this->main_model->getKebutuhanGizi();

        if ($page == null OR $page == '') {
            $this->data['content'] = "kebutuhan_gizi/kebutuhan_gizi";
            $this->load->view('main', $this->data);
        } elseif ($page == 'info') {
            $this->load->view("kebutuhan_gizi/" . $page, $this->data);
        } else {
            $konten = $this->input->post("konten");
            $this->load->view("kebutuhan_gizi/" . $konten, $this->data);
        }
    }

    function konsultasi() {
        if (!$this->session->userdata('logedin')) {
            redirect('');
        }

        $this->load->model('konsultasi_model');
        $this->data['konsul'] = $this->konsultasi_model->getAllKonsul();
        $this->data['content'] = "konsultasi/konsultasi";
        $this->load->view('main', $this->data);
    }

    function count_konsul() {
        $x = $this->input->post('data');
        $y = $this->input->post('y');
        $m = $this->input->post('m');
        $dy = $this->input->post('d');
        $mb = 0;
        $md = 0;
        $cf = 0;
        foreach ($x as $v) {
            $d = explode(',', $v['value']);
            if ($mb == 0) {
                $mb = $d[0];
                $md = $d[1];
                continue;
            }
            $mb = $mb + $d[0] * (1 - $mb);
            $md = $md + $d[1] * (1 - $md);
        }
        $cf = $mb - $md;
        $input = array(
            'id_user' => $this->session->userdata('id_user'),
            'hasil' => $cf,
            'y' => $y,
            'm' => $m,
            'd' => $dy
        );        
        $this->load->model('main_model');
        $this->main_model->insert_hasil_konsul($input);

        if($cf <= 0.3){
            $tips = $this->main_model->get_konsul_tips('ringan');
        }
        else if($cf > 0.3 && $cf < 0.5){
            $tips = $this->main_model->get_konsul_tips('sedang');
        }
        else if($cf >= 0.5){
           $tips = $this->main_model->get_konsul_tips('berat');
        }

        echo json_encode(array('nilai' => $cf, 'tips' => $tips['isi_pasien']));
    }

    function login() {
        $this->load->model('main_model');
        $user = $this->input->post('usr');
        $pass = $this->input->post('pwd');
        $data = array('username' => $user,'password' => ($pass));
        $ud = $this->main_model->login($data);

        if ($ud > 0) {
            $session_data['user'] = $this->main_model->setSessionUserLogin($data);
            $ses_data = array('logedin' => TRUE, 'username' => $session_data['user'][0]['username'],
                'id_user' => $session_data['user'][0]['id_user'], 'is_admin' => $session_data['user'][0]['level']);
            $this->session->set_userdata($ses_data);
            $out = array('stat' => 1);
        } else {
            $out = array('stat' => 0);
        }
        
        echo json_encode($out);
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('');
    }
    
    function register(){
        $input = array(
            'username' => $this->input->post('pasien_id'),
            'password' => ($this->input->post('pasien_pwd')),
            'nama' => $this->input->post('pasien_nama'),
            'level' => $this->input->post('pasien_lvl'),
            'tgl_lahir' => $this->input->post('pasien_tgl'),
            'alamat' => $this->input->post('pasien_almt')
        );
        
        $this->load->model('main_model');
        if($this->main_model->register_user($input)){
            $stat = 1;
        }
        else{
            $stat = 0;
        }
        
        echo json_encode(array('stat' => $stat));
    }
    
    function user_list(){
        $this->load->model('main_model');
        $data['user_list'] = $this->main_model->getAllUser();
        $this->load->view('home/admin/user_list', $data);
    }
    
    function user_stat(){
        $id = $this->input->post('id');
        $this->load->model('main_model');
        $data = $this->main_model->get_user_stat($id);        
        echo json_encode($data);
    }
    
    function delete_user(){
        $id = $this->input->post('id');
        $this->load->model('main_model');
        if($this->main_model->delete_user($id)){
            $stat = 1;
        }  
        else{
            $stat = 0;
        }
        echo json_encode(array("stat"=>$stat));
    }

    function upload_structur(){
        
    }

    function edit_pasien(){
        $this->load->model('main_model');
        if($this->input->post('is_edit') == 1){
            $input = array(
                'username' => $this->input->post('pasien_id_edit'),
                'password' => ($this->input->post('pasien_pwd_edit')),
                'nama' => $this->input->post('pasien_nama_edit'),
                'level' => $this->input->post('pasien_lvl_edit'),
                'tgl_lahir' => $this->input->post('pasien_tgl_edit'),
                'alamat' => $this->input->post('pasien_almt_edit')
            );

            if($this->main_model->updateUser($this->input->post('pasien_primary'), $input)){
                $stat = 1;
            }else{
                $stat = 0;
            }

            echo json_encode(array('stat'=>$stat));
        }
        else{
            $data['id'] = $this->input->post('id');
            $data['pasien'] = ($this->main_model->getUserById($data['id']));
            $this->load->view('home/admin/form_edit', $data);
        }
    }

    function update_structur(){
        $this->load->helper(array('html','url','directory'));
        if(isset($_FILES['struktur_img']))        {
            
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'gif|jpg|png|bmp';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            if($this->upload->do_upload('struktur_img'))
            {
                $image_data = $this->upload->data();
                $this->db->where('id_setting', 1);
                $this->db->update('setting', array('img_org'=> $image_data['file_name']));
                
                redirect('main/profile');

                // echo img(array(
                //     'src'=>base_url("assets/img/$image_data[file_name]"),
                //     'width'=>600,
                //     'style'=>'margin-top:10px; padding:10px; background:#bbb'
                // )); 
            }
        } 
        else{
            $this->load->view('home/admin/cp_upload_struktur');
        } 
    }

    function cp_admin($view){
        if($this->input->post('konten')){
            $this->load->model('main_model');
            $model = $this->input->post('konten');
            $this->data['data'] = $this->main_model->$model();
            $this->load->view('home/admin/'.$view, $this->data);
        }
        else{                
            $this->load->view('home/admin/'.$view, $this->data);
        }
    }

    function update_home(){
        $this->load->model('main_model');
        $input = array(
                'welcome_text' => $this->input->post('welcome_text'),
                'anemia' => $this->input->post('anemia_text')
            );

        $this->main_model->update_home($input);
        redirect('');
    }

    function update_info_penyakit(){
        $this->load->model('main_model');
        $this->main_model->update_info_penyakit($_POST);
        redirect('');
    }

    function update_kebutuhan_gizi(){
        $this->load->model('main_model');
        $this->main_model->update_kebutuhan_gizi($_POST);
        redirect('');
    }

    function cp_view($v){
        $this->load->view('home/admin/'.$v);
    }

}
