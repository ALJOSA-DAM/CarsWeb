<?php
require_once "header1_en.php";

?>


    <div class="body">
        <div class="zonas-centrales">
            <div class="texto">
                <h2>Our users</h2>
            </div>
        </div>

<?php /*if (isset($_SESSION['u_level']))
    if($_SESSION['u_level'] == 0 ): */?>
    <div class="boton-anadir">
        <a class="boton" href="index2_en.php?action=formularioAnadirUsuario&controller=controller_usuario_en">Add User</a>
    </div>
<?php /*endif; */?>
    <div class="tabla">
        <?php
        //Recorre mediante foreach todos los temas del foro y los pinta por pantalla
        if (!empty($usuarios)) {
            echo '<table>';
            echo '<tr>';
                echo '<th>Name</th>';
                echo '<th>Last Name</th>';
                echo '<th>DNI</th>';
                echo '<th>Birh Date</th>';
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
                        echo '<td><a class="boton"  type="submit" href="index2.php?id_usuario=' . $id . '&action=eliminarUsuarioController&controller=controller_usuario_en">Delete</a></td>';
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
