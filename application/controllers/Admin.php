<?php
defined('BASEPATH') or exit('Sin permiso al script de acceso directo');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');
    }

    /* -------- Funciones del Registro -------- */
    
    public function admin_registry()
    {
        $this->load->view('admin/admin_registry');
    }

    public function admin_reg_save()
    {
        $data = array(
            'nombre' => $this->input->post("name"),
            'apellido' => $this->input->post("last_name"),
            'correo' => $this->input->post("email"),
            'identificacion' => $this->input->post("cc"),
            'usuario' => $this->input->post("user"),
            'contrasena' => password_hash($this->input->post("password"), PASSWORD_BCRYPT),
            'fecha_reg' => date('Y-m-d')
        );
        $result = $this->AdminModel->admin_reg_save($data);
        if($result['saved'] == true){
            redirect(base_url() . 'admin-login');
        }else{
            redirect(base_url() . 'uadmin-registry');
        }
    }

    /*public function admin_reg_save()
    {
        $this->AdminModel->admin_reg_save($_POST);
        if ($this->input->post() == true) {
            redirect(base_url() . 'admin-login');
        }
    }*/
    /*------------------------------------------*/

    /* --------- Funciones del Login ---------- */
    
    public function admin_login()
    {
        $this->load->view('admin/admin_login');
    }

    public function admin_log_verify()
    {
        $result= $this->AdminModel->admin_verify(
            $this->input->post('user'),
            $this->input->post('password')
        );
        if ($result){
            $admin = array(
                'usuario' => $result->usuario,
            );
            $this->session->set_userdata('admin', $admin);
            redirect(base_url() . 'dashboard');            
        } else {
            $this->session->set_userdata('error', true);
            redirect(base_url() . 'admin-login');
        }
    }
      
    /*public function admin_log_verify()
    {
        $result = $this->AdminModel->password_verify($_POST['user']);
        if ($result->clave == $this->input->post('password')) {
            $this->session->set_userdata('admin', $result);
            redirect(base_url() . 'dashboard');
        } else {
            $this->session->set_userdata('error', true);
            redirect(base_url() . 'admin-login');
        }
    }*/

    public function admin_logout()
    {
        $this->session->unset_userdata('admin');
        redirect(base_url() . 'admin-login');
    }

    /*------------------------------------------*/
}
