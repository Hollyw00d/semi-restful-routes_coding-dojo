<?php
class Product extends CI_Model
{
    // Get all rows from database table
    public function get_all_products()
    {
         return $this->db->query("SELECT * FROM products")->result_array();
    }

    // Add a new item into the database
    public function add_product($post_data)
    {
        $this->db->query("INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?,NOW(),NOW())", array($post_data['name'], $post_data['description'], $post_data['price']));
    }

    public function show_product($product_id)
    {

        return $this->db->query("SELECT * FROM products WHERE id = {$product_id}")->row_array();

    }

    public function update_product($post_data, $product_id)
    {

        $this->db->query("UPDATE products SET name = '{$post_data['name']}', description = '{$post_data['description']}', updated_at = NOW() WHERE id = $product_id");

    }

    public function delete_product($product_id)
    {
        $this->db->query("DELETE FROM products WHERE id = $product_id");

    }



}
?>