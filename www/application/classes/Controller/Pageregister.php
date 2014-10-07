<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Pageregister extends Controller_Common{

   public function action_register()
    {
       if(isset($_POST['submit'])){
        
   
        $tests = ORM::factory('test');
        $tests->napr = $_POST['napr'];
        $tests->doctor = $_POST['doctor'];
        $tests->name = $_POST['name'];
        $tests->surname = $_POST['surname'];
        $tests->birthday_day = $_POST['birthday_day'];
        $tests->birthday_month = $_POST['birthday_month'];
        $tests->birthday_year = $_POST['birthday_year'];
        $tests->telefon = $_POST['telefon'];
        $tests->email = $_POST['email'];
        $tests->assign_time = $_POST['assign_time'];
        $tests->notes = $_POST['notes'];
        $tests->save(); 
       }
       
        $content = View::factory('/pages/register');
        $this->template->content = $content;

   }
 
} 