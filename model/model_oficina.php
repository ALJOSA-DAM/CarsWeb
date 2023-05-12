<?php

require_once "controller/conexion.php";
//require_once "model_usuario.php";


class oficina{


    public $nombre;             //Título de la categoría

    public $direccion;
    public $telefono;
    public $num_trabajadores;
    public $email;

    public $conexion;           //Objeto que permite conectar con la bbdd

    //Constructor de la clase
    public function __construct($nombre, $direccion, $email, $telefono, $num_trabajadores)
    {
        $this->conexion = new Conexion();
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->num_trabajadores = $num_trabajadores;

    }

    //Metodo que permite listar todas las oficinas
    public function mostrarOficinas()
    {
        $this->conexion->conectar();
        $oficinas = $this->conexion->consultar("SELECT * FROM oficina");

        $this->conexion->desconectar();
        return $oficinas;

    }

    //Metodo que permite crear las categorias
    public function crearOficina()
    {
        $this->conexion->conectar();
        $this->conexion->ejecutar("INSERT INTO oficina(nombre, direccion, email, telefono, num_trabajadores) VALUES ('$this->nombre', '$this->direccion','$this->email','$this->telefono','$this->num_trabajadores')");
        $this->conexion->desconectar();
    }

    //Metodo que permite eliminar las categorias
    public function eliminarOficina($id_oficina)
    {
        $this->conexion->conectar();
        $this->conexion->ejecutar("DELETE FROM oficina WHERE id = '$id_oficina'");
        $this->conexion->desconectar();
    }

    public function modificarCategoria($categoria, $catName)
    {
        $this->conexion->conectar();
        $this->conexion->ejecutar("UPDATE categories SET cat_name = '$catName' WHERE cat_id = '$categoria'");
        $this->conexion->desconectar();
    }


    public function getCatById($id_cat)
    {
        $this->conexion->conectar();
        $categoria = $this->conexion->consultar("SELECT cat_name FROM categories WHERE cat_id = '$id_cat'");
        if (count($categoria)) {
            $categoria[0] ['cat_name'];
        }
        $this->conexion->desconectar();
        return $categoria[0] ['cat_name'];
    }
}
