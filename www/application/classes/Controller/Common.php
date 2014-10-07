<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'start';
 
    public function before()
    {
        parent::before();
        $this->template->content = '';
        $this->template->styles = array('foundation', 'main', 'normalize');
        $this->template->scripts = array('public/js/vendor/placeholder.js','public/js/vendor/modernizr.js', 'public/vendor/js/jquery.cookie.js','public/js/vendor/jquery.js','public/js/vendor/fastclick.js', 'public/js/foundation.min.js');
    }
 
} 