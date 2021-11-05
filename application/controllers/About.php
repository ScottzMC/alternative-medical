<?php

  class About extends CI_Controller{

    public function index(){
      $this->load->view('site/menu/nav');
      $this->load->view('site/about');
      $this->load->view('site/menu/footer');
    }
  }

?>
