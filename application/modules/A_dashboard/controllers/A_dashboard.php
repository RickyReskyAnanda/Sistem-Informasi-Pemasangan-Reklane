<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_dashboard extends MY_Controller{
    

    public function index(){
        $this->load_view('V_dashboard');
    }

   
}
?>