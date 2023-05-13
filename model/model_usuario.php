<?php

require_once "controller/conexion.php";
//require_once "model_usuario.php";


class usuario{


    public $nombre;             //Título de la categoría

    public $apellidos;
    public $fecha_nacimiento;
    public $dni;


    public $conexion;           //Objeto que permite conectar con la bbdd

    //Constructor de la clase
    public function __construct($nombre, $apellidos, $fecha_nacimiento, $dni)
    {
        $this->conexion = new Conexion();
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->fecha_nacimiento = $fecha_nacimiento;


    }

    //Metodo que permite listar todas las oficinas
    public function mostrarUsuarios()
    {
        $this->conexion->conectar();
        $usuarios = $this->conexion->consultar("SELECT * FROM usuarios");

        $this->conexion->desconectar();
        return $usuarios;

    }

    //Metodo que permite crear las categorias
    public function crearUsuario()
    {
        $this->conexion->conectar();
        $this->conexion->ejecutar("INSERT INTO usuarios(nombre, apellidos, dni, fecha_nacimiento) VALUES ('$this->nombre', '$this->apellidos','$this->dni','$this->fecha_nacimiento')");
        $this->conexion->desconectar();
    }

    //Metodo que permite eliminar las categorias
    public function eliminarUsuario($id_usuario)
    {
        $this->conexion->conectar();
        $this->conexion->ejecutar("DELETE FROM usuarios WHERE id = '$id_usuario'");
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
