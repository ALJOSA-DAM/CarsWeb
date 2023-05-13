<?php
include "header1.php";
?>

<section>

    <div class="body">

        <h1>Añadir un nuevo usuario</h1>

        <form class="formulario" action="index2.php?action=anadirUsuario&controller=controller_usuario" method="post">
            <div class="form">
                <input type="text" name="nombre" placeholder="Nombre" class="form-input">
                <input type="text" name="apellidos" placeholder="Apellidos" class="form-input">
                <input type="text" name="dni" placeholder="DNI" class="form-input">
                <input type="date" name="fecha_nacimiento" placeholder="Fecha Nacimiento" class="form-input">
                <input type="submit" name="submit" value="Añadir Usuario" class="form-boton">
            </div>
        </form>

    </div>

</section>

<?php include "footer.php";
