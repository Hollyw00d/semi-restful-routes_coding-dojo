<?php
class Product extends CI_Model
{
    // Get all rows from database table
    public function get_all_products()
    {
         return $this->db->query("SELECT * FROM products")->result_array();
    }

    // Add a new item into the database
    public function add_product($product)
    {

        $this->db->query("INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?,NOW(),NOW())", array($product['name'], $product['description'], $product['price']));

    }
}
?>