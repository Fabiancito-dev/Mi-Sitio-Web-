<?php
defined('BASEPATH') or exit('Sin permiso al script de acceso directo');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');
        $this->load->model('UserModel');
    }

    /* -------- Funciones del Registro -------- */

    public function user_registry()
    {
        $this->load->view('user/user_registry');
    }

    public function user_reg_save()
    {
        $data = array(
            'nombre' => $this->input->post("name"),
            'apellido' => $this->input->post("last_name"),
            'correo' => $this->input->post("email"),
            'contrasena' => password_hash($this->input->post("password"), PASSWORD_BCRYPT),
            'usuario_id' => $this->input->post("user_id"),
            'fecha_registro' => date('Y-m-d')
        );
        $result = $this->UserModel->user_reg_save($data);
        if ($result['saved'] == true) {
            redirect(base_url() . 'user-login');
        } else {
            redirect(base_url() . 'user-registry');
        }
    }

    /*public function user_reg_save()
    {
        $this->UserModel->user_reg_save($_POST);
        if ($this->input->post() == true) {
            redirect(base_url() . 'user-login');
        }
    }*/

    /*------------------------------------------*/

    /* --------- Funciones del Login ---------- */

    public function user_login()
    {
        $this->load->view('user/user_login');
    }

    public function user_find()
    {
        $this->load->view('user/user_login');
    }

    public function user_log_verify()
    {
        $result = $this->UserModel->user_verify(
            $this->input->post("correo"),
            $this->input->post("contrasena"),
            $this->input->post("nombre")
        );
        if ($result) {
            $user = array(
                'nombre' => $result->nombre
            );
            $this->session->set_userdata('user', $user);
            redirect(base_url() . 'user-login/user-log-session');
        } else {
            $this->session->set_userdata('error', true);
            redirect(base_url() . 'user-login');
        }
    }

    /*public function user_log_verify()
    {
        $result = $this->UserModel->password_verify($_POST['email']);
        if ($result->contrasena == $this->input->post('password')) {
            $this->session->set_userdata('user', $result);
            redirect(base_url() . 'user-login/user-log-session');
        } else {
            $this->session->set_userdata('error', true);
            redirect(base_url() . 'user-login');
        }
    }*/

    public function user_logout()
    {
        $this->session->unset_userdata('user');
        $url = $_SERVER['HTTP_REFERER'];
        redirect($url);
    }

    /*------------------------------------------*/

    /*---------- Funciones del carro de compras -----------*/

    public function add_cart()
    {
        $data = array(
            "categoria" => $this->input->post("category"),
            "nom_pdto" => $this->input->post("name"),
            "marca_pdto" => $this->input->post("brand"),
            "precio_pdto" => $this->input->post("price"),
            "desc_pdto" => $this->input->post("description"),
            "img_pdto" => $this->input->post("image"),
            "cantidad" => $this->input->post("image")
        );
        $result = $this->UserModel->add_cart($data);
        if ($result['saved'] == true) {
            if (!$this->session->user) {
                $this->session->set_flashdata('status', 'El articulo se ha añadido exitosamente al carrito');
                $url = $_SERVER['HTTP_REFERER'];
                redirect($url);
            } else {
                $this->session->set_flashdata('status', 'El articulo se ha añadido exitosamente al carrito');
                $url = $_SERVER['HTTP_REFERER'];
                redirect($url);
            }
        } else {
            $this->session->set_flashdata('status', 'Ha ocurrido un error y no se pudo agregar el articulo al carrito');
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
        }
    }


    /*public function add_cart()
    {
        $this->UserModel->add_cart($_POST);
        if (!$this->session->user) {
                redirect(base_url() . 'index');
            } else {
                redirect(base_url() . 'user-login/user-log-session');
            }
    }*/

    public function cart()
    {
        $data = array(
            'cart' => $this->UserModel->listingCart(),
            'cart_count' => $this->UserModel->cartCount(),
            'cart_view' => $this->UserModel->cartCount(),
            'cart_checking' => $this->UserModel->cartCount(),
            'cart_amount' => $this->UserModel->cartCount()
        );

        $this->load->view('user/layouts/index_header', $data);
        $this->load->view('testing', $data);
        $this->load->view('user/layouts/index_footer');
    }

    /*public function cart()
    {
        $data = array(
            'products' => $this->UserModel->listingProducts(),
        );

        $data2 = array(
            'cart' => $this->UserModel->listingCart(),
        );
            $this->load->view('user/layouts/index_header', $data2);
            $this->load->view('user/cart');
            $this->load->view('user/layouts/index_footer');     
    }*/

    public function cart_delete()
    {
        $result = $this->UserModel->cart_delete($this->input->post("id_pdto"), $this->input->post());
        if ($result) {
            $this->session->set_flashdata('status', 'Articulo eliminado del carro de compras exitosamente');
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
        } else {
            $this->session->set_flashdata('status', 'Ha ocurrido un error y no se pudo eliminar el articulo del carro de compras');
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
        }
    }

    /*public function cart_delete()
    {

        $result = $this->UserModel->cart_delete($this->input->post("id_pdto"), $this->input->post());
        if ($result) {
            $this->session->set_flashdata('status', 'Articulo eliminado exitosamente');
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
        }
    }*/

    public function add_payment()
    {
        $data2 = array(
            'cart' => $this->UserModel->listingCart(),
        );
		
		$this->load->view('user/layouts/index_header', $data2);
		$this->load->view("user/add_payment");
		$this->load->view('user/layouts/index_footer');
        
    }

    public function add_adress()
    {
        $this->load->view('user/layouts/index_header_pago');
        $this->load->view("user/add_adress");
        $this->load->view('user/layouts/index_footer');
    } 
    
    
}
