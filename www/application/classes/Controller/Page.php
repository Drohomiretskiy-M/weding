<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Page extends Controller_Common {
 
    public function action_index()
    {
        $content = View::factory('/pages/about');
        $this->template->content = $content;
    }    
    
    
  
} 
