<?php

use MongoDB\Operation\DeleteOne;

defined('BASEPATH') or exit('Sin permiso al script de acceso directo');

class AdminModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->library("mongodb");
        $this->admin_db = $this->mongodb->db()->administradores;
        $this->user_db = $this->mongodb->db()->usuarios;
        $this->product_db = $this->mongodb->db()->productos;
        //$this->transaction_db = $this->mongodb->db()->transacciones;//
    }

    //=======================================================================================\\
    //------------------------------- Cuenta del Administrador ------------------------------\\
    //=======================================================================================\\

    function admin_reg_save($admin)
    {
        $result = $this->admin_db->insertOne($admin);
        if ($result->getInsertedCount() > 0) {
            return array(
                "saved" => true,
                "admin_id" => $result->getInsertedId()
            );
        } else {
            return array("saved" => false);
        }
    }

    /*function Admin_reg_save()
    {
        $data = array(
            'nombre' => $this->input->post("full_name"),
            'correo' => $this->input->post("email"),
            'identificacion' => $this->input->post("cc"),
            'usuario' => $this->input->post("user"),
            'clave' => $this->input->post("password"),
            'fecha_reg' => date('Y-m-d')
        );
        return $this->db->insertMany("admin", $data);
    }*/

    public function admin_verify($usuario, $contrasena)
    {
        try {
            $result = $this->admin_db->findOne(array(
                "usuario" => $usuario,
            ));
            return $result;
        }
         catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }

    /*public function password_verify($usuario)
    {
        $this->db->select("*");
        $this->db->from('admin');
        $this->db->where('usuario', $usuario);
        $result = $this->db->get();
        return $result->first_row();
    }*/

    //=======================================================================================\\
    //------------------------------ Actividades del Dashboard ------------------------------\\
    //=======================================================================================\\

    //------------------------ PRODUCTOS------------------------\\

    public function list_products()
    {
        return $this->product_db->find(array());
    }

    /*public function list_products()
    {
        return $this->db->get("productos")->result();
    }*/

    function list_products_save($product)
    {
        $result = $this->product_db->insertOne($product);
        if ($result->getInsertedCount() > 0) {
            return array(
                "saved" => true,
                "_id" => $result->getInsertedId()
            );
        } else {
            return array("saved" => false);
        }
    }

    /*function list_products_save($post, $image)
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
    }*/

    function list_products_edit($id_pdto, $post)
    {
        $result = $this->product_db->updateOne(
            array(
                '_id' => $this->mongodb->getObjetId($id_pdto)
            ),
            array('$set' => $post)
        );
        return $result->getModifiedCount();
    }

    /*function list_products_edit($id_pdto, $post)
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
    }*/

    function list_products_delete($id_pdto)
    {
        $result = $this->product_db->findOneAndDelete(array(
            '_id' => $this->mongodb->getObjetId($id_pdto)
        ));
        return $result;
    }

    /*function list_products_delete($id_pdto)
    {

        $result = $this->db->delete("productos", array(
            'id' => $id_pdto
        ));
        return $result;
    }*/

    public function getPaginate($limit, $offset)
    {
        $sql = $this->db->get('productos', $limit, $offset);
        return $sql->result();
    }

    //-------------------------- USUARIOS --------------------------\\

    public function list_users()
    {
        return $this->user_db->find(array());
    }

    /*public function list_users()
    {
        return $this->db->get("usuarios")->result();
    }*/

    public function count_users()
    {
        return $this->user_db->countDocuments(array());
    }

    public function pagination_users()
    {
        return $this->user_db->countDocuments(array());
    }

    function list_users_save($user)
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

    /*function list_users_save()
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

    function list_users_edit($id_user, $post)
    {
        $result = $this->user_db->updateOne(
            array(
                '_id' => $this->mongodb->getObjetId($id_user)
            ),
            array('$set' => $post)
        );
        return $result->getModifiedCount();
    }

    /*function list_users_edit($id_user, $post)
    {
        $user = array(
            "nombre" => $post["name"],
            "apellido" => $post["last_name"],
            "correo" => $post["email"]
        );
        $result = $this->db->where('id', $id_user);
        $this->db->update('usuarios', $user);
        return $result;
    }*/

    function list_users_delete($id_user)
    {
        $result = $this->user_db->findOneAndDelete(array(
            '_id' => $this->mongodb->getObjetId($id_user)
        ));
        return $result;
    }

    /*function list_users_delete($id_user)
    {
        $result = $this->db->delete("usuarios", array(
            'id' => $id_user
        ));
        return $result;
    }*/

    //-------------------------- USUARIOS --------------------------\\

    public function list_transactions()
    {
        return $this->transaction_db->find(array());
    }

}
