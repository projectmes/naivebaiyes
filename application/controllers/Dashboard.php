<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        if($this->session->userdata['user_logged'] == TRUE){

        } else {
            redirect('login');
        }
    }


    public function index(){
        $this->load->view('__partials/header');
        $this->load->view('__partials/loader');
        $this->load->view('dashboard');
        $this->load->view('__partials/js');
    }

}

?>