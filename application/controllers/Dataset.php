<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dataset extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        if($this->session->userdata['user_logged'] == TRUE){
            $this->load->model('dataset_model');
        } else {
            redirect('login');
        }
    }


    public function index(){
        $data_atribut['list_atribut'] = $this->dataset_model->list_atribut(); 
        $this->load->view('__partials/header');
        $this->load->view('__partials/loader');
        $this->load->view('dataset',$data_atribut);
        $this->load->view('__partials/js');
    }

    public function tambah_atribut(){
        $this->dataset_model->add_attr();
    }

    public function detail_atribut($id){
        
        $data_atribut['detail_atribut'] = $this->dataset_modal->detail_atribut($id);
        $this->load->view('__partials/header');
        $this->load->view('__partials/loader');
        $this->load->view('dataset',$data_atribut);
        $this->load->view('__partials/js');
    }


    public function edit_atribut(){
        $this->dataset_model->edit_atribut();
    }

    public function delete_atribut($id){
        $this->dataset_model->hapus_atribut($id);
    }

    

}
