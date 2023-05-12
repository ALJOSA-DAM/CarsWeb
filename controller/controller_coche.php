<?php
//require "sesion.php";

function listarCoches(){
    //iniciarSesion();
    require_once "model/model_coche.php";


    $coche1 = new coche(null, null, null);
    $coches = $coche1->mostrarCoches();
    include "view/index_coche.php";

}

/*function listarCategoriaAddTema()
{
    iniciarSesion();
    require_once "model/model_oficina.php";


    $categoria1 = new categorie(null);
    $categorias = $categoria1->mostrarCategorias();
    include "view/index_oficina.php";

}*/

function eliminarCocheController(){
    //iniciarSesion();
    require "model/model_coche.php";
   // require_once "model/model_usuario.php";
    include "view/index_coche.php";


    //$usuario = new usuario(null, null, null);
    $coche1 = new coche(null, null,null);


    if (isset($_GET['id_coche'])) {
//            if ($_SESSION['u_level'] == 0) {
                $id_coche = $_GET['id_coche'];
                $coche1->eliminarCoche($id_coche);
                echo '<script>alert("Coche Eliminado");window.location.href="index2.php?action=listarCoches&controller=controller_coche"</script>';
//                header("Location:view/index_topic.php");
            } /*else {

                echo '<script>alert("Solo puede borrar el tema si se registra como administrador");
                        window.location.href="index2.php?action=listarCategorias&controller=controller_categorie"</script>';

            }*/


}

function iniciarSesion(){
    require "sesion.php";
    $sesion = new Sesion();


}

function formularioAnadirCoche(){
    //iniciarSesion();
    require "view/new_coche.php";
}

function anadirCoche() {
    //iniciarSesion();
    require_once "model/model_coche.php";
    require_once "model/model_usuario.php";

    //if (isset($_SESSION['user'])) {                                //Comprueba que la sesion este iniciada
        if (isset($_POST['submit']) && !empty($_POST['matricula'])) {   ////Comprueba que hay texto en el titulo y que se ha pulsado el boton de submit
            //$usuario = new usuario(null, null, null);
            //$id_usuario = $usuario->getId($_SESSION['user']);
            $coche = new coche($_POST['marca'], $_POST['matricula'], $_POST['disponible']);
            $coche->crearCoche();
            echo '<script>alert("Coche creado");window.location.href="index2.php?action=listarCoches&controller=controller_coche"</script>';
            //header("Location:index2.php");
        } else {
            echo '<script>alert("Debes indicar la matrícula del coche");window.location.href="index2.php?action=formularioAnadirCoche&controller=controller_coche"</script>';
        }


}

function formularioModificarOficina(){
    iniciarSesion();
    require "view/mod_categorie.php";
}

function modificarOficinaController(){
    iniciarSesion();
    require "model/model_oficina.php";
    require_once "model/model_usuario.php";
//    require "view/index_oficina.php";



    $usuario = new usuario(null, null, null);
    $categoria1 = new coche(null, null);

    if (isset($_GET['id_categoria'])) {
        if ($_SESSION['u_level'] == 0) {
            $id_categoria = $_GET['id_categoria'];
            $cat_name = $_POST['cat_name']; // Obtener el valor del título de la categoría modificado
            $categoria1->modificarCategoria($id_categoria, $cat_name);
            echo '<script>alert("Categoría modificada");window.location.href="index2.php?action=listarCategorias&controller=controller_categorie"</script>';
//                header("Location:view/index_topic.php");
        } /*else {

                echo '<script>alert("Solo puede borrar el tema si se registra como administrador");
                        window.location.href="index2.php?action=listarCategorias&controller=controller_categorie"</script>';

            }*/

    }

}




