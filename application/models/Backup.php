<?php
defined('BASEPATH') or exit('Sin permiso al script de acceso directo');

class AdminModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->library("mongodb");
        $this->db = $this->mongodb->db()->usuario;
    } 

    //=======================================================================================\\
    //------------------------------- Cuenta del Administrador ------------------------------\\
    //=======================================================================================\\

    function Admin_reg_save()
    {
        $data = array(
            'nombre' => $this->input->post("full_name"),
            'correo' => $this->input->post("email"),
            'identificacion' => $this->input->post("cc"),
            'usuario' => $this->input->post("user"),
            'clave' => $this->input->post("password"),
            'fecha_reg' => date('Y-m-d')
        );
        return $this->db->insert("admin", $data);
    }

    public function password_verify($usuario)
    {
        $this->db->select("*");
        $this->db->from('admin');
        $this->db->where('usuario', $usuario);
        $result = $this->db->get();
        return $result->first_row();
    }

    //=======================================================================================\\
    //--------------------------------------- MongoDB ---------------------------------------\\
    //=======================================================================================\\


    
    //=======================================================================================\\
    //------------------------------ Actividades del Dashboard ------------------------------\\
    //=======================================================================================\\

    //------------------------ PRODUCTOS------------------------\\

    public function list_products()
    {
        return $this->db->get("productos")->result();
    }

    function list_products_save($post, $image)
    {

        $product = array(
            "categoria" => $post["category"],
            "nom_pdto" => $post["name"],
            "marca_pdto" => $post["brand"],
            "precio_pdto" => $post["price"],
            "desc_pdto" => $post["description"],
            "img_pdto" => $image['file_name']
        );
        return $this->db->insert("productos", $product);
        
    }

    function list_products_edit($id_pdto, $post)
    {
        
        $product = array(
            "categoria" => $post["category"],
            "nom_pdto" => $post["name"],
            "marca_pdto" => $post["brand"],
            "precio_pdto" => $post["price"],
            "desc_pdto" => $post["description"]
        );
        $result = $this->db->where('id', $id_pdto);
        $this->db->update('productos', $product);
        return $result;

    }

    function list_products_delete($id_pdto)
    {

        $result = $this->db->delete("productos", array(
            'id' => $id_pdto
        ));
        return $result;

    }
    
    public function getPaginate($limit, $offset)
    {
        $sql = $this->db->get('productos', $limit, $offset);
        return $sql->result();
    }

    //-------------------------- USUARIOS --------------------------\\

    public function list_users()
    {
        return $this->db->get("usuarios")->result();
    }

    function list_users_save()
    {
        $data = array(
            'nombre' => $this->input->post("name"),
            'apellido' => $this->input->post("last_name"),
            'correo' => $this->input->post("email"),
            'contrasena' => $this->input->post("password"),
            'usuario_id' => $this->input->post("user_id"),
            'fecha_registro' => date('Y-m-d')
        );
        return $this->db->insert("usuarios", $data);
    }

    function list_users_edit($id_user, $post)
    {
        
        $user = array(
            "nombre" => $post["name"],
            "apellido" => $post["last_name"],
            "correo" => $post["email"]
        );
        $result = $this->db->where('id', $id_user);
        $this->db->update('usuarios', $user);
        return $result;

    }

    function list_users_delete($id_user)
    {

        $result = $this->db->delete("usuarios", array(
            'id' => $id_user
        ));
        return $result;

    }
}
