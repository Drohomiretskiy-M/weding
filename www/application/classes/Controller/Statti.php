<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Statti extends Controller_Common {
 
    
    public function action_stattia1()
    {
        $content = View::factory('/pages/4/stattia1');
        $this->template->content = $content;
    }
    public function action_stattia2()
    {
        $content = View::factory('/pages/4/stattia2');
        $this->template->content = $content;
    }
    public function action_krovotecha()
    {
        $content = View::factory('/pages/4/krovotecha');
        $this->template->content = $content;
    }
    public function action_perelom()
    {
        $content = View::factory('/pages/4/perelom');
        $this->template->content = $content;
    }
    public function action_opik()
    {
        $content = View::factory('/pages/4/opik');
        $this->template->content = $content;
    }
 
 
 
} 