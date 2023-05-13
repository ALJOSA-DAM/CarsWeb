<?php
//require "sesion.php";

function listarUsuarios(){
    //iniciarSesion();
    require_once "model/model_usuario.php";


    $usuario1 = new usuario(null, null, null,null,null);
    $usuarios = $usuario1->mostrarUsuarios();
    include "view/index_usuario.php";

}

/*function listarCategoriaAddTema()
{
    iniciarSesion();
    require_once "model/model_oficina.php";


    $categoria1 = new categorie(null);
    $categorias = $categoria1->mostrarCategorias();
    include "view/index_oficina.php";

}*/

function eliminarUsuarioController(){
    //iniciarSesion();
    require "model/model_usuario.php";
    //require_once "model/model_usuario.php";
    include "view/index_usuario.php";


    //$usuario = new usuario(null, null, null);
    $usuario1 = new usuario(null, null, null, null, null);

    if (isset($_GET['id_usuario'])) {
            //if ($_SESSION['u_level'] == 0) {
                $id_usuario = $_GET['id_usuario'];
                $usuario1->eliminarUsuario($id_usuario);
                echo '<script>alert("Usuario Eliminado");window.location.href="index2.php?action=listarUsuarios&controller=controller_usuario"</script>';
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

function formularioAnadirUsuario(){
   // iniciarSesion();
    require "view/new_usuario.php";
}

function anadirUsuario() {
   // iniciarSesion();
    require_once "model/model_usuario.php";


  //  if (isset($_SESSION['user'])) {                                //Comprueba que la sesion este iniciada
        if (isset($_POST['submit']) && !empty($_POST['nombre'])) {   ////Comprueba que hay texto en el titulo y que se ha pulsado el boton de submit
            //$usuario = new usuario(null, null, null);
            //$id_usuario = $usuario->getId($_SESSION['user']);
            $usuario = new usuario ($_POST['nombre'], $_POST['apellidos'], $_POST['fecha_nacimiento'], $_POST['dni']);
            $usuario->crearUsuario();
            echo '<script>alert("Usuario creada");window.location.href="index2.php?action=listarUsuarios&controller=controller_usuario"</script>';
            //header("Location:index2.php");
        } else {
            echo '<script>alert("Debes poner un nombre");window.location.href="index2.php?action=formularioAnadirUsuario&controller=controller_usuario"</script>';
        }


}

function formularioModificarOficina(){
    //iniciarSesion();
    require "view/mod_categorie.php";
}

function modificarOficinaController(){
    //iniciarSesion();
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




