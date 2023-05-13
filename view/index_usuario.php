<?php
require_once "header1.php";

?>


    <div class="body">
        <div class="zonas-centrales">
            <div class="texto">
                <h2>Nuestros usuarios</h2>
            </div>
        </div>

<?php /*if (isset($_SESSION['u_level']))
    if($_SESSION['u_level'] == 0 ): */?>
    <div class="boton-anadir">
        <a class="boton" href="index2.php?action=formularioAnadirUsuario&controller=controller_usuario">Añadir Usuario</a>
    </div>
<?php /*endif; */?>
    <div class="tabla">
        <?php
        //Recorre mediante foreach todos los temas del foro y los pinta por pantalla
        if (!empty($usuarios)) {
            echo '<table>';
            echo '<tr>';
                echo '<th>Nombre</th>';
                echo '<th>Apellidos</th>';
                echo '<th>DNI</th>';
                echo '<th>Fecha Nacimiento</th>';
            echo '</tr>';
            foreach ($usuarios as $usuario) {
                $id = $usuario['id'];
                $nombre = $usuario['nombre'];
                echo '<form action="" method="post">';
                echo '<tr>';
                    echo '<td>' . $usuario['nombre'], '</td>';
                    echo '<td>' . $usuario ['apellidos'] . '</td>';
                    echo '<td>' . $usuario ['dni'] . '</td>';
                    echo '<td>' . $usuario ['fecha_nacimiento'] . '</td>';
                //if (isset($_SESSION['u_level']))
                    //if($_SESSION['u_level'] == 0 ):
                        echo '<td><a class="boton"  type="submit" href="index2.php?id_usuario=' . $id . '&action=eliminarUsuarioController&controller=controller_usuario">Borrar</a></td>';
                        //echo '<td><a class="boton"  type="submit" href="index2.php?id_categoria=' . $id . '&cat_name='.$nombre.'&action=formularioModificarOficina&controller=controller_oficina">Modificar</a></td>';
                    //endif;
                echo '</tr>';
                echo '</form>';
            }
            echo '</table>';

        }

        ?>
    </div>
    </div>

<?php include "footer.php";
