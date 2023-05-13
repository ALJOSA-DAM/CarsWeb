<?php

require_once "controller/conexion.php";
//require_once "model_usuario.php";


class coche{


    public $marca;             //Título de la categoría

    public $matricula;
    public $modelo;
    public $disponible;
//    public $num_trabajadores;
//    public $email;

    public $conexion;           //Objeto que permite conectar con la bbdd

    //Constructor de la clase
    public function __construct($marca, $modelo, $matricula, $disponible)
    {
        $this->conexion = new Conexion();
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->matricula = $matricula;
        $this->disponible = $disponible;
//        $this->disponible = $telefono;
//        $this->num_trabajadores = $num_trabajadores;

    }

    //Metodo que permite listar todas las oficinas
    public function mostrarCoches()
    {
        $this->conexion->conectar();
        $coches = $this->conexion->consultar("SELECT * FROM coches");

        $this->conexion->desconectar();
        return $coches;

    }

    //Metodo que permite crear las categorias
    public function crearCoche()
    {
        $this->conexion->conectar();
        $this->conexion->ejecutar("INSERT INTO coches(marca, modelo, matricula, disponible) VALUES ('$this->marca', '$this->modelo', '$this->matricula', '$this->disponible')");
        $this->conexion->desconectar();
    }

    //Metodo que permite eliminar las categorias
    public function eliminarCoche($id_coche)
    {
        $this->conexion->conectar();
        $this->conexion->ejecutar("DELETE FROM coches WHERE id = '$id_coche'");
        $this->conexion->desconectar();
    }

    public function modificarCoche($categoria, $catName)
    {
        $this->conexion->conectar();
        $this->conexion->ejecutar("UPDATE coches SET cat_name = '$catName' WHERE cat_id = '$categoria'");
        $this->conexion->desconectar();
    }


    public function getCatById($id_cat)
    {
        $this->conexion->conectar();
        $categoria = $this->conexion->consultar("SELECT cat_name FROM coches WHERE cat_id = '$id_cat'");
        if (count($categoria)) {
            $categoria[0] ['cat_name'];
        }
        $this->conexion->desconectar();
        return $categoria[0] ['cat_name'];
    }
}
