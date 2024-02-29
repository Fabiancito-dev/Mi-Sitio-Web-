<?php
defined('BASEPATH') or exit('Sin permiso al script de acceso directo');

class UserSec extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!isset($_SESSION['user'])) {
            redirect(base_url() . 'user-login');
        }

        $this->load->model('UserModel');
    }

    public function user_log_session()
    {
        $data2 = array(
            'cart' => $this->UserModel->listingCart(),
            'cart_count' => $this->UserModel->cartCount(),
            'cart_amount' => $this->UserModel->cartCount(),
        );

        $data = array(
            'products' => $this->UserModel->listingProducts(),
            'products2' => $this->UserModel->listingProducts(),
            'products3' => $this->UserModel->listingProducts(),
            'products4' => $this->UserModel->listingProducts(),
            'products5' => $this->UserModel->listingProducts()
        );

        $this->load->view('user/layouts/index_header', $data2);
        $this->load->view('user/layouts/index', $data);
        $this->load->view('user/layouts/index_footer');
    }
}
