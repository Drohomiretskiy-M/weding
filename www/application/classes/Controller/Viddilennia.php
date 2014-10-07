<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Viddilennia extends Controller_Common {
 
   
    public function action_viddilenia()
    {
        $content = View::factory('/pages/2/viddilenia');
        $this->template->content = $content;
    }    
       public function action_gastrocentr()
    {
        $content = View::factory('/pages/2/gastrocentr');
        $this->template->content = $content;
    } 
       public function action_kidsalergocenter()
    {
        $content = View::factory('/pages/2/kidsalergocenter');
        $this->template->content = $content;
    } 
       public function action_diagnostica()
    {
        $content = View::factory('/pages/2/diagnostica');
        $this->template->content = $content;
    } 
       public function action_konsultation()
    {
        $content = View::factory('/pages/2/konsultation');
        $this->template->content = $content;
    } 
       public function action_laboratoria()
    {
        $content = View::factory('/pages/2/laboratoria');
        $this->template->content = $content;
    } 
       public function action_centerpsihomastiku()
    {
        $content = View::factory('/pages/2/centerpsihomastiku');
        $this->template->content = $content;
    } 
 
 
 
} // End Static