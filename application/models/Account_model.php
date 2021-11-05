<?php

  class Account_model extends CI_Model{

    // Login

    function validate($email, $password){
	    	$escape_email = $this->db->escape_str($email);
	      	$escape_password = $this->db->escape_str($password);

	  	  	$this->db->where('email', $escape_email);
	  		//$this->db->where('password', $escape_password);
	      	$query = $this->db->get('users');

	      	if($query->num_rows() > 0){
	        	$result = $query->row_array();
	        	if($this->bcrypt->check_password($escape_password, $result['password'])){
	  		    	return $query->result();
	        	}else{
	          		return array();
	        	}
	      	}else{
	        	return NULL;
	      	}
    	}

    // End of Login

    // Register

    public function create_user($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('users', $escape_data);
      return $query;
    }

    public function create_user_details($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('users_details', $escape_data);
      return $query;
    }

    // End of Register

  }

?>
