<?php
//require "sesion.php";

function listarOficinas(){
    //iniciarSesion();
    require_once "model/model_oficina.php";


    $oficina1 = new oficina(null, null, null,null,null);
    $oficinas = $oficina1->mostrarOficinas();
    include "view/index_oficina.php";

}

/*function listarCategoriaAddTema()
{
    iniciarSesion();
    require_once "model/model_oficina.php";


    $categoria1 = new categorie(null);
    $categorias = $categoria1->mostrarCategorias();
    include "view/index_oficina.php";

}*/

function eliminarOficinaController(){
    //iniciarSesion();
    require "model/model_oficina.php";
    //require_once "model/model_usuario.php";
    include "view/index_oficina.php";


    //$usuario = new usuario(null, null, null);
    $oficina1 = new oficina(null, null, null, null, null);

    if (isset($_GET['id_oficina'])) {
            //if ($_SESSION['u_level'] == 0) {
                $id_oficina = $_GET['id_oficina'];
                $oficina1->eliminarOficina($id_oficina);
                echo '<script>alert("Oficina Eliminada");window.location.href="index2.php?action=listarOficinas&controller=controller_oficina"</script>';
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

function formularioAnadirOficina(){
   // iniciarSesion();
    require "view/new_oficina.php";
}

function anadirOficina() {
   // iniciarSesion();
    require_once "model/model_oficina.php";
    require_once "model/model_usuario.php";

  //  if (isset($_SESSION['user'])) {                                //Comprueba que la sesion este iniciada
        if (isset($_POST['submit']) && !empty($_POST['nombre'])) {   ////Comprueba que hay texto en el titulo y que se ha pulsado el boton de submit
            //$usuario = new usuario(null, null, null);
            //$id_usuario = $usuario->getId($_SESSION['user']);
            $oficina = new oficina ($_POST['nombre'], $_POST['direccion'], $_POST['email'], $_POST['telefono'], $_POST['num_trabajadores']);
            $oficina->crearOficina();
            echo '<script>alert("Oficina creada");window.location.href="index2.php?action=listarOficinas&controller=controller_oficina"</script>';
            //header("Location:index2.php");
        } else {
            echo '<script>alert("Debes ponerle un nombre a la oficina");window.location.href="index2.php?action=formularioAnadirOficina&controller=controller_oficina"</script>';
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




