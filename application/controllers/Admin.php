<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('crud');
    }

    public function gen_uid() {
		$stamp = date("Ymdhis");
		$ip = $_SERVER['REMOTE_ADDR'];
		$orderid = "$stamp-$ip";
		$orderid = str_replace(".", "", "$orderid");
		$orderid = str_replace(":", "", "$orderid");
		return $orderid;
	}
	
	public function index()
	{
		if(!$this->session->userdata('bs_cs_islogin'))
		   $this->load->view('login');
		  else
		   redirect('admin/dashboard');
	}

	public function dashboard()
	{	
		$this->is_login();
		$page_data['page'] = 'Dashboard';
		$this->load->view('templates/header',$page_data);
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}

	public function category()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
            $this->load->view('templates/header');
            $page_data['cats'] = $this->db->get('category')->result();
			$this->load->view('cat_list',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'create') {
            $this->load->view('templates/header');
			$this->load->view('create_cat');
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'edit') {
			$this->load->view('templates/header');
			$id = $_GET['id'];
			$page_data['sdata'] = $this->db->get_where('category',array('id'=>$id))->row();
			$this->load->view('edit_cat',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(
				'name'	=>	$input_data['cat_name']
			);
			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('category', array('id'=>$_GET['id']))->row()->icon;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('icon', $file);
				$img = $this->crud->upload_img('icon', 'file');
				$data['icon'] = $img;
			}
			$this->db->where('id',$_GET['id']);
			$this->db->update('category',$data);
			redirect('admin/category');
		}
		else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'name'	=>	$input_data['cat_name']
			);
			if($_FILES["file"]["error"] != 4) {
				$img = $this->crud->upload_img('icon', 'file');
				$data['icon'] = $img;
			}
			else {
				$data['icon'] = 'default.jpg';
			}
			$this->db->insert('category',$data);
			redirect('admin/category');

		}
		else if($_GET['a'] == 'delete') {
			$this->db->where('id',$_GET['id']);
			$this->db->delete('category');
			redirect('admin/category');
		}
		else {
			redirect('admin/not_found');
		}
	}


	public function sub_category()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
            $this->load->view('templates/header');
            $page_data['sub_cats'] = $this->db->get('sub_category')->result();
			$this->load->view('sub_cat_list',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'create') {
            $this->load->view('templates/header');
			$this->load->view('create_sub_cat');
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'edit') {
			$this->load->view('templates/header');
			$id = $_GET['id'];
			$page_data['sdata'] = $this->db->get_where('sub_category',array('id'=>$id))->row();
						
			$this->load->view('edit_sub_cat',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(
				'name'	=>	$input_data['sub_cat_name'],
				'cat_id'	=>	$input_data['cat_id']
			);
			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('sub_category', array('id'=>$_GET['id']))->row()->icon;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('icon', $file);
				$img = $this->crud->upload_img('icon', 'file');
				$data['icon'] = $img;
			}
			$this->db->where('id',$_GET['id']);
			$this->db->update('sub_category',$data);
			redirect('admin/sub_category');
		}
		else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'name'	=>	$input_data['sub_cat_name'],
				'cat_id'	=>	$input_data['cat_id']
			);
			if($_FILES["file"]["error"] != 4) {
				$img = $this->crud->upload_img('icon', 'file');
				$data['icon'] = $img;
			}
			else {
				$data['icon'] = 'default.jpg';
			}
			$this->db->insert('sub_category',$data);
			redirect('admin/sub_category');

		}
		else if($_GET['a'] == 'delete') {
			$this->db->where('id',$_GET['id']);
			$this->db->delete('sub_category');
			redirect('admin/sub_category');
		}
		else {
			redirect('admin/not_found');
		}
	}

	public function brands()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
            $this->load->view('templates/header');
            //$page_data['sessions'] = $this->crud->get_all_reverse('session');
            $page_data['brand_names'] = $this->db->get('brands')->result();
			$this->load->view('brand_list',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'add') {
            $this->load->view('templates/header');
			$this->load->view('add_brand');
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'edit') {
			$this->load->view('templates/header');
			$id = $_GET['id'];
			$page_data['sdata'] = $this->db->get_where('brands',array('id'=>$id))->row();
			$this->load->view('edit_brand',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(
				'name'	=>	$input_data['brand_name']
				
			);
			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('brands', array('id'=>$_GET['id']))->row()->logo;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('brand_logo', $file);
				$img = $this->crud->upload_img('brand_logo', 'file');
				$data['logo'] = $img;
			}
			$this->db->where('id',$_GET['id']);
			$this->db->update('brands',$data);
			redirect('admin/brands');
		}
		else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'name'	=>	$input_data['brand_name']				
			);
			if($_FILES["file"]["error"] != 4) {
				$img = $this->crud->upload_img('brand_logo', 'file');
				$data['logo'] = $img;
			}
			else {
				$data['logo'] = 'default.jpg';
			}
			$this->db->insert('brands',$data);
			redirect('admin/brands');

		}
		else if($_GET['a'] == 'delete') {
			$this->db->where('id',$_GET['id']);
			$this->db->delete('brands');
			redirect('admin/brands');
		}
		else {
			redirect('admin/not_found');
		}
	}

	public function system_setup()
	{

		if(!isset($_GET['a'])) {
            $this->load->view('templates/header');
            $page_data['system_values'] = $this->db->get('system_setup')->row();
			$this->load->view('system_setup',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(
				'shop_name'	=>	$input_data['shop_name'],
				'email'	=>	$input_data['email'],
				'mobile_no'	=>	$input_data['mobile_no'],
				'address'	=>	$input_data['address'],
				'owner'	=>	$input_data['owner']
			);
			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('system_setup', array('id'=>$_GET['id']))->row()->logo;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('site_logo', $file);
				$img = $this->crud->upload_img('site_logo', 'file');
				$data['logo'] = $img;
			}



			$this->db->where('id',$_GET['id']);
			$this->db->update('system_setup',$data);
			redirect('admin/system_setup');
		}	

	}

	public function get_subcat_by_cat() {
		$cat = $this->input->post('cat');
		$result = $this->db->get_where('sub_category',array('cat_id'=>$cat))->result();
		echo json_encode($result);
	}

	public function products()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
            $this->load->view('templates/header');
            $page_data['products'] = $this->db->get('product')->result();
            $page_data['brand'] = $this->crud->get_all('brands');
            $page_data['cat'] = $this->crud->get_all('category');
			$this->load->view('product_list',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'add') {
            $this->load->view('templates/header');
            $page_data['brand'] = $this->crud->get_all('brands');
            $page_data['cat'] = $this->crud->get_all('category');
			$this->load->view('add_product',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'edit') {
			$this->load->view('templates/header');

			$id = $_GET['id'];
			$page_data['sdata'] = $this->db->get_where('product',array('id'=>$id))->row();
			$page_data['cats'] = $this->crud->get_all('category');
			$this->load->view('edit_product',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'do_edit') {
			$input_data = $this->input->post();
			$data = array(
				'name'	=>	$input_data['name']
			);
			$this->crud->update_row('session',$_GET['id'], $data);
			redirect('bpi/session');
		}
		else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'product_title'	=>	$input_data['title'],
				'cat_id'	=>	$input_data['cat'],
				'brand_id'	=>	$input_data['brand'],
				'product_description'	=>	$input_data['description'],
				'price'	=>	$input_data['price'],
				'new_arrival'	=>	$input_data['new_arrival'],
				'offer'	=>	$input_data['offer']
			);
			if($input_data['offer'] == 'Discount') {
				$data['percentance'] = $input_data['discount_percentance'];
			}
			else if($input_data['offer'] == 'Free Product') {
				$data['free_product_name'] = $input_data['free_product'];
				$data['free_product_description'] = $input_data['free_product_des'];

				if($_FILES["free_pro_img"]["error"] != 4) {
					$img = $this->crud->upload_img('product_img', 'free_pro_img');
					$data['free_product_img'] = $img;
				}
				else {
					$data['free_product_img'] = 'default.jpg';
				}
			}
			if(isset($_POST['sub_cat']))
				$data['sub_cat_id'] = $input_data['sub_cat'];

			if($_FILES["file"]["error"] != 4) {
				$img = $this->crud->upload_img('product_img', 'file');
				$data['product_img'] = $img;
			}
			else {
				$data['product_img'] = 'default.jpg';
			}



			$this->crud->save_data('product',$data);
			redirect('admin/products');

		}
		else if($_GET['a'] == 'delete') {
			$this->crud->delete_row('session',$_GET['id']);
			//redirect('bpi/session');
		}
		else {
			redirect('admin/not_found');
		}
	}


	public function slider_images()
	{
		//$this->is_login();
		if(!isset($_GET['a'])) {
            $this->load->view('templates/header');
            $page_data['images'] = $this->db->get('slider_image')->result();
			$this->load->view('all_images',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'add') {
            $this->load->view('templates/header');
			$this->load->view('add_slider_image');
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'edit') {
			$this->load->view('templates/header');
			$id = $_GET['id'];
			$page_data['sdata'] = $this->crud->get_one('slider_image',$id);
			$this->load->view('edit_slider_image',$page_data);
			$this->load->view('templates/footer');
		}
		else if($_GET['a'] == 'update') {
			$input_data = $this->input->post();
			$data = array(
				'img_title'	=>	$input_data['img_title']
				
				
			);
			if($_FILES["file"]["error"] != 4) {
				$file = $this->db->get_where('slider_image', array('id'=>$_GET['id']))->row()->img_name;
				if($file != '' && $file != 'default.jpg')
					$this->crud->delete_file('slider_logo', $file);
				$img = $this->crud->upload_img('slider_logo', 'file');
				$data['img_name'] = $img;
			}
			$this->db->where('id',$_GET['id']);
			$this->db->update('slider_image',$data);
			redirect('admin/slider_images');
		}
		else if($_GET['a'] == 'save') {
			$input_data = $this->input->post();
			$data = array(
				'id' => $this->gen_uid(),
				'img_title'	=>	$input_data['img_title']
							
			);
			if($_FILES["file"]["error"] != 4) {
				$img = $this->crud->upload_img('slider_logo', 'file');
				$data['img_name'] = $img;
			}
			else {
				$data['img_name'] = 'default.jpg';
			}
			$this->db->insert('slider_image',$data);
			redirect('admin/slider_images');

		}
		else if($_GET['a'] == 'delete') {
			$this->db->where('id',$_GET['id']);
			$this->db->delete('slider_image');
			redirect('admin/slider_images');
		}
		else {
			redirect('admin/not_found');
		}
	}

	public function authenticate() {
		$input_data = $this->input->post();
		$authen = $this->db->get_where('user', array('email'=>$input_data['email'], 'password'=>md5($input_data['password'])));
	  	if($authen->num_rows() == 1) {
	   		$uid = $authen->row()->id;
	   		$sessdata = array(
	    		'bs_cs_islogin' => true,
	    		'bs_cs_uid' => $uid,
	    		'bs_cs_ue' => $input_data['email']
	   		);
	   		$this->session->set_userdata($sessdata);
	   		redirect('admin/dashboard');
	  	}
	  	else {
	   		$this->session->set_flashdata('err_msg','Wrong email or password!');
	   		redirect('admin/index');
	  	}
	}

	public function logout()
	{
		$this->session->sess_destroy();
  		redirect('admin/index');
	}

	public function is_login() {
	  	if(!$this->session->userdata('bs_cs_islogin'))
	   		redirect('admin/index');
	}


} // end of class admin