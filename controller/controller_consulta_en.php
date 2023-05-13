<?php


function mostrarFormContacto()
{

    require "view/user_contacto_en.php";
}
$name = '';
$message = '';
function contact()
{
    require_once "model/model_consulta.php";

    //Con esto evito que me lance un warning cuando el formulario aún no tiene datos.
    if (isset($_POST['submit'])) {

        $consulta = new consulta($_POST['user'], $_POST['email'], $_POST['descripcion']);
        $name = $_POST['user'];
        $email =$_POST['email'];
        //Comprobamos que los campos no estén vacíos
        if ($_POST['user'] == '' || $_POST['email'] == '') {
            echo '<script>alert("You must fill in all fields");window.location.href="index2_en.php?action=mostrarFormContacto&controller=controller_consulta_en"</script>';

        }
        //Comprobamos que la dirección de correo sea valida
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo '<script>alert("Enter a valid e-mail format");window.location.href="index2_en.php?action=mostrarFormContacto&controller=controller_consulta_en"</script>';
        } else {

            $consulta->enviar($consulta);
            echo '<script>alert("Su consulta se ha enviado correctamente.");window.location.href="index2.php"</script>';

        }
    }

}



