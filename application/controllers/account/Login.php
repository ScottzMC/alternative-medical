<?php

  class Login extends CI_Controller{

    public function index(){
      $session_email = $this->session->userdata('uemail');
      $session_status = $this->session->userdata('ustatus');

      if(empty($session_email)){
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $form_valid = $this->form_validation->run();
  			$submit_login = $this->input->post('loginBtn');

        if($form_valid == FALSE){
          $this->load->view('site/menu/nav');
          $this->load->view('site/account/login');
          $this->load->view('site/menu/footer');
        }else if(isset($submit_login)){
          $email = $this->input->post('email');
          $password = $this->input->post('password');

          $uresult = $this->Account_model->validate($email, $password);
          if(count($uresult) > 0){
            $sess_data = array(
            'login' => TRUE,
            'uid' => $uresult[0]->id,
            'uemail' => $uresult[0]->email,
            'ustatus' => $uresult[0]->status
           );

           /*$cookie = array(
            'name'   => 'remember_me_token',
            'value'  => 'asokb0ro04mob00i3',
            'expire' => '720000000',
            'domain' => 'http://localhost/ClientProjects/BrainStorming',
            'path'   => '/'
            );

            set_cookie($cookie);*/
            $this->session->set_userdata($sess_data);
            redirect('home');

            }else{
              $statusMsg = '<span class="text-danger">Wrong Email-ID or Password!</span>';
              $this->session->set_flashdata('msgError', $statusMsg);
              $this->load->view('site/menu/nav');
              $this->load->view('site/account/login');
              $this->load->view('site/menu/footer');
           }
        }
      }else{
        redirect('home');
      }
    }
  }

?>
