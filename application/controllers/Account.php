<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load global models, check auth, etc.
    }
    
    public function index(){
        $data=['title'=>'Login'];
        $this->template->load('auth','login',$data,'auth');
    }
    
}