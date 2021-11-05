<?php

  class Add_product extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if($this->form_validation->run() == FALSE){
          // fails
          if($this->session->userdata('login')){
            $this->load->view('admin/menu/nav');
            $this->load->view('admin/product/add_product');
            $this->load->view('admin/menu/footer');
          }
        }else if(!empty($_FILES['userCover']['name'])){
          // set form validation rules
          $title = $this->input->post('title');
          $str_title = str_replace(' ', '-', $title);
          $price = $this->input->post('price');
          $description = $this->input->post('description');

          $time = time();
          $date = date('Y-m-j H:i:s');

          $files = $_FILES;
          //$images = array();
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
              $images[] = $fileName;
            }

            $fileName = implode(',', $images);

            $product = array(
              'title' => $str_title,
              'price' => $price,
              'description' => $description,
              'image' => $fileName,
              'created_time' => $time,
              'created_date' => $date
            );

            $insert_product = $this->Admin_model->insert_product($product);

            if($insert_product){
              redirect('admin/product/view_product');
            }else{
              $msgError = '<div class="alert alert-danger>Upload Failed</div>';
              $this->session->set_flashdata('msgError', $msgError);
              $this->load->view('admin/menu/nav');
              $this->load->view('admin/product/add_product');
              $this->load->view('admin/menu/footer');
          }
        }
      }else{
        redirect('home');
      }
    }
  }

?>
