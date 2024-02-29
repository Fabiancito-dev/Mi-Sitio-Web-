<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class UserModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->library("mongodb");
        $this->user_db = $this->mongodb->db()->usuarios;
        $this->product_db = $this->mongodb->db()->productos;
        $this->cart_db = $this->mongodb->db()->carrito;
    }

    //---------------------------- Cuenta del Usuario ----------------------------\\

    function user_reg_save($user)
    {
        $result = $this->user_db->insertOne($user);
        if ($result->getInsertedCount() > 0) {
            return array(
                "saved" => true,
                "usuario_id" => $result->getInsertedId()
            );
        } else {
            return array("saved" => false);
        }
    }

    /*function user_reg_save()
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
    }*/

    public function user_verify($correo, $contrasena)
    {
        try {
            $result = $this->user_db->findOne(array(
                "email" => $correo
            ));
            return $result;
        } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }

    /*public function password_verify($correo)
    {
        $this->db->select("*");
        $this->db->from('usuarios');
        $this->db->where('correo', $correo);
        $result = $this->db->get();
        return $result->first_row();
    }*/

    //---------------------------- Productos ----------------------------\\

    public function listingProducts()
    {
        return $this->product_db->find(array());
    }

    /*public function listingProducts()
    {
       return $this->db->get('productos')->result();
    }*/

    //---------------------------- Carrito ----------------------------\\

    public function add_cart($product)
    {
        $result = $this->cart_db->insertOne($product);
        if ($result->getInsertedCount() > 0) {
            return array(
                "saved" => true,
                "_id" => $result->getInsertedId()
            );
        } else {
            return array("saved" => false);
        }
    }
    
    

    /*public function add_cart()
    {
        $data = array(
            'nombre' => $this->input->post("name"),
            'precio' => $this->input->post("price"),
            'imagen' => $this->input->post("image"),
            'id' => $this->input->post("id"),
        );
        return $this->db->insert("carrito", $data);
    }*/

    public function listingCart()
    {
        return $this->cart_db->find(array());
    }

    /*public function listingCart()
    {
        return $this->db->get('carrito')->result();
    }*/

    public function cartCount()
    {
        return $this->cart_db->find(array());
    }

    function cart_delete($id_pdto)
    {
        $result = $this->cart_db->findOneAndDelete(array(
            '_id' => $this->mongodb->getObjetId($id_pdto)
        ));
        return $result;
    }

    /*function cart_delete($id_pdto)
    {
        $result = $this->db->delete("carrito", array(
            'id' => $id_pdto
        ));
        return $result;
    }*/
}
