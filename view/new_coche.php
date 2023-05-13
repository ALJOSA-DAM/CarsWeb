<?php
include "header1.php";
?>

<section>

    <div class="body">

        <h1>Añadir un coche al listado</h1>

        <form class="formulario" action="index2.php?action=anadirCoche&controller=controller_coche" method="post">
            <div class="form">
                <input type="text" name="marca" placeholder="Marca del coche" class="form-input">
                <input type="text" name="modelo" placeholder="Modelo" class="form-input">
                <input type="text" name="matricula" placeholder="Matrícula" class="form-input">
                <label>
                    <input type="checkbox" name="disponible" value="1">Disponible
                </label>

                <input type="submit" name="submit" value="Añadir Coche" class="form-boton">
            </div>
        </form>

    </div>

</section>

<?php include "footer.php";
