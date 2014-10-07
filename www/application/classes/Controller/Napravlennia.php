<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Napravlennia extends Controller_Common {
 
   
    public function action_dermatologia()
    {
        $content = View::factory('/pages/1/dermatologia');
        $this->template->content = $content;
    }
    public function action_napravlinia()
    {
        $content = View::factory('/pages/1/napravlinia');
        $this->template->content = $content;
    }
     public function action_kidsdoc()
    {
        $content = View::factory('/pages/1/kidsdoc');
        $this->template->content = $content;
    }   
    public function action_vakcina()
    {
        $content = View::factory('/pages/1/vakcina');
        $this->template->content = $content;
    }   
    public function action_vagitnist()
    {
        $content = View::factory('/pages/1/vagitnist');
        $this->template->content = $content;
    }   
    public function action_ginekologia()
    {
        $content = View::factory('/pages/1/ginekologia');
        $this->template->content = $content;
    }   
    public function action_kardiologia()
    {
        $content = View::factory('/pages/1/kardiologia');
        $this->template->content = $content;
    }   
     public function action_uzd()
    {
        $content = View::factory('/pages/1/uzd');
        $this->template->content = $content;
    }   
 
 
} 