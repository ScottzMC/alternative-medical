<?php

  class Dashboard extends CI_Controller{

    public function index(){
      $level = $this->session->userdata('ustatus');

      $data['product_count'] = $this->Admin_model->display_product_count();
      $data['order_count'] = $this->Admin_model->display_order_count();
      $data['product_status'] = $this->Admin_model->display_product_status();
      $data['order'] = $this->Admin_model->display_product_purchase();

      if($level == "Admin"){
        $this->load->view('admin/menu/nav');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }
  }

?>
