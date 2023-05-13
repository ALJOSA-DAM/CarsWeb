<?php
//require "sesion.php";

function listarCoches(){
    //iniciarSesion();
    require_once "model/model_coche.php";


    $coche1 = new coche(null, null, null, null);
    $coches = $coche1->mostrarCoches();
    include "view/index_coche_en.php";

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
    include "view/index_coche_en.php";


    //$usuario = new usuario(null, null, null);
    $coche1 = new coche(null, null, null,null);


    if (isset($_GET['id_coche'])) {
//            if ($_SESSION['u_level'] == 0) {
                $id_coche = $_GET['id_coche'];
                $coche1->eliminarCoche($id_coche);
                echo '<script>alert("Car Deleted");window.location.href="index2_en.php?action=listarCoches&controller=controller_coche_en"</script>';
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
    require "view/new_coche_en.php";
}

function anadirCoche() {
    //iniciarSesion();
    require_once "model/model_coche.php";

    //if (isset($_SESSION['user'])) {                                //Comprueba que la sesion este iniciada
        if (isset($_POST['submit']) && !empty($_POST['matricula'])) {   ////Comprueba que hay texto en el titulo y que se ha pulsado el boton de submit
            //$usuario = new usuario(null, null, null);
            //$id_usuario = $usuario->getId($_SESSION['user']);
            $coche = new coche($_POST['marca'], $_POST['modelo'], $_POST['matricula'], $_POST['disponible']);
            $coche->crearCoche();
            echo '<script>alert("Car Created");window.location.href="index2_en.php?action=listarCoches&controller=controller_coche_en"</script>';
            //header("Location:index2.php");
        } else {
            echo '<script>alert("You must indicate the car license plate number");window.location.href="index2_en.php?action=formularioAnadirCoche&controller=controller_coche_en"</script>';
        }


}






