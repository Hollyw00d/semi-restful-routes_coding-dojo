<?php
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load the Product model on all pages
        $this->load->model('Product');




        $this->output->enable_profiler();
    }

    public function index()
    {

        // Assign the Product model, get_all_products() method to a variable $products
        $products = $this->Product->get_all_products();

        // Show page that lists products AND
        // pass in $products variable as an associative array
        $this->load->view('products/list-products.php', array('products' => $products));
    }
}
?>