<?php

  class Home extends CI_Controller{

    public function index(){
      $this->load->view('site/menu/nav');
      $this->load->view('site/home');
      $this->load->view('site/menu/footer');
    }
  }

?>
