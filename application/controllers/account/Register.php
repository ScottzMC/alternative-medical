<?php

  class Register extends CI_Controller{

    public function index(){
      $session_email = $this->session->userdata('uemail');
      $session_status = $this->session->userdata('ustatus');

      if(empty($session_email)){
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');

        $form_valid = $this->form_validation->run();
        $submit_register = $this->input->post('registerBtn');

        $this->load->view('site/menu/nav');
        $this->load->view('site/account/register');
        $this->load->view('site/menu/footer');

        /*if($this->form_validation->run() == FALSE){
          $this->load->view('admin/account/register');
        }else{*/
        if(isset($submit_register)){
          $email = $this->input->post('email');
          $password = $this->input->post('password');
          $hashed_password = $this->bcrypt->hash_password($password);
          $time = time();
          $date = date('Y-m-d H:i:s');

          $add_user_array = array(
            'email' => $email,
            'password' => $hashed_password,
            'status' => 'User',
            'created_time' => $time,
            'created_date' => $date
          );

          $add_user_details = array('email' => $email);

          $add_user = $this->Account_model->create_user($add_user_array);
          $add_user_details = $this->Account_model->create_user_details($add_user_details);

          if($add_user && $add_user_details){
            redirect('account/login');
          }else{
            $statusMsg = '<div class="alert alert-danger>Registration Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/menu/nav');
            $this->load->view('site/account/register');
            $this->load->view('site/menu/footer');
          }
        }
      }
    }
  }

?>
