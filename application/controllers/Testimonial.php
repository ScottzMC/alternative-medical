<?php

  class Testimonial extends CI_Controller{

    public function index(){
      $this->load->view('site/menu/nav');
      $this->load->view('site/testimonial');
      $this->load->view('site/menu/footer');
    }
  }

?>
