<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Cart extends CI_Controller { // Our Cart class extends the Controller class


	function __construct()

	{

        parent::__construct();

		$this->load->model('cart_model');

    }

     
   // function cart()
   // {
       // parent::Controller(); // We define the the Controller class is the parent. 
       // $this->load->model('cart_model'); // Load our cart model for our entire class 
   // }

	function index()
	{
	    $data['products'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products

     
    $data['content'] = 'cart/products'; // Select our view file that will display our products

    $this->load->view('frontend/header');
    $this->load->view('frontend/index', $data); // Display the page with the above defined content

	    //print_r($data['products']); // Print out the array to see if it works (Remove this line when done testing)

    $this->load->view('frontend/footer');
	}

 
 
}
/* End of file cart.php */
/* Location: ./application/controllers/cart.php */