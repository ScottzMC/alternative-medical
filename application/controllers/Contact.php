<?php

  class Contact extends CI_Controller{

    public function index(){
      $this->load->view('site/menu/nav');
      $this->load->view('site/contact');
      $this->load->view('site/menu/footer');
    }
  }

?>
