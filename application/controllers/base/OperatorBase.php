<?php

class ApplicationBase extends CI_Controller {

    // init base variable
    protected $portal_id;
    protected $com_portal;
    protected $com_user;
    protected $nav_id = 0;
    protected $parent_id = 0;
    protected $parent_selected = 0;

    public function __construct() {
        // load basic controller
        parent::__construct();
        // load app data
        $this->base_load_app();
        // view app data
        $this->base_view_app();
    }

    /*
    * Method pengolah base load
    * diperbolehkan untuk dioverride pada class anaknya
    */

    protected function base_load_app() {
        // load themes (themes default : default)
        $this->smarty->load_themes('adminlte', 'app.js');
        // load model
        $this->load->model('pengaturan/m_preference');
        // load library
        $this->load->library("datetimemanipulation");
        $this->smarty->assign("dtm", $this->datetimemanipulation);
        // load css
        $this->smarty->load_style("bootstrap/css/bootstrap.min.css");
        $this->smarty->load_style("font-awesome/css/font-awesome.min.css");
        $this->smarty->load_style("ionicons/css/ionicons.css");
        $this->smarty->load_style("metismenu/css/metisMenu.min.css");
        // load javascript
        $this->smarty->load_javascript("jquery/jquery-1.12.0.min.js");
        $this->smarty->load_javascript("jquery-ui/js/jquery-ui.min.js");
        $this->smarty->load_javascript("bootstrap/js/bootstrap.min.js");
        $this->smarty->load_javascript("metismenu/js/metisMenu.min.js");
    }

    /*
    * Method pengolah base view
    * diperbolehkan untuk dioverride pada class anaknya
    */

    protected function base_view_app() {
        // default config
        $this->smarty->assign("config", $this->config);

        // get user login
        $session = $this->tsession->userdata('session_operator');
        if (!empty($session)) {
            $this->com_user = $this->m_account->get_user_profil(array($session['user_id'], $session['role_id']));
            // images
            // $filepath = 'resource/doc/images/users/' . $this->com_user['operator_photo'];
            // if (!is_file($filepath)) {
            //     $filepath = 'resource/doc/images/users/default.png';
            // }
            // $this->com_user['operator_photo'] = base_url() . $filepath;

            $roles = $this->m_account->get_user_authorities($this->com_user['user_id']);

            $this->com_user['roles'] = $roles;
            $this->smarty->assign("com_user", $this->com_user);
            $this->smarty->assign("roles", array_column($roles, 'role_id'));
        }

        $this->smarty->assign("nav_active", $this->nav_id);
        // tanggal
        $now = $this->datetimemanipulation->get_date_indonesia(date("Y-m-d"), 'in');
        $date_now = $now['hari'] . ", " . $now['tanggal'] . " " . $now['bulan'] . " " . $now['tahun'];
        $this->smarty->assign("tanggal", $date_now);
        // task manager not in
        $have_task = array(12, 13, 14, 15, 17, 22, 23);
        $this->smarty->assign("have_task", $have_task);
        // display global link
        self::_display_base_link();
        // display site title
        self::_display_site_title();
        // display current page
        self::_display_current_page();
        // check security
        self::_check_authority();
        // display sidebar navigation
        self::_display_sidebar_navigation();
        // get breadcrumb
        self::_get_breadcrumb();
        // display top shortcut
        //self::_display_top_shortcut();
    }

    /*
    * Method layouting base document
    * diperbolehkan untuk dioverride pada class anaknya
    */

    protected function display($tmpl_name = 'base/operator/document.html') {
        // --
        $this->smarty->assign("template_sidebar", "base/operator/sidebar.html");
        // set template
        $this->smarty->display($tmpl_name);
    }

    //
    // base private method here
    // prefix ( _ )
    // base link
    private function _display_base_link() {

    }

    // site title
    private function _display_site_title() {
        $this->portal_id = $this->config->item('portal_operator');
        // site data
        $this->com_portal = $this->m_site->get_site_data_by_id($this->portal_id);
        if (!empty($this->com_portal)) {
            $this->smarty->assign("site", $this->com_portal);
        }
    }

    // get current page
    private function _display_current_page() {
        // get current page (segment 1 : folder, segment 2 : controller)
        $url_menu = $this->uri->segment(1) . '/' . $this->uri->segment(2);
        $url_menu = trim($url_menu, '/');
        $url_menu = (empty($url_menu)) ? $this->config->item('default_operator') : $url_menu;
        $result = $this->m_site->get_current_page(array($url_menu));
        if (!empty($result)) {
            $this->smarty->assign("page", $result);
            $this->nav_id = $result['nav_id'];
            $this->parent_id = $result['parent_id'];
        }
    }

    // authority
    protected function _check_authority() {
        // default rule tp
        $this->role_tp = array("C" => "0", "R" => "0", "U" => "0", "D" => "0");
        // check
        if (!empty($this->com_user)) {
            // user authority
            $params = array($this->com_user['user_name'], $this->portal_id, $this->nav_id, $this->portal_id);
            $role_tp = $this->m_site->get_user_authority_by_nav($params);
            // get rule tp
            $i = 0;
            foreach ($this->role_tp as $rule => $val) {
                $N = substr($role_tp, $i, 1);
                $this->role_tp[$rule] = $N;
                $i++;
            }
        } else {
            // tidak memiliki authority
            redirect('login/operatorlogin');
        }
    }

    // set rule per pages
    protected function _set_page_rule($rule) {
        if (!isset($this->role_tp[$rule]) OR $this->role_tp[$rule] != "1") {
            // redirect to forbiden access
            redirect('login/operatorlogin/logout_process/');
        }
    }

    // sidebar navigation
    private function _display_sidebar_navigation() {
        $html = "";
        // get data
        $params = array($this->portal_id, $this->com_user['user_name'], $this->portal_id, 0);
        $rs_id = $this->m_site->get_navigation_user_by_parent_custom($params);

        if ($rs_id) {
            $html = '';
            foreach ($rs_id as $rec) {
                // parent active
                $parent_active = '';
                $this->parent_selected = self::_get_parent_group($this->parent_id, 0);
                if ($this->parent_selected == 0) {
                    $this->parent_selected = $this->nav_id;
                }
                // icon
                $icon = "resource/doc/images/nav/default.png";
                if (is_file("resource/doc/images/nav/" . $rec['nav_icon'])) {
                    $icon = "resource/doc/images/nav/" . $rec['nav_icon'];
                }
                // get child navigation
                $url_parent = site_url($rec['nav_url']);
                $arrow="";
                $child = $this->_get_child_navigation($rec['nav_id']);
                $treeview = "";
                if (!empty($child)) {
                    $url_parent = '#';
                    $arrow = '<i class="fa fa-angle-left pull-right"></i>';
                    $treeview = "treeview ";
                }
                // parent active
                if ($this->parent_selected == $rec['nav_id']) {
                    $treeview .= "active";
                }
                // data
                $html .= '<li class="'.$treeview.'">';
                $html .= '<a href="' . $url_parent . '"><i class="fa '.$rec['nav_icon'].'"></i><span>' . $rec['nav_title'] .'</span>'. $arrow . '</a>';
                $html .= $child;
                $html .= '</li>';
            }
        }
        $this->smarty->assign("list_sidebar_nav", $html);
    }

    // get child
    private function _get_child_navigation($parent_id) {
        $html = "";
        // get parent selected
        $parent_selected = self::_get_parent_group($this->parent_id, $parent_id);
        if ($parent_selected == 0) {
            $parent_selected = $this->nav_id;
        }
        // if parent selected then show child
        $expand = '';
        $top = self::_get_parent_group($this->parent_id, 0);
        if ($parent_id == $top) {
            $expand = 'show';
        }
        // --
        $params = array($this->portal_id, $this->com_user['user_name'], $this->portal_id , $parent_id);
        $rs_id = $this->m_site->get_navigation_user_by_parent_custom($params);
        if ($rs_id) {
            $html = '<ul class="treeview-menu">';
            foreach ($rs_id as $rec) {
                // selected
                $selected = ($rec['nav_id'] == $parent_selected) ? 'class="active"' : "";
                if (empty($rec['nav_icon'])) {
                    $rec['nav_icon'] = "fa-minus";
                }
                // parse
                $html .= '<li '. $selected .' >';
                $html .= '<a href="' . site_url($rec['nav_url']) . '" title="' . $rec['nav_desc'] . '"><i class="fa '.$rec['nav_icon'].'" style="color:#'.$rec['nav_icon_color'].'"></i>';
                // $html .= '<img src="' . base_url() . $icon . '" alt="" />';
                $html .= $rec['nav_title'];
                $html .= '</a>';
                $html .= '</li>';
            }
            $html .= '</ul>';
        }
        return $html;
    }

    // utility to get parent selected
    private function _get_parent_group($int_nav, $int_limit) {
        $selected_parent = 0;
        $result = $this->m_site->get_menu_by_id($int_nav);
        if (!empty($result)) {
            if ($result['parent_id'] == $int_limit) {
                $selected_parent = $result['nav_id'];
            } else {
                return self::_get_parent_group($result['parent_id'], $int_limit);
            }
        } else {
            $selected_parent = $result['nav_id'];
        }
        return $selected_parent;
    }

    // shortcut
    private function _display_top_shortcut() {
        //$total = $this->m_task->get_total_detail_task_waiting($this->com_user['role_id']);
        //$this->smarty->assign("total_task_waiting", $total);
    }

    private function _get_breadcrumb(){
        // echo $this->nav_id;
        // die();
    }

}
