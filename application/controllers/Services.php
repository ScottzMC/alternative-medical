<?php

  class Services extends CI_Controller{

    public function index(){
      $this->load->view('site/menu/nav');
      $this->load->view('site/services');
      $this->load->view('site/menu/footer');
    }
  }

?>
