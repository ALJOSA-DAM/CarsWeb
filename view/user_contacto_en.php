<?php include "header1_en.php"; ?>

<!--Página que muestra un formulario para contactar con el CAU del Foro-->
<section></section>
    <div class="body">

            <h1>Contact</h1>

            <div class="formulario">
                    <form action="index2_en.php?action=contact&controller=controller_consulta_en" method="post">
                    <div class="form">
                        <input type="text" name="user" placeholder="Name" class="form-input"><br/>
<!--                        <input type="password" name="password" placeholder="Contraseña" class="form-input"><br/>-->
                        <input type="text" name="email" placeholder="Email" class="form-input"><br/>
                        <input type="text" name="descripcion" placeholder="Write your question here" class="form-input-area"><br/>
                        <input type='submit' name='submit' value='Send' class="form-boton">
                    </div>
                </form>
            </div>
    </div>
</section>

<?php require_once "footer.php" ?>


