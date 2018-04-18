<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cs extends CI_Controller {



	function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
	}

	public function get_subcat_by_cat() {
		$cat = $this->input->post('cat');
		$result = $this->db->get_where('product_category',array('main_cat_id'=>$cat))->result();
		echo json_encode($result);
	}
	
	public function index()
	{
			$page_data['page_name'] = 'Home';

 
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
            $this->load->view('frontend/header',$page_data);

            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $this->db->where('offer',1);
            $this->db->or_where('offer',2); 
            $page_data['offered_products'] = $this->db->get('ecomm_products')->result();
            //$page_data['brands'] = $this->db->get('brands')->result(); 
            //$page_data['products'] = $this->db->get('ecomm_products')->result(); 
            $this->load->view('frontend/index',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
            $this->load->view('frontend/footer');
	}

	public function new_product()
	{
			$page_data['page_name'] = 'New Products';
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
            $this->load->view('frontend/header',$page_data);
            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $this->db->where('offer',1);
            $this->db->or_where('offer',2);
            $page_data['offered_products'] = $this->db->get('ecomm_products')->result();
            $page_data['brands'] = $this->db->get('brands')->result(); 
            $this->load->view('frontend/new_product',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
			$this->load->view('frontend/footer');
	}

	public function offered_product()
	{
			$page_data['page_name'] = 'Offered Products';
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
            $this->load->view('frontend/header',$page_data);
            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $this->db->where('offer',1);
            $this->db->or_where('offer',2);
            $page_data['offered_products'] = $this->db->get('ecomm_products')->result();
            $page_data['brands'] = $this->db->get('brands')->result(); 
            $this->load->view('frontend/offered_product',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
			$this->load->view('frontend/footer');
	}
	public function brand_product()
	{
			$page_data['page_name'] = 'Brand Products';
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
			$page_data['brands'] = $this->db->get('brands')->result();
			if(isset($_GET['id'])){
				$current_brand_id=$_GET['id'];
				$page_data['brand_products'] = $this->db->get_where('ecomm_products',array('brand_id'=>$current_brand_id))->result();
			}
			elseif(isset($_GET['brand_id'])){
				$non_brand_id="20170922072708-127001-100";
				$page_data['brand_products'] = $this->db->get_where('ecomm_products',array('brand_id'=>$non_brand_id))->result();
			}			
			else{

				$page_data['brand_products'] = $this->db->get('ecomm_products')->result();

			}

            $this->load->view('frontend/header',$page_data);
            $this->load->view('frontend/brand_product',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
			$this->load->view('frontend/footer');
	}


		public function products_by_category()
	{
			$page_data['page_name'] = 'Products By Category';
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
			if(isset($_GET['id'])){
				$current_cat_id=$_GET['id'];
				$page_data['category_products'] = $this->db->get_where('ecomm_products',array('cat_id'=>$current_cat_id))->result();
			}
			elseif(isset($_GET['cat_id'])){
				$non_cat_id="20170922072708-127001-100";
				$page_data['category_products'] = $this->db->get_where('ecomm_products',array('cat_id'=>$non_cat_id))->result();
			}			
			else{

				$page_data['category_products'] = $this->db->get('ecomm_products')->result();

			}

            $this->load->view('frontend/header',$page_data);
            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $this->load->view('frontend/products_by_category',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
			$this->load->view('frontend/footer');
	}




	public function ecomm_update_cart()
	{
			$page_data['page_name'] = 'Update Cart';

			$session = session_id();

			echo "session = $session";
			$qty = (isset($_POST['qty']) && ctype_digit($_POST['qty'])) ? $_POST['qty'] : 0;
			echo "qty=$qty";
			$product_code = (isset($_POST['product_code']))? $_POST['product_code'] : '';
			echo "product code=$product_code";
			$action = (isset($_POST['submit']))? $_POST['submit']:'';
			echo "action=$action";
			$redirect = (isset($_POST['redirect']))? $_POST['redirect']:'ecomm_shop.php';
			echo "redirect=$redirect";


			switch ($action) {

			case "Add to Cart": if (!empty($product_code) && $qty > 0) {

						$data = array(

							'session'	=>	$session,
							'product_code'	=>	$product_code,
							'qty'	=>	$qty

						);



						$this->db->insert('ecomm_temp_cart',$data);

				}


			redirect($redirect);
			exit();

			break;



			case "Change Qty": if (!empty($product_code)) {
			if ($qty > 0) {


						$data = array(

							'session'	=>	$session,
							'product_code'	=>	$product_code,
							'qty'	=>	$qty

						);




						$this->db->where('session',$session);
						$this->db->where('product_code',$product_code);						
						$this->db->update('ecomm_temp_cart',$data);


			} 
			else { 

						$data = array(

							'session'	=>	$session,
							'product_code'	=>	$product_code,
							'qty'	=>	$qty

						);




						$this->db->where('session',$session);
						$this->db->where('product_code',$product_code);		
						$this->db->delete('ecomm_temp_cart');										


			}

				}

			redirect($redirect);
			exit();

			break;

			case 'Empty Cart': 

						$this->db->where('session',$session);
	
						$this->db->delete('ecomm_temp_cart');	




			redirect($redirect);
			exit();

			break;




			default:
			redirect($redirect);
			exit();


			}



			

	}






		public function single_product()
	{
			$page_data['page_name'] = 'Single Product';
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
            $this->load->view('frontend/header',$page_data);
            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $this->db->where('offer',1);
            $this->db->or_where('offer',2);
            $page_data['offered_products'] = $this->db->get('ecomm_products')->result();
            $page_data['brands'] = $this->db->get('brands')->result(); 
            $page_data['sdata'] = $this->db->get_where('ecomm_products',array('product_code'=>$_GET['id']))->row();
            $related_cat_id = $this->crud->get_product_by_id('ecomm_products', 'cat_id', $_GET['id']);
            $page_data['related_products'] = $this->db->get_where('ecomm_products',array('cat_id'=>$related_cat_id))->result();



$product_code = isset($_GET['id'])?$_GET['id'] : '';


$page_data['temp_cart'] = $this->db->get_where('ecomm_temp_cart',array('product_code'=>$product_code))->row();







            $this->load->view('frontend/ecomm_view_product',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
			$this->load->view('frontend/footer');
	}



	public function shoping_cart()
	{
			$page_data['page_name'] = 'Shoping Cart';

			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
            $this->load->view('frontend/header',$page_data);


//$query = $this->db->query('YOUR QUERY HERE');








            


            $this->load->view('frontend/ecomm_view_cart',$page_data);

			$this->load->view('frontend/footer');
	}



	public function ecomm_checkout()
	{
			$page_data['page_name'] = '';

 
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
            $this->load->view('frontend/header',$page_data);

            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $this->db->where('offer',1);
            $this->db->or_where('offer',2); 
            $page_data['offered_products'] = $this->db->get('ecomm_products')->result();
            $page_data['brands'] = $this->db->get('brands')->result(); 
            //$page_data['products'] = $this->db->get('ecomm_products')->result(); 
            $this->load->view('frontend/ecomm_checkout',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
            $this->load->view('frontend/footer');
	}




		public function ecomm_checkout2()
	{
			$page_data['page_name'] = '';

 
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
            $this->load->view('frontend/header',$page_data);

            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $this->db->where('offer',1);
            $this->db->or_where('offer',2); 
            $page_data['offered_products'] = $this->db->get('ecomm_products')->result();
            $page_data['brands'] = $this->db->get('brands')->result(); 
            //$page_data['products'] = $this->db->get('ecomm_products')->result(); 
            $this->load->view('frontend/ecomm_checkout2',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
            $this->load->view('frontend/footer');
	}





		public function ecomm_checkout3()
	{
			$page_data['page_name'] = '';


 
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
            $this->load->view('frontend/header',$page_data);

            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $this->db->where('offer',1);
            $this->db->or_where('offer',2); 
            $page_data['offered_products'] = $this->db->get('ecomm_products')->result();
            $page_data['brands'] = $this->db->get('brands')->result(); 
            //$page_data['products'] = $this->db->get('ecomm_products')->result(); 
            $this->load->view('frontend/ecomm_checkout3',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
            $this->load->view('frontend/footer');
	}	



	
	public function about_us()
	{
			$page_data['page_name'] = 'About Us';
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
			$page_data['system_setup'] = $this->db->get('system_setup')->result();
			$page_data['members'] = $this->db->get('team_members')->result();
            $this->load->view('frontend/header',$page_data);
            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $page_data['about_us'] = $this->db->get('about_us')->row();
            $this->load->view('frontend/about_us',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
			$this->load->view('frontend/footer');
	}

	public function contact_us()
	{
			$page_data['page_name'] = 'Contact Us';
			$page_data['cats'] = $this->crud->get_all('category');
			$page_data['brands'] = $this->db->get('brands')->result();
            $this->load->view('frontend/header',$page_data);
            //$page_data['about_us'] = $this->db->get('about_us')->row();
            //$this->load->view('about_us',$page_data);
            $page_data['new_products'] = $this->db->get_where('ecomm_products',array('new_arrival'=>1))->result();
            $this->load->view('frontend/contact_us',$page_data);
            $this->load->view('templates/horizontal_brand_icon_area',$page_data);
			$this->load->view('frontend/footer');
	}

	



} // end of class