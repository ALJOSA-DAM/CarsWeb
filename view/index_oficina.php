<?php
require_once "header1.php";

?>


    <div class="body">
        <div class="zonas-centrales">
            <div class="texto">
                <h2>Nuestras oficinas</h2>
            </div>
        </div>

<?php /*if (isset($_SESSION['u_level']))
    if($_SESSION['u_level'] == 0 ): */?>
    <div class="boton-anadir">
        <a class="boton" href="index2.php?action=formularioAnadirOficina&controller=controller_oficina">Añadir Oficina</a>
    </div>
<?php /*endif; */?>
    <div class="tabla">
        <?php
        //Recorre mediante foreach todos los temas del foro y los pinta por pantalla
        if (!empty($oficinas)) {
            echo '<table>';
            echo '<tr>';
                echo '<th>Nombre</th>';
                echo '<th>Dirección</th>';
                echo '<th>Email</th>';
                echo '<th>Teléfono</th>';
                echo '<th>Num Trabajadores</th>';
            echo '</tr>';
            foreach ($oficinas as $oficina) {
                $id = $oficina['id'];
                $nombre = $oficina['nombre'];
                echo '<form action="" method="post">';
                echo '<tr>';
                    echo '<td>' . $oficina['nombre'], '</td>';
                    echo '<td>' . $oficina ['direccion'] . '</td>';
                    echo '<td>' . $oficina ['email'] . '</td>';
                    echo '<td>' . $oficina ['telefono'] . '</td>';
                    echo '<td>' . $oficina ['num_trabajadores'] . '</td>';
                //if (isset($_SESSION['u_level']))
                    //if($_SESSION['u_level'] == 0 ):
                        echo '<td><a class="boton"  type="submit" href="index2.php?id_oficina=' . $id . '&action=eliminarOficinaController&controller=controller_oficina">Borrar</a></td>';
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
