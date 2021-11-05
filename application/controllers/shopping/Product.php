<?php

  class Product extends CI_Controller{

    function __construct(){
      parent:: __construct();
      // Load Pagination Library
      $this->load->library('pagination');
      // Per Page Limit
      $this->perPage = 9;
    }

    public function index(){
      // Get Rows Count
      $conditions['returnType'] = 'count';
      //$conditions['status'] = 'Accepted';

      $totalRec = $this->Data_model->get_product_rows($conditions);

      // Pagination Configuration
      $config['base_url'] = base_url().'shopping/product/';
      $config['uri_segment'] = 3;
      $config['total_rows'] = $totalRec;
      $config['per_page'] = $this->perPage;

      // Styling
      $config['num_tag_open'] = '<li><a class="page-numbers" href="#">';
      $config['num_tag_close'] = '</a></li>';

      $config['cur_tag_open'] = '<li><span class="page-numbers current">';
      $config['cur_tag_close'] = '</span></li>';

      $config['next_link'] = 'Next';
      $config['prev_link'] = 'Prev';

      $config['next_tag_open'] = '<li><a class="next page-numbers" href="#">';
      $config['next_tag_close'] = '</a></li>';

      $config['prev_tag_open'] = '<li><a class="prev page-numbers" href="#">';
      $config['prev_tag_close'] = '</a></li>';

      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';

      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';

      // Initialize Pagination Library
      $this->pagination->initialize($config);

      // Define Offset
      $page = $this->uri->segment(3);
      $offset = !$page?0:$page;

      // Get Rows
      $conditions['returnType'] = '';
      $conditions['start'] = $offset;
      $conditions['limit'] = $this->perPage;
      //$conditions['status'] = 'Accepted';

      $data["all_product"] = $this->Data_model->get_product_rows($conditions);

      $this->load->view('site/menu/nav');
      $this->load->view('site/shopping/product/product', $data);
      $this->load->view('site/menu/footer');
    }

    public function detail($title){
      $data['detail'] = $this->Data_model->display_product_details($title);
      $data['customer_count'] = $this->Data_model->display_customer_review_count($title);
      $data['customer_review'] = $this->Data_model->display_customer_review($title);

      $submit_review = $this->input->post('reviewBtn');

      if(isset($submit_review)){
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $review = $this->input->post('review');
        $time = time();
        $date = date('Y-m-d H:i:s');

        $add_review_array = array(
          'fullname' => $fullname,
          'email' => $email,
          'review' => $review,
          'title' => $title,
          'created_time' => $time,
          'created_date' => $date
        );

        $add_review = $this->Data_model->add_customer_review($add_review_array);
        if($add_review){
          redirect('shopping/product/detail/'.$title);
        }else{
          $statusMsg = '<div class="alert alert-danger>Comment Failed</div>';
          $this->session->set_flashdata('msgError', $statusMsg);
          $this->load->view('site/menu/nav');
          $this->load->view('site/shopping/product/detail', $data);
          $this->load->view('site/menu/footer');
        }
      }

      $this->load->view('site/menu/nav');
      $this->load->view('site/shopping/product/detail', $data);
      $this->load->view('site/menu/footer');
    }
  }

?>
