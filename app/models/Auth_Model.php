<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class AuthModel extends Crud_model
{
    public function __construct()
    {
        parent::__construct();
        $this->call->helper('url');
    }
   public function index(){
    $this->call->view('home');
   }
}
