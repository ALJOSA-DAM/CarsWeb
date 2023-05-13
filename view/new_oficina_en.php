<?php
include "header1_en.php";
?>

<section>

    <div class="body">

        <h1>Add a new office to the list</h1>

        <form class="formulario" action="index2_en.php?action=anadirOficina&controller=controller_oficina_en" method="post">
            <div class="form">
                <input type="text" name="nombre" placeholder="Office name" class="form-input">
                <input type="text" name="direccion" placeholder="Office address" class="form-input">
                <input type="text" name="email" placeholder="Email" class="form-input">
                <input type="text" name="telefono" placeholder="Office Phone" class="form-input">
                <input type="text" name="num_trabajadores" placeholder="Office workers" class="form-input">
                <input type="submit" name="submit" value="Add Office" class="form-boton">
            </div>
        </form>

    </div>

</section>

<?php include "footer.php";
