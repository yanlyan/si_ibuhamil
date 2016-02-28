<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once( BASEPATH.'plugins/smarty/libs/Smarty.class.php' );

class CI_Smarty extends Smarty {

    private $javascript = "";
    private $style = "";

    function CI_Smarty() {
        // smarty constructor
        parent::__construct();
        // default cache
        $this->compile_dir = "cache";
        // default view
        $this->template_dir = APPPATH . "views";
        // define variable
        $this->assign('BASEURL', base_url());
        $this->assign('LOAD_STYLE', "");
        $this->assign('LOAD_JAVASCRIPT', "");
    }

    public function load_themes($name = "default", $js = NULL, $css = "load-style.css") {
        // load CI
        $CI =& get_instance();
        // get css file
        $css_file =  $CI->config->item('resource_path') . 'themes/' . $name . '/' . $css;
        // assign
        if(is_file($css_file)) {
            $this->assign('THEMESPATH', base_url() . $css_file);
        }else {
            $msg = "File berikut ini tidak ditemukan : " . base_url() . $css_file;
            show_error($msg, 404);
        }

        if (!empty($js)) {
            // get js file
            $js_file =  $CI->config->item('resource_path') . 'themes/' . $name . '/' . $js;
            // assign
            if(is_file($js_file)) {
                $this->assign('JSPATH', base_url() . $js_file);
            }else {
                $msg = "File berikut ini tidak ditemukan : " . base_url() . $js_file;
                show_error($msg, 404);
            }
        }
    }

    public function load_javascript($path) {
        // load CI
        $CI =& get_instance();
        // get js file
        $js_file =  $CI->config->item('resource_path') . 'libs/' . $path;
        if(is_file($js_file)) {
            $this->javascript .= '<script type="text/javascript" src="' . base_url() . $js_file . '"></script>';
            $this->javascript .= "\n";
            // assign
            $this->assign('LOAD_JAVASCRIPT', $this->javascript);
        }else {
            $msg = "File berikut ini tidak ditemukan : " . base_url() . $path;
            show_error($msg, 404);
        }
    }

    public function load_style($path, $media = "all") {
        // load CI
        $CI =& get_instance();
        // get css file
        $css_file =  $CI->config->item('resource_path') . 'libs/' . $path;
        // assign
        if(is_file($css_file)) {
            $this->style .= '<link rel="stylesheet" type="text/css" href="' . base_url() . $css_file . '" media="' . $media . '" />';
            $this->style .= "\n";
            $this->assign('LOAD_STYLE', $this->style);
        }else {
            $msg = "File berikut ini tidak ditemukan : " . base_url() . $css_file;
            show_error($msg, 404);
        }
    }
}
// END Smarty Class
