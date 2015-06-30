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

    // Method to add products
    public function add()
    {

        // Load the form_validation library
        $this->load->library('form_validation');

        // Set form validation rules
        $this->form_validation->set_rules('name', '<strong><em>name</em></strong>', 'required|xss_clean|trim|min_length[2]|max_length[100]');

        $this->form_validation->set_rules('description', '<strong><em>description</em></strong>', 'required|xss_clean|trim|min_length[10]|max_length[140]');

        $this->form_validation->set_rules('price', '<strong><em>price</em></strong>', 'required|xss_clean|trim|decimal');


        // If validate errors appear show the
        // "add-product" and echo them out
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('products/add-product');

        }
        else
        {
      

            $this->load->view('products/add-product');

        }
    }




}
?>