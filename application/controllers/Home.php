<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('UserModel');
	}

	public function index()
	{

		$data2 = array(
			'cart' => $this->UserModel->listingCart(),
			'cart_count' => $this->UserModel->cartCount(),
			'cart_amount' => $this->UserModel->cartCount()
		);

		$data = array(
			'products' => $this->UserModel->listingProducts(),
			'products2' => $this->UserModel->listingProducts(),
			'products3' => $this->UserModel->listingProducts(),
			'products4' => $this->UserModel->listingProducts(),
			'products5' => $this->UserModel->listingProducts()
		);

		if (!$this->session->user) {
			$this->load->view('user/layouts/index_header', $data2);
			$this->load->view('user/layouts/index', $data);
			$this->load->view('user/layouts/index_footer');
		}else{
			redirect(base_url() . 'user-login/user-log-session');
		}
	}

	
	public function all()
	{

		$data2 = array(
			'cart' => $this->UserModel->listingCart(),
			'cart_count' => $this->UserModel->cartCount(),
			'cart_amount' => $this->UserModel->cartCount()
		);

		$data = array(
			'products' => $this->UserModel->listingProducts(),
		);

		if (!$this->session->user) {
			$this->load->view('user/layouts/index_header', $data2);
			$this->load->view('user/layouts/all', $data);
			$this->load->view('user/layouts/index_footer');
		}else{
			redirect(base_url() . 'user-login/user-log-session');
		}
	}

}
