<?php
class Product extends CI_Model
{
    // Get all rows from database table
    public function get_all_products()
    {
         return $this->db->query("SELECT * FROM products")->result_array();
    }





}
?>