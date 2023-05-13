<?php
include "header1_en.php";
?>

<section>

    <div class="body">

        <h1>Add a car to the list</h1>

        <form class="formulario" action="index2_en.php?action=anadirCoche&controller=controller_coche_en" method="post">
            <div class="form">
                <input type="text" name="marca" placeholder="Brand of  the car" class="form-input">
                <input type="text" name="modelo" placeholder="Model" class="form-input">
                <input type="text" name="matricula" placeholder="License Plate" class="form-input">
                <label>
                    <input type="checkbox" name="disponible" value="1">Available
                </label>

                <input type="submit" name="submit" value="Añadir Coche" class="form-boton">
            </div>
        </form>

    </div>

</section>

<?php include "footer.php";
