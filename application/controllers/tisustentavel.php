<?php

class TiSustentavel extends CI_Controller {
   
    public function index (){
        $this->load->helpers('url');
        $this->load->view('tisustentavel');
    }
    
    public function iso() {
        $this->load->view('iso');
    }
    
    public function isoqua() {
        $this->load->view('isoqua');
    }
    
    public function header() {
        $this->load->view('header');
    }
    
    public function footer() {
        $this->load->view('footer');
    }
}