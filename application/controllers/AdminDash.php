<?php
defined('BASEPATH') or exit('Sin permiso al script de acceso directo');

class AdminDash extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        /*var_dump($this->session);*/
        if (!isset($_SESSION['admin'])) {
            redirect(base_url() . 'admin-login');
        }

        $this->load->library(array('pagination'));
        $this->load->helper(array('form', 'url'));
        $this->load->model('AdminModel');
        $this->load->model('UserModel');
    }

    public function admin_log_session()
    {
        $this->load->view('admin/layouts/dash_header');
        $this->load->view('admin/layouts/dash_index');
        $this->load->view('admin/layouts/dash_footer');
    }

    //------------------------- Listado de Usuarios ----------------------\\

    public function list_users()
    {
        $data = array(
            'users' => $this->AdminModel->list_users(),
        );

        echo $this->AdminModel->count_users();
        $this->load->view('admin/layouts/dash_header');
        $this->load->view('admin/layouts/list_users_lay', $data);
        $this->load->view('admin/layouts/dash_footer');
    }

    public function list_users_select($id)
    {
        var_dump($id);
    }

    public function list_users_save()
    {
        $data = array(
            'nombre' => $this->input->post("name"),
            'apellido' => $this->input->post("last_name"),
            'correo' => $this->input->post("email"),
            'contrasena' => password_hash($this->input->post("password"), PASSWORD_BCRYPT),
            'usuario_id' => $this->input->post("user_id"),
            'fecha_registro' => date('Y-m-d')
        );
        $result = $this->AdminModel->list_users_save($data);
        if ($result['saved'] == true) {
            $this->session->set_flashdata('status', 'Usuario registrado exitosamente');
            redirect(base_url() . 'dashboard/list-users');
        } else {
            $this->session->set_flashdata('status', 'Ha ocurrido un error y no se pude registrar la informacion');
            redirect(base_url() . 'dashboard/list-users');
        }
    }

    /*public function list_users_save($id = null)
    {
        $this->AdminModel->list_users_save($_POST);
        if ($this->input->post() == true) {
            $this->session->set_flashdata('status', 'Usuario registrado exitosamente');
            redirect(base_url() . 'dashboard/list-users');
        }
    }*/

    public function list_users_edit()
    {
        $data = array(
            'nombre' => $this->input->post("name"),
            'apellido' => $this->input->post("last_name"),
            'correo' => $this->input->post("email"),
            'fecha_modif' => date('Y-m-d')
        );
        $result = $this->AdminModel->list_users_edit($this->input->post("id_user"), $data);
        if ($result > 0) {
            $this->session->set_flashdata('status', 'Los datos del usuario ha sido modificados con exito');
            redirect(base_url() . 'dashboard/list-users');
        } else {
            $this->session->set_flashdata('status', 'Ha ocurrido un error y no se pude registrar la informacion');
            redirect(base_url() . 'dashboard/list-users');
        }
    }

    /*public function list_users_edit()
    {
        $result = $this->AdminModel->list_users_edit($this->input->post("id_user"), $this->input->post());
        if ($result->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Los datos del usuario ha sido modificados con extio');
            redirect(base_url() . 'dashboard/list-users');
        }
    }*/

    public function list_users_delete()
    {
        $result = $this->AdminModel->list_users_delete($this->input->post("id_user"), $this->input->post());
        if ($result) {
            $this->session->set_flashdata('status', 'El suuario se ha eliminado de la base de datos');
            redirect(base_url() . 'dashboard/list-users');
        } else {
            $this->session->set_flashdata('status', 'Ha ocurrido un error y no se pude registrar la informacion');
            redirect(base_url() . 'dashboard/list-users');
        }
    }

    /*public function list_users_delete()
    {
        $result = $this->AdminModel->list_users_delete($this->input->post("id_user"), $this->input->post());
        if ($result) {
            $this->session->set_flashdata('status', 'El suuario se ha eliminado de la base de datos');
            redirect(base_url() . 'dashboard/list-users');
       }

    }*/
    
    //----------------------- Listado de Productos -----------------------\\

    public function list_products()
    {

        $data = array(
            'products' => $this->AdminModel->list_products(),
        );

        $this->load->view('admin/layouts/dash_header');
        $this->load->view('admin/layouts/list_products_lay', $data);
        $this->load->view('admin/layouts/dash_footer');
    }

    public function list_products_select($product_id)
    {
        var_dump($product_id);
    }

    public function list_products_save()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {

            $this->session->set_userdata('error_imagen', true);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $product = array(
                "categoria" => $this->input->post("category"),
                "nom_pdto" => $this->input->post("name"),
                "marca_pdto" => $this->input->post("brand"),
                "precio_pdto" => $this->input->post("price"),
                "desc_pdto" => $this->input->post("description"),
                "img_pdto" => $data['upload_data']['file_name']
            );
            $result = $this->AdminModel->list_products_save($product);
            if ($result['saved']){
                redirect(base_url() . 'dashboard/list-products');
            }else{
                $this->session->set_flashdata('status', 'Ha ocurrido un error y no se pudieron guardar los datos');
            redirect(base_url() . 'dashboard/list-products');
            }
        }
    }

    /*public function list_products_save()
    {

        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            //$error = array('error' => $this->upload->display_errors());
            //echo 'error';          
            $this->session->set_flashdata('status', 'Ha ocurrido un error, el articulo no se pudo agregar');
            redirect(base_url() . 'dashboard');
        } else {
            $result = $this->AdminModel->list_products_save($this->input->post(), $this->upload->data());
            if ($result) {
                $this->session->set_flashdata('status', 'Articulo agregado exitosamente');
                redirect(base_url() . 'dashboard/list-products');
            }
        }
    }*/

    public function list_products_edit()
    {
        $data = array(
            'categoria' => $this->input->post("category"),
            'marca_pdto' => $this->input->post("brand"),
            'nom_pdto' => $this->input->post("name"),
            'precio_pdto' => $this->input->post("price"),
            'desc_pdto' => $this->input->post("description"),
            'fecha_modif' => date('Y-m-d')
        );
        
        $result = $this->AdminModel->list_products_edit($this->input->post("id_pdto"), $data);
        if ($result > 0) {
            $this->session->set_flashdata('status', 'Los datos del articulo ha sido modificados con exito');
            redirect(base_url() . 'dashboard/list-products');
        } else {
            $this->session->set_flashdata('status', 'Ha ocurrido un error y no se pudieron modificar los datos');
            redirect(base_url() . 'dashboard/list-products');
        }
    }

    /*public function list_products_edit()
    {
        $result = $this->AdminModel->list_products_edit($this->input->post("id_pdto"), $this->input->post());
        if ($result->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'Informacion del articulo editada exitosamente');
            redirect(base_url() . 'dashboard/list-products');
        }
    }*/

    public function list_products_delete()
    {
        $result = $this->AdminModel->list_products_delete($this->input->post("id_pdto"), $this->input->post());
        if ($result) {
            $this->session->set_flashdata('status', 'El articulo se ha eliminado de la base de datos');
            redirect(base_url() . 'dashboard/list-products');
        } else {
            $this->session->set_flashdata('status', 'Ha ocurrido un error y no se pude registrar la informacion');
            redirect(base_url() . 'dashboard/list-products');
        }
    }

    /*public function list_products_delete()
    {
        $result = $this->AdminModel->list_products_delete($this->input->post("id_pdto"), $this->input->post());
        if ($result) {
            $this->session->set_flashdata('status', 'Articulo eliminado exitosamente');
            redirect(base_url() . 'dashboard/list-products');
        }
    }*/
    
    //----------------------- Listado de Productos -----------------------\\

    public function list_transactions()
    {
        $data = array(
            'transactions' => $this->AdminModel->list_transactions(),
        );

        $this->load->view('admin/layouts/dash_header');
        $this->load->view('admin/layouts/list_selled_lay', $data);
        $this->load->view('admin/layouts/dash_footer');
    }
}