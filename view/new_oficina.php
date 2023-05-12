<?php
include "header1.php";
?>

<section>

    <div class="body">

        <h1>Añadir una nueva oficina al listado</h1>

        <form class="formulario" action="index2.php?action=anadirOficina&controller=controller_oficina" method="post">
            <div class="form">
                <input type="text" name="nombre" placeholder="nombre de la oficina" class="form-input">
                <input type="text" name="direccion" placeholder="Dirección de la oficina" class="form-input">
                <input type="text" name="email" placeholder="Email" class="form-input">
                <input type="text" name="telefono" placeholder="Teléfono de la oficina" class="form-input">
                <input type="text" name="num_trabajadores" placeholder="Trabajadores de la oficina" class="form-input">
                <input type="submit" name="submit" value="Añadir Oficina" class="form-boton">
            </div>
        </form>

    </div>

</section>

<?php include "footer.php";
