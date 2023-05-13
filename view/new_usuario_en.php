<?php
include "header1_en.php";
?>

<section>

    <div class="body">

        <h1>Add a new user</h1>

        <form class="formulario" action="index2_en.php?action=anadirUsuario&controller=controller_usuario_en" method="post">
            <div class="form">
                <input type="text" name="nombre" placeholder="Name" class="form-input">
                <input type="text" name="apellidos" placeholder="Last Name" class="form-input">
                <input type="text" name="dni" placeholder="DNI" class="form-input">
                <input type="date" name="fecha_nacimiento" placeholder="Birth Date" class="form-input">
                <input type="submit" name="submit" value="Add User" class="form-boton">
            </div>
        </form>

    </div>

</section>

<?php include "footer.php";
