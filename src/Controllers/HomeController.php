<?php

namespace Controllers;
use Core\View;

class HomeController{
   public function home(){
      new View('home', []);
   }
}