<?php

  class Cart extends CI_Controller{

    public function index(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $this->load->view('site/menu/nav');
      $this->load->view('site/shopping/view_cart', $data);
      $this->load->view('site/menu/footer');
    }

    public function add(){
      $insert_items = array(
        'id' => $this->input->post('id'),
			  'name' => $this->input->post('title'),
			  'price' => $this->input->post('price'),
			  'qty' => 1,
        'image' => $this->input->post('image')
		  );

		 $this->cart->insert($insert_items);
		 redirect('shopping/cart');
   }

   public function remove($rowid){
     $data = array(
       'rowid'   => $rowid,
       'qty'     => 0
     );

     $this->cart->update($data);
     redirect('shopping/cart');
   }

   public function update_cart(){
     foreach($_POST['cart'] as $id => $cart){
      $price = $cart['price'];
      $amount = $price * $cart['qty'];
      $this->Data_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
   }
     redirect('shopping/cart');
   }

  }

?>
