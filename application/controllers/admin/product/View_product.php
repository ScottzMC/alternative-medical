<?php

  class View_product extends CI_Controller{

    public function index(){
      $level = $this->session->userdata('ustatus');

      if($level == "Admin"){
        $config['base_url'] = base_url()."admin/product/view_product";
        $total_row = $this->Admin_model->record_product_count();
        $config['total_rows'] = $total_row;
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows']/$config['per_page'];
        $config['num_links'] = round($choice);

        $config['full_tag_open'] = '<ul style="margin-left: 100px;" class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';

        $config['next_tag_open'] = '<li>';
        $config['prev_tag_open'] = '<li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_tag_close'] = '</li>';
        $config['last_tag_close'] = '</li>';

        $config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><span><b>';
        $config['cur_tag_close'] = '</b></span></li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

        $data["product"] = $this->Admin_model->fetch_product_data($config["per_page"], $page);

        $this->load->view('admin/menu/nav');
        $this->load->view('admin/product/view_product', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    // Edit Product

    public function edit_product($id){
      $data['edit_product'] = $this->Admin_model->display_product_by_id($id);

      $this->form_validation->set_rules('title', 'Product Title', 'trim|required');
      $this->form_validation->set_rules('price', 'Product Price', 'trim|required');
      $this->form_validation->set_rules('description', 'Product Description', 'trim');

      $email = $this->session->userdata('uemail');
      $level = $this->session->userdata('ustatus');

      if($level == "Admin"){
        if($this->form_validation->run() == FALSE){
          $this->load->view('admin/menu/nav');
          $this->load->view('admin/product/edit_product', $data);
          $this->load->view('admin/menu/footer');
        }else if(!empty($_FILES['userCover']['name'])){
          $files = $_FILES;
          $cpt = count($_FILES['userCover']['name']);
          for($i=0; $i<$cpt; $i++){
            $_FILES['userCover']['name']= $files['userCover']['name'][$i];
            $_FILES['userCover']['type']= $files['userCover']['type'][$i];
            $_FILES['userCover']['tmp_name']= $files['userCover']['tmp_name'][$i];
            $_FILES['userCover']['error']= $files['userCover']['error'][$i];
            $_FILES['userCover']['size']= $files['userCover']['size'][$i];

            $config = array(
                'upload_path'   => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('userCover');
            $fileName = $_FILES['userCover']['name'];
          }

            $title = $this->input->post('title');
            $str_title = str_replace(' ', '-', $title);
            $price = $this->input->post('price');
            $description = $this->input->post('description');

          if(!empty($_FILES['userCover']['name'])){
            $update_image = $this->Admin_model->update_product_image($id, $fileName);
            $update_title = $this->Admin_model->update_product_title($id, $title);
            $update_price = $this->Admin_model->update_product_price($id, $price);
            $update_description = $this->Admin_model->update_product_description($id, $description);
          }
          if($update_image || $update_title || $update_price || $update_description){
            $statusMsg = '<div class="alert alert-success" role="alert">Updated Details</div>';
            redirect('admin/product/view_product');
          }else{
            $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('admin/menu/nav');
            $this->load->view('admin/product/edit_product', $data);
            $this->load->view('admin/menu/footer');
          }
        }
      }else{
        redirect('home');
      }
    }

    // End of Edit Product

    // Delete Product

    public function deliver_order(){
      $pid = $this->input->post('order_id');
      $status = "Delivered";
      $this->Admin_model->deliver_order($pid, $status);
    }

    public function cancel_order(){
      $pid = $this->input->post('order_id');
      $status = "Cancelled";
      $this->Admin_model->cancel_order($pid, $status);
    }

    public function delete_order(){
      $id = $this->input->post('del_id');
      $this->Admin_model->delete_order($id);
    }

    // End of Delete Product

  }

?>
