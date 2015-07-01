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
            // Create success message session variable
            $this->session->set_userdata('message', '<p><strong>You have successfully entered a new product into the database!</strong></p>');

            $this->Product->add_product($this->input->post());

            redirect(base_url());

        }
    }

    public function show($product_id)
    {
        $single_record = $this->Product->show_product($product_id);

        $this->load->view('products/single-record', array('single_record' => $single_record));
    }

    public function edit($product_id)
    {
        $single_record = $this->Product->show_product($product_id);

        $this->load->view('products/edit-single-record', array('single_record' => $single_record));


    }

    public function update($product_id)
    {
        // Create update record success message
        // session variable
        $this->session->set_userdata("update_success", "<p><strong>You have successfully updated record $product_id !</strong></p>");

        $this->Product->update_product($this->input->post(), $product_id);

        redirect(base_url() . 'products/edit/' . $product_id);
    }

    public function remove($product_id)
    {
        // Create a delete record success message
        // session variable
        $this->session->set_userdata("delete_success", "<p><strong>You have successfully deleted record $product_id!</strong></p>");

        $this->Product->delete_product($product_id);

        redirect(base_url());
    }
}
?>