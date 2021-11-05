<?php

  class Admin_model extends CI_Model{

    // Dashboard

    function display_product_count(){
      $query = $this->db->query("SELECT COUNT(*) AS product_count FROM product")->result();
      return $query;
    }

    function display_order_count(){
      $query = $this->db->query("SELECT COUNT(*) AS order_count FROM order_items")->result();
      return $query;
    }

    function display_product_status(){
      $this->db->limit('8');
      $this->db->order_by('created_date', 'DESC');
      $query = $this->db->get('product')->result();
      return $query;
    }

    function display_product_purchase(){
      $query = $this->db->get('order_items')->result();
      return $query;
    }

    // End of Dashboard

    // Product

    public function record_product_count() {
        return $this->db->count_all("product");
    }

    public function fetch_product_data($limit, $start){
        $this->db->limit($limit, $start);
        $query = $this->db->get("product");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

   public function display_product_by_id($id){
     $this->db->where('id', $id);
     $query = $this->db->get("product")->result();
     return $query;
   }

   public function update_product_title($id, $title){
     $query = $this->db->query("UPDATE product SET title = '$title' WHERE id = '$id' ");
     return $query;
   }

   public function update_product_price($id, $price){
     $query = $this->db->query("UPDATE product SET price = '$price' WHERE id = '$id' ");
     return $query;
   }

   public function update_product_description($id, $description){
     $query = $this->db->query("UPDATE product SET description = '$description' WHERE id = '$id' ");
     return $query;
   }

   public function update_product_image($id, $cover){
     $query = $this->db->query("UPDATE product SET image = '$cover' WHERE id = '$id' ");
     return $query;
   }

   public function insert_product($data){
     $query = $this->db->insert('product', $data);
     return $query;
   }

   public function cancel_order($id, $status){
     $query = $this->db->query("UPDATE order_items SET status = '$status' WHERE id = '$id' ");
   }

   public function deliver_order($id, $status){
     $query = $this->db->query("UPDATE order_items SET status = '$status' WHERE id = '$id' ");
   }

   public function delete_order($id){
     $query = $this->db->query("DELETE FROM order_items WHERE id = '$id' ");
     return $query;
   }

    // End of Product
  }

?>
