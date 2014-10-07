<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Doctors extends Controller_Common {
 
    
        public function action_doc()
    {
        $content = View::factory('/pages/3/doc');
        $this->template->content = $content;
    }   
    public function action_stefonushin()
    {
        $content = View::factory('/pages/3/stefonushin');
        $this->template->content = $content;
    }  
    public function action_buriak()
    {
        $content = View::factory('/pages/3/buriak');
        $this->template->content = $content;
    }   
    public function action_klish()
    {
        $content = View::factory('/pages/3/klish');
        $this->template->content = $content;
    }   
    public function action_opuhiv()
    {
        $content = View::factory('/pages/3/opuhiv');
        $this->template->content = $content;
    }   
    public function action_martinyk()
    {
        $content = View::factory('/pages/3/martinyk');
        $this->template->content = $content;
    }   
    public function action_krjak()
    {
        $content = View::factory('/pages/3/krjak');
        $this->template->content = $content;
    }  
    public function action_jashenko()
    {
        $content = View::factory('/pages/3/jashenko');
        $this->template->content = $content;
    }   
     public function action_novosad()
    {
        $content = View::factory('/pages/3/novosad');
        $this->template->content = $content;
    }   
    public function action_dolot()
    {
        $content = View::factory('/pages/3/dolot');
        $this->template->content = $content;
    }   
 
 
 
 
} // End 