<?php

  class Data_model extends CI_Model{

    // Product

    public function get_product_rows($params = array()){
      $this->db->select('*');
      $this->db->from('product');
			//$this->db->where('status', $params['status']);
      $this->db->order_by('created_date', 'DESC');
      if(array_key_exists("id", $params)){
        $this->db->where('id', $params['id']);
        $query = $this->db->get();
        $result = $query->row_array();
      }else{
         // set start and limit
        if(array_key_exists("start", $params) && array_key_exists("limit", $params)){
          $this->db->limit($params['limit'], $params['start']);
        }else if(!array_key_exists("start", $params) && array_key_exists("limit", $params)){
          $this->db->limit($params['limit']);
        }

        if(array_key_exists("returnType", $params) && $params['returnType'] == 'count'){
          $result = $this->db->count_all_results();
        }else{
          $query = $this->db->get();
          $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
      }
      return $result;
    }

    public function display_product_details($title){
      $this->db->where('title', $title);
      $query = $this->db->get('product')->result();
      return $query;
    }

    public function display_customer_review_count($title){
      $this->db->where('title', $title);
      $query = $this->db->query("SELECT COUNT(email) AS total_customer FROM customer_review")->result();
      return $query;
    }

    public function display_customer_review($title){
      $this->db->where('title', $title);
      $query = $this->db->get('customer_review')->result();
      return $query;
    }

    public function add_customer_review($data){
      $query = $this->db->insert('customer_review', $data);
      return $query;
    }

    // End of Product

    // Cart

    function update_cart($rowid, $qty, $price, $amount) {
 		   $data = array(
			   'rowid'   => $rowid,
			   'qty'     => $qty,
			   'price'   => $price,
			   'amount'  => $amount
		 );
		  $this->cart->update($data);
	  }

    function remove_cart($rowid, $qty){
      $data = array(
        'rowid' => $rowid,
        'qty'   => $qty
      );
      $this->cart->update($data);
    }

    public function display_shipping_details($email){
      $this->db->where('email', $email);
      return $this->db->get('users_details')->result();
    }

    public function update_customer_shipping_firstname($prev_email, $firstname){
      return $this->db->query("UPDATE users_details SET firstname = '$firstname' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_surname($prev_email, $lastname){
      return $this->db->query("UPDATE users_details SET surname = '$lastname' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_telephone($prev_email, $telephone){
      return $this->db->query("UPDATE users_details SET telephone = '$telephone' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_address1($prev_email, $address1){
      return $this->db->query("UPDATE users_details SET address1 = '$address1' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_province($prev_email, $region){
      return $this->db->query("UPDATE users_details SET region = '$region' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_address2($prev_email, $address2){
      return $this->db->query("UPDATE users_details SET address2 = '$address2' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_state($prev_email, $state){
      return $this->db->query("UPDATE users_details SET state = '$state' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_country($prev_email, $country){
      return $this->db->query("UPDATE users_details SET country = '$country' WHERE email = '$prev_email' ");
    }

    public function insert_order_detail($data){
  		$this->db->insert('order_items', $data);
  	}

    public function display_all_orders($email){
      $this->db->where('email', $email);
      return $this->db->get('order_items')->result();
    }

    public function display_order_count($email, $status){
      return $this->db->query("SELECT COUNT(*) AS total FROM order_items WHERE email = '$email' AND status = '$status' ")->result();
    }

    public function cancel_order($id, $status){
      $query = $this->db->query("UPDATE order_items SET status = '$status' WHERE id = '$id' ");
    }

    // End of Cart

  }

?>
